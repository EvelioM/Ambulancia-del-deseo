@extends('layouts.app')

@section('content')
    <a href="/deseos" class="btn btn-outline-secondary">@lang('lang.back')</a>
    <br><br>
    <h1>{{$deseo->patient->name}} {{$deseo->patient->surname}}</h1>
    <br><h2>@lang('lang.description')</h2><br>
    <p>{{$deseo->descr}}</p>
    <br><h2>@lang('lang.state')</h2><br>
    @if($deseo->state == 'unapproved')

    <div class="container">
        <p>@lang('lang.wish-unapproved')</p>
                
            <div class="btn-group col-md-12">

                <form action="/deseos/approve/{{$deseo->id}}" method="get">
                    <button type="submit" class="btn btn-success mr-3">@lang('lang.approve')</button>
                </form>
            
                

                <form action="/deseos/destroy/{{$deseo->id}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                    <button type="submit" class="btn btn-danger">@lang('lang.delete')</button>
                </form>
            </div>
    </div>
                
    @endif
    @if($deseo->state == 'approved')
    <p>@lang('lang.assignbefore') {{$deseo->last_day}}.</p>
    @endif
    @if($deseo->state == 'granted')
    <p>@lang('lang.grantedon') {{$deseo->scheduled_day}} @lang('lang.byvolunteers')</p>
    <ul>
        @foreach ($deseo->volunteers as $vol)
            <li>{{$vol->name}} {{$vol->surname}}</li>
        @endforeach
    </ul>

    <a href="/deseos/finish/{{$deseo->id}}" class="btn btn-primary">@lang('lang.concluded')</a>
    
    @endif
    @if($deseo->state == 'done')
    <p>@lang('lang.wishended')</p>

    @endif
    <br>
    <hr>
    <small>@lang('lang.madeon') {{$deseo->created_at}} @lang('lang.by') {{$deseo->solicitor->name}} {{$deseo->solicitor->surname}}</small>
    <hr>
@endsection