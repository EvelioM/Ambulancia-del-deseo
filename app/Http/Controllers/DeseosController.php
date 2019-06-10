<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deseo;
use App\Patient;
use App\PatientData;

class DeseosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deseos = Deseo::orderBy('created_at','desc')->paginate(10);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
