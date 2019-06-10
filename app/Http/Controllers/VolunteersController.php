<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

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
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.'+1 day'),
                    null,
                    // Add color
                    [
                        'color' => '#61D800',
                        'textColor' => '#FFFFFF',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('volunteers.calendar', compact('calendar'));
    }

    public function addEvent(Request $request)
    {
        $event= new Event();
        $event->title='Disponible';
        $event->start_date=$request->get('startdate');
        $event->end_date=$request->get('enddate');
        $event->id_volunteer = auth()->user()->id;
        $event->save();
        return $this->index();
    }
}
