@extends('layouts.app')

@section('content')
    
    <h1>@lang('lang.users')</h1>
    <br>
    @if(count($users) > 0)
        @foreach($users as $user)
            <div class="card card-body bg-light">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-6">
                        <h3>{{$user->name}} {{$user->surname}}</h3>
                        <p>{{$user->email}}</p>
                    </div>
                    <div id="row">
                    <form action="/usuarios/{{$user->id}}" method="post">
                        @csrf
                        <div class="col-md-9 col-sm-9 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="is_admin" id="admin{{$user->id}}" 
                                @if ($user->is_admin)
                                    checked
                                @endif
                                >
                                <label class="custom-control-label" for="admin{{$user->id}}">@lang('lang.admin')</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="is_volunteer" id="volunteer{{$user->id}}" 
                                @if ($user->is_volunteer)
                                    checked="true"
                                @endif
                                >
                                <label class="custom-control-label" for="volunteer{{$user->id}}">@lang('lang.volunteer')</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="is_solicitor" id="solicitor{{$user->id}}" 
                                @if ($user->is_solicitor)
                                    checked
                                @endif
                                >
                                <label class="custom-control-label" for="solicitor{{$user->id}}">@lang('lang.solicitor')</label>
                            </div>
                        </div>
                        
                        <div id="text-right">
                        <div class="col-md-3 col-sm-3 form-group">
                            <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('lang.privileges') }}
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
        
    @else
        <p>@lang('lang.nousers')</p>
    @endif
@endsection