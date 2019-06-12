<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Carbon\Carbon;
use App;

class VolunteersController extends Controller
{

    public function index()
    {
        $events = [];
        $data = auth()->user()->events;
        if($data->count())
            {
            foreach ($data as $key => $value) 
            {
                if($value->title == 'Disponible'){
                    $events[] = Calendar::event(
                        __('lang.'.$value->title),
                        true,
                        new \DateTime($value->start_date),
                        new \DateTime($value->end_date.'+1 day'),
                        null,
                        // Add color
                        ['color' => '#61D800',
                        'textColor' => '#FFFFFF',]
                    );        
                }else{
                    $events[] = Calendar::event(
                        $value->title,
                        true,
                        new \DateTime($value->start_date),
                        new \DateTime($value->end_date.'+1 day'),
                        null,
                        // Add color
                        ['color' => '#C62828',
                        'textColor' => '#FFFFFF',]
                    );
                    
                }
               
            }
        }
        $calendar = Calendar::addEvents($events)->setOptions([ //set fullcalendar options
            'locale' => App::getLocale()
        ]);
        return view('volunteers.calendar', compact('calendar'));
    }

    public function addEvent(Request $request)
    {

        if($request->input('tipo') == 'concreto'){

            $request->validate([
                'startdate' => 'required',
                'enddate' => 'required',
            ]);

            $event= new Event();
            $event->title='Disponible';
            $event->start_date=$request->get('startdate');
            $event->end_date=$request->get('enddate');
            $event->id_volunteer = auth()->user()->id;
            $event->save();
        }
        if($request->input('tipo') == 'periodo'){

            $request->validate([
                'from' => 'required',
                'months' => 'required',
                'to' => 'required',
            ]);

            for ($i=0; $i < ($request->get('months')*4); $i++) {
                if($i<1){
                    $start_date = new Carbon('next '.$request->get('from'));
                    $end_date = new Carbon('next '.$request->get('from'));
                    $end_date->addDay();
                    if($start_date->diffInDays($end_date) < 0){
                        $end_date->addWeek();
                    }
                }else{
                    $start_date->addWeek();
                    $end_date->addWeek();
                }
                $event= new Event();
                $event->title='Disponible';
                $event->start_date = $start_date;
                $event->end_date = $end_date;
                $event->id_volunteer = auth()->user()->id;
                $event->save();
            }
        }
        
        return $this->index();
    }
}
