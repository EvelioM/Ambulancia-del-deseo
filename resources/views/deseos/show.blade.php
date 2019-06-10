@extends('layouts.app')

@section('content')
    <a href="/deseos" class="btn btn-outline-secondary">Volver</a>
    <br><br>
    <h1>{{$deseo->patient->name}} {{$deseo->patient->surname}}</h1>
    <br><h2>Descripción</h2><br>
    <p>{{$deseo->descr}}</p>
    <br><h2>Estado</h2><br>
    @if($deseo->state == 'unapproved')

    <div class="container">
        <p>El deseo está pendiente de aprobación</p>
                
            <div class="btn-group col-md-12">

                <form action="/deseos/approve/{{$deseo->id}}" method="get">
                    <button type="submit" class="btn btn-success mr-3">Aprobar</button>
                </form>
            
                

                <form action="/deseos/destroy/{{$deseo->id}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
    </div>
                
    @endif
    @if($deseo->state == 'approved')
    <p>El deseo está aprobado, se deben asignar recursos antes de {{$deseo->last_day}}.</p>
    @endif
    @if($deseo->state == 'granted')
    <p>El deseo ha sido concedido. Se llevará a cabo el {{$deseo->scheduled_day}} por los voluntarios:</voluntarios:></p>
    <ul>
        @foreach ($deseo->volunteers as $vol)
            <li>{{$vol->name}} {{$vol->surname}}</li>
        @endforeach
    </ul>

    <a href="/deseos/finish/{{$deseo->id}}" class="btn btn-primary">El deseo ha concluido</a>
    
    @endif
    @if($deseo->state == 'done')
    <p>El deseo ha sido realizado.</p>

    @endif
    <br>
    <hr>
    <small>Pedido en {{$deseo->created_at}} por {{$deseo->solicitor->name}} {{$deseo->solicitor->surname}}</small>
    <hr>
@endsection