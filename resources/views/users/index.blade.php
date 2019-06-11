@extends('layouts.app')

@section('content')
    
    <h1>Usuarios</h1>
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
                                <input type="checkbox" class="custom-control-input" name="is_admin" id="admin" 
                                @if ($user->is_admin)
                                    checked
                                @endif
                                >
                                <label class="custom-control-label" for="admin">Adminsitrador</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="is_volunteer" id="volunteer" 
                                @if ($user->is_volunteer)
                                    checked
                                @endif
                                >
                                <label class="custom-control-label" for="volunteer">Voluntario</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="is_solicitor" id="solicitor" 
                                @if ($user->is_solicitor)
                                    checked
                                @endif
                                >
                                <label class="custom-control-label" for="solicitant">Solicitante</label>
                            </div>
                        </div>
                        
                        <div id="text-right">
                        <div class="col-md-3 col-sm-3 form-group">
                            <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cambiar privilegios') }}
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
        <p>No hay deseos.</p>
    @endif
@endsection