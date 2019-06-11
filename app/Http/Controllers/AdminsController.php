<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminsController extends Controller
{
    public function index()
    {
        $users = User::where('id', '<>', auth()->user()->id)->get();
        return view('users.index')->with('users', $users);
    }

    public function changePriv(Request $request, $id)
    {
        $user = User::find($id);
        if($request->input('is_admin')){
            $user->is_admin = true;
        }else{
            $user->is_admin = false;
        }
        if($request->input('is_volunteer')){
            $user->is_volunteer = true;
        }else{
            $user->is_volunteer = false;
        }
        if($request->input('is_solicitor')){
            $user->is_solicitor = true;
        }else{
            $user->is_solicitor = false;
        }
        $user->save();

        $users = User::where('id', '<>', auth()->user()->id)->get();
        return view('users.index')->with('users', $users);
    }

}
