<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deseo;
use App\User;
use App\Event;
use App\Patient;
use App\PatientData;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Carbon\Carbon;
use App;

class DeseosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!auth()->user()->is_admin){
            return redirect('/');
        }

        $deseos = Deseo::orderBy('created_at','desc')->paginate(5);
        return view('deseos.index')->with('deseos', $deseos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!auth()->user()->is_solicitor){
            return redirect('/');
        }

        return view('deseos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!auth()->user()->is_solicitor){
            return redirect('/');
        }

        // Create the patient
        $patient = new Patient;
        $patient->name = $request->input('name');
        $patient->surname = $request->input('surname');
        $patient->gender = $request->input('gender');
        $patient->birthday = $request->input('birthday');

        $patient->save();

        // Create patient data
        $pd = new PatientData;
        $pd->patient_id = $patient->id;
        $pd->address = $request->input('address');
        $pd->floor = $request->input('floor'); 
        $pd->has_elevator = boolval($request->input('elevator'));
        $pd->postal_code = $request->input('postal_code');
        $pd->city = $request->input('city');
        $pd->province = $request->input('province');
        $pd->phone = $request->input('phone');
        $pd->weight = $request->input('weight');
        $pd->private_health_insurance = boolval($request->input('insurance'));
        $pd->has_previous_instructions = boolval($request->input('previous_instructions'));
        $pd->movility = $request->input('movility');
        $pd->situation = $request->input('situation');
        
        $pd->save();

        // Create the wish
        $wish = new Deseo;
        $wish->state = 'unapproved';
        $wish->patient_id = $patient->id;
        $wish->solicitor_id = auth()->user()->id;
        $wish->descr = $request->input('wish');
        $wish->last_day = $request->input('last_day');
        
        $wish->save();

        return view('deseos.exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!auth()->user()->is_admin){
            return redirect('/');
        }

        $deseo = Deseo::find($id);
        return view('deseos.show')->with('deseo', $deseo);
    }

    public function assignResources($id)
    {
        if(!auth()->user()->is_admin){
            return redirect('/');
        }

        $deseo = Deseo::find($id);
        $events = Event::where('start_date', '<', $deseo->last_day)->orderBy('end_date')->take(10)->get();
        $colors = ['#8C9EFF', '#8E24AA','#4CAF50','#00796B','#F4511E'];
        $text = ['#000000'.'#FFFFFF'];
        $volunteers = User::whereHas('events', function($query) use($deseo){
            $query->where('start_date', '<=', $deseo->last_day);  
        })->get();

        
        
        $jsEvent = [];
        $i = 0;
        if($events->count())
            {
            foreach ($events as $event) 
            {
                if($event->title == 'Disponible'){
                    $jsEvents[] = Calendar::event(
                        __('lang.'.$event->title).': '.$event->volunteer->name.' '.$event->volunteer->surname,
                        true,
                        new \DateTime($event->start_date),
                        new \DateTime($event->end_date.'+1 day'),
                        null,
                        // Add color
                        [
                            'color' => $colors[$event->volunteer->id%6],
                            'textColor' => $text[$event->volunteer->id%2],
                        ]
                    );
                }else{
                    $jsEvents[] = Calendar::event(
                        $event->title,
                        true,
                        new \DateTime($event->start_date),
                        new \DateTime($event->end_date.'+1 day'),
                        null,
                        // Add color
                        [
                            'color' => $colors[$event->volunteer->id%6],
                            'textColor' => $text[$event->volunteer->id%2],
                        ]
                    );
                }
            }
        }
        $jsEvents[] = Calendar::event(
            __('lang.possibledates'),
            true,
            new \DateTime(),
            new \DateTime($deseo->last_day),
            null,
            // Add color
            [
                'color' => '#B71C1C',
                'textColor' => '#FFFFFF',
            ]
        );

        $calendar = Calendar::addEvents($jsEvents)->setOptions([ //set fullcalendar options
            'locale' => App::getLocale()
        ]);

        return view('deseos.assign', ['deseo' => $deseo, 'calendar' => $calendar, 'volunteers' => $volunteers,]);
    }

    public function grant(Request $request)
    {
        if(!auth()->user()->is_admin){
            return redirect('/');
        }

        $deseo = Deseo::find($request->input('deseo_id'));
        $deseo->scheduled_day = $request->input('scheduled');
        $deseo->state = 'granted';
        $vol_ids = $request->input('volunteers');
        $volunteers = [];

        foreach ($vol_ids as $key => $id) {
            $volunteers[$key] = User::find($id);
            $deseo->volunteers()->attach($id);
        }

        $deseo->save();

        foreach ($volunteers as $key => $vol) {
            $evento = Event::where('id_volunteer', $vol->id)
                ->whereDate('start_date', '<=', $deseo->scheduled_day)
                ->whereDate('end_date', '>=', $deseo->scheduled_day)->first();
            if ($evento) {
                if($evento->start_date < $deseo->scheduled_day){
                    $eventoAntes = new Event;
                    $eventoAntes->title='Disponible';
                    $eventoAntes->start_date = $evento->start_date;
                    $newEndDate = new Carbon($deseo->scheduled_day);
                    $newEndDate->subDays(1);
                    $eventoAntes->end_date = $newEndDate;
                    $eventoAntes->id_volunteer = $evento->id_volunteer;
                    $eventoAntes->save();
                }
                if($evento->end_date > $deseo->scheduled_day){
                    $eventoDespues = new Event;
                    $eventoDespues->title='Disponible';
                    $newStartDate = new Carbon($deseo->scheduled_day);
                    $newStartDate->addDays(1);
                    $eventoDespues->start_date = $newStartDate;
                    $eventoDespues->end_date = $evento->end_date;
                    $eventoDespues->id_volunteer = $evento->id_volunteer;
                    $eventoDespues->save();
                }

                $eventoEntonces = new Event;
                $eventoEntonces->title='Deseo de '.$deseo->patient->name.' '.$deseo->patient->surname;
                $eventoEntonces->start_date = $deseo->scheduled_day;
                $eventoEntonces->end_date = $deseo->scheduled_day;
                $eventoEntonces->id_volunteer = $evento->id_volunteer;
                $eventoEntonces->save();
                $evento->delete();
            }
        }

        $deseos = Deseo::orderBy('created_at','desc')->get();
        return view('deseos.index')->with('deseos', $deseos);
    }

    public function approve($id)
    {
        if(!auth()->user()->is_admin){
            return redirect('/');
        }

        $deseo = Deseo::find($id);
        $deseo->state = 'approved';
        $deseo->save();

        $deseos = Deseo::orderBy('created_at','desc')->get();
        return view('deseos.index')->with('deseos', $deseos);
    }

    public function end($id)
    {
        if(!auth()->user()->is_admin){
            return redirect('/');
        }

        $deseo = Deseo::find($id);
        $deseo->state = 'done';
        $deseo->save();

        $deseos = Deseo::orderBy('created_at','desc')->get();
        return view('deseos.index')->with('deseos', $deseos);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!auth()->user()->is_admin){
            return redirect('/');
        }

        $deseo = Deseo::find($id);
        $deseo->delete();

        $deseos = Deseo::orderBy('created_at','desc')->get();
        return view('deseos.index')->with('deseos', $deseos);
    }
}
