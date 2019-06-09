<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function laFundacion(){
        return view('pages.laFundacion');
    }

    public function noticias(){
        return view('pages.noticias');
    }

    public function contacto(){
        return view('pages.contacto');
    }

    public function donar(){
        return view('pages.donar');
    }

    public function patrocinadores(){
        return view('pages.patrocinadores');
    }
}
