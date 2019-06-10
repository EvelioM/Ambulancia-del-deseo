@extends('layouts.app')

@section('content')
    <a href="/deseos" class="btn btn-outline-secondary">Volver</a>
    <br><br>
    <h1>{{$deseo->patient->name}} {{$deseo->patient->surname}}</h1>
    <br><h2>Descripción</h2><br>
    <p>{{$deseo->descr}}</p>
    <br><h2>Estado</h2><br>
    @if($deseo->state == 'unapproved')
        <p>El deseo está pendiente de aprobación</p>
        @endif
        @if($deseo->state == 'approved')
        <p>El deseo está aprobado, se deben asignar recursos antes de {{$deseo->last_day}}.</p>
        @endif
        @if($deseo->state == 'granted')
        <p>El deseo ha sido concedido. Se llevará a cabo el {{$deseo->scheduled_day}}.</p>
        @endif
        @if($deseo->state == 'done')
        <p>El deseo ha sido realizado.</p>
        @endif
    <br>
    <hr>
    <small>Pedido en {{$deseo->created_at}} por {{$deseo->solicitor->name}} {{$deseo->solicitor->surname}}</small>
    <hr>
@endsection