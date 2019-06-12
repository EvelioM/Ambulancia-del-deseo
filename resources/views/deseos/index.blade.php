@extends('layouts.app')

@section('content')
    
    <h1>@lang('lang.wishes')</h1>
    <br>
    @if(count($deseos) > 0)
        @foreach($deseos as $deseo)
            <div class="card card-body bg-light">
                <div class="row align-items-center">
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/deseos/{{$deseo->id}}">{{$deseo->patient->name}} {{$deseo->patient->surname}}</a></h3>
                        <p>{{$deseo->descr}}</p>
                        <small>@lang('lang.madeon') {{$deseo->created_at}} @lang('lang.by') {{$deseo->solicitor->name}} {{$deseo->solicitor->surname}}</small>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="btn-group-vertical">
                            @if($deseo->state == 'unapproved')
                            <a href="/deseos/{{$deseo->id}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">@lang('lang.unapproved')</a>
                            @endif
                            @if($deseo->state == 'approved')
                            <a href="/deseos/assign/{{$deseo->id}}" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">@lang('lang.approved')</a>
                            @endif
                            @if($deseo->state == 'granted')
                            <a href="/deseos/{{$deseo->id}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">@lang('lang.granted')</a>
                            @endif
                            @if($deseo->state == 'done')
                            <a href="#" class="btn btn-success btn-lg active" role="button" aria-pressed="true">@lang('lang.done')</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
        {{$deseos->links()}}
        
    @else
        <p>@lang('lang.nowishes')</p>
    @endif
@endsection