@extends('layouts.app')

@section('content')
<div class="container">
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>Días disponibles</h2>
        </div>
        <div class="panel-body" >
            {!! $calendar->calendar() !!}
        </div>
    </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

{!! $calendar->script() !!}
<div class="container">
    <br/>
    <form method="post" action="{{url('event/add')}}">
        @csrf
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <strong> Desde: </strong>  
            <input class="date form-control"  type="date" id="startdate" name="startdate">   
        </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <strong> Hasta: </strong>  
            <input class="date form-control"  type="date" id="enddate" name="enddate">   
        </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Seleccionar periodo</button>
        </div>
        </div>
    </form>
</div>
@endsection