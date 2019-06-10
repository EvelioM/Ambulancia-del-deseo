<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deseo;
use App\User;
use App\Event;
use App\Patient;
use App\PatientData;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class DeseosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deseos = Deseo::orderBy('created_at','desc')->get();
        return view('deseos.index')->with('deseos', $deseos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $deseo = Deseo::find($id);
        return view('deseos.show')->with('deseo', $deseo);
    }

    public function assignResources($id)
    {
        $deseo = Deseo::find($id);
        $events = Event::where('end_date', '<', $deseo->last_day)->orderBy('end_date')->take(10)->get();
        $colors = ['#8C9EFF', '#8E24AA','#4CAF50','#00796B','#F4511E'];
        $text = ['#000000'.'#FFFFFF'];
        $volunteers = User::whereHas('events', function($query) use($deseo){
            $query->where('end_date', '<', $deseo->last_day);  
        })->get();

        
        
        $jsEvent = [];
        $i = 0;
        if($events->count())
            {
            foreach ($events as $event) 
            {
                $jsEvents[] = Calendar::event(
                    $event->title.': '.$event->volunteer->name.' '.$event->volunteer->surname,
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
        $jsEvents[] = Calendar::event(
            'Posibles fechas para cumplir el deseo',
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

        $calendar = Calendar::addEvents($jsEvents);

        return view('deseos.assign', ['deseo' => $deseo, 'calendar' => $calendar, 'volunteers' => $volunteers,]);
    }

    public function grant(Request $request)
    {
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
            $evento = Event::where([['id_volunteer', $vol->id],
                ['start_date', 'BEFORE', $deseo->scheduled+1],
                ['end_date', 'AFTER', $deseo->scheduled-1]])->first();
            if ($evento) {
                $evento->delete();
            }
        }

        $deseos = Deseo::orderBy('created_at','desc')->get();
        return view('deseos.index')->with('deseos', $deseos);
    }

    public function approve($id)
    {

        $deseo = Deseo::find($id);
        $deseo->state = 'approved';
        $deseo->save();

        $deseos = Deseo::orderBy('created_at','desc')->get();
        return view('deseos.index')->with('deseos', $deseos);
    }

    public function end($id)
    {

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
        $deseo = Deseo::find($id);
        $deseo->delete();

        $deseos = Deseo::orderBy('created_at','desc')->get();
        return view('deseos.index')->with('deseos', $deseos);
    }
}
