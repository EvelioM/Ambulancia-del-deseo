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

    
    <br/>
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{url('event/add')}}">
        @csrf
        <hr>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
            <input class="form-check-input" type="radio" name="tipo" id="concreto" value="concreto" checked>
            <label class="form-check-label" for="concreto">
                Quiero seleccionar un periodo concreto.
            </label>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <strong>Desde:</strong>  
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
        <hr>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
            <input class="form-check-input" type="radio" name="tipo" id="periodo" value="periodo">
            <label class="form-check-label" for="periodo">
                Quiero seleccionar una rutina.
            </label>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="from"><strong> De: </strong></label>
            <select class="custom-select d-block w-100" id="from" name="from">
                <option value="monday">Lunes</option>
                <option value="tuesday">Martes</option>
                <option value="wednesday">Miércoles</option>
                <option value="thursday">Jueves</option>
                <option value="friday">Viernes</option>
                <option value="saturday">Sábado</option>
                <option value="sunday">Domingo</option>
            </select>
        </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="to"><strong> A: </strong></label>
            <select class="custom-select d-block w-100" id="to" name="to">
                <option value="monday">Lunes</option>
                <option value="tuesday">Martes</option>
                <option value="wednesday">Miércoles</option>
                <option value="thursday">Jueves</option>
                <option value="friday">Viernes</option>
                <option value="saturday">Sábado</option>
                <option value="sunday">Domingo</option>
            </select>   
        </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <strong> Durante cuantos meses: </strong>  
            <input class="form-control"  type="number" id="months" name="months">   
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Seleccionar periodo</button>
        </div>
        </div>
    </form>
</div>
@endsection