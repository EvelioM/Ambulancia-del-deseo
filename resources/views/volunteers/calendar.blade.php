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
            <h2>@lang('lang.availables')</h2>
        </div>
        <div class="panel-body" >
            {!! $calendar->calendar() !!}
        </div>
    </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/locale-all.js"></script>
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
                @lang('lang.selectconcrete')
            </label>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <strong>@lang('lang.from')</strong>  
            <input class="date form-control"  type="date" id="startdate" name="startdate">   
        </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <strong> @lang('lang.to') </strong>  
            <input class="date form-control"  type="date" id="enddate" name="enddate">   
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
            <input class="form-check-input" type="radio" name="tipo" id="periodo" value="periodo">
            <label class="form-check-label" for="periodo">
                @lang('lang.selectpattern')
            </label>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="from"><strong> @lang('lang.from2') </strong></label>
            <select class="custom-select d-block w-100" id="from" name="from">
                <option value="monday">@lang('lang.monday')</option>
                <option value="tuesday">@lang('lang.tuesday')</option>
                <option value="wednesday">@lang('lang.wednesday')</option>
                <option value="thursday">@lang('lang.thursday')</option>
                <option value="friday">@lang('lang.friday')</option>
                <option value="saturday">@lang('lang.saturday')</option>
                <option value="sunday">@lang('lang.sunday')</option>
            </select>
        </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="to"><strong> @lang('lang.to2') </strong></label>
            <select class="custom-select d-block w-100" id="to" name="to">
                <option value="monday">@lang('lang.monday')</option>
                <option value="tuesday">@lang('lang.tuesday')</option>
                <option value="wednesday">@lang('lang.wednesday')</option>
                <option value="thursday">@lang('lang.thursday')</option>
                <option value="friday">@lang('lang.friday')</option>
                <option value="saturday">@lang('lang.saturday')</option>
                <option value="sunday">@lang('lang.sunday')</option>
            </select>   
        </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <strong> @lang('lang.howmanymonths') </strong>  
            <input class="form-control"  type="number" id="months" name="months">   
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">@lang('lang.selectperiod')</button>
        </div>
        </div>
    </form>
</div>
@endsection