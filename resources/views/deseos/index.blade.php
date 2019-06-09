@extends('layouts.app')

@section('content')
    <h1>Deseos</h1>
    @if(count($deseos) > 0)
        @foreach($deseos as $deseo)
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3>{{$deseo->patient->name}} {{$deseo->patient->surname}}</h3>
                        <p><a href="/deseos/{{$deseo->id}}">{{$deseo->descr}}</a></p>
                        <small>Pedido en {{$deseo->created_at}} por {{$deseo->solicitor->name}} {{$deseo->solicitor->surname}}</small>
                    </div>
                    <div class="col-md-4 col-sm-4">
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">{{$deseo->state}}</a>
                    </div>
                </div>
            </div>
        @endforeach
        {{$deseos->links()}}
    @else
        <p>No hay deseos.</p>
    @endif
@endsection