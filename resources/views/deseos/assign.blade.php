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
        @if (count($volunteers)>0)
        <form method="post" action="{{url('deseos/grant')}}">
            @csrf
            <input type="hidden" name="deseo_id" value="{{$deseo->id}}">
            <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong> El día: </strong>  
                <input class="date form-control"  type="date" id="scheduled" name="scheduled">   
            </div>
        </div>

            
            @foreach ($volunteers as $volunteer)
            
            <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="volunteers[]" value="{{$volunteer->id}}" id="check{{$volunteer->id}}">
                    <label class="form-check-label" for="check{{$volunteer->id}}">
                        {{$volunteer->name}} {{$volunteer->surname}}
                    </label>
                </div>
                    </div>
            </div>
            @endforeach
            
            

            <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success">Asignar</button>
            </div>
            </div>
        </form>
        @else
            <p>No hay voluntarios disponibles.</p>
        @endif

        
</div>
@endsection