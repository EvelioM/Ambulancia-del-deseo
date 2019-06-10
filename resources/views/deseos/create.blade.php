@extends('layouts.app')

@section('content')

<form method="POST" action="/deseos">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Paciente') }}</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                        <div class="col-md-6">
                            <input id="surname" type="text" class="form-control" name="surname" required autocomplete="surname" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento') }}</label>

                        <div class="col-md-6">
                            <input id="birthday" type="date" class="form-control" name="birthday" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Sexo:') }}</label>

                        <div id="gender" class="form-check" >
                                <div class="col-md-6">
                                    <input class="form-check-input" type="radio" name="gender" id="radioMale" value="male">
                                    <label class="form-check-label" for="radioMale">
                                        Hombre
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-check-input" type="radio" name="gender" id="radioFemale" value="female">
                                    <label class="form-check-label" for="radioFemale">
                                        Mujer
                                    </label>
                                </div>
                        </div>
                    </div>        
                </div>
            </div>
            <br>
            <div class="card">
                    <div class="card-header">{{ __('Datos del paciente') }}</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>
                            <div class="col-md-6">
                                <input id="addres" type="text" class="form-control" name="address" required autocomplete="address" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="floor" class="col-md-4 col-form-label text-md-right">{{ __('Piso') }}</label>
                            <div class="col-md-6">
                                <input id="floor" type="number" class="form-control" name="floor" required value=0 autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="elevator" class="col-md-4 col-form-label text-md-right">{{ __('Tiene ascensor') }}</label>

                            <div id="elevator" class="form-check" >
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="elevator" id="radioTiene" value="true">
                                        <label class="form-check-label" for="radioTiene">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="elevator" id="radioNoTiene" value="false">
                                        <label class="form-check-label" for="radioNoTiene">
                                            No
                                        </label>
                                    </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postal_code" class="col-md-4 col-form-label text-md-right">{{ __('Código postal') }}</label>
                            <div class="col-md-6">
                                <input id="postal_code" type="text" pattern="[0-9]*" class="form-control" name="postal_code" required  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Población') }}</label>
                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city"required autocomplete="city" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('Provincia') }}</label>
                            <div class="col-md-6">
                                <input id="province" type="text" class="form-control" name="province" required autocomplete="province" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" pattern="\+[0-9]{2} [0-9]{9}|\\+[0-9]{11}|[0-9]{9}" class="form-control" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="weight" class="col-md-4 col-form-label text-md-right">{{ __('Peso') }}</label>
                            <div class="col-md-6">
                                <input id="weight" type="text" pattern="[0-9]*" class="form-control" name="weight" required  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="insurance" class="col-md-4 col-form-label text-md-right">{{ __('Tiene seguro de salud privado') }}</label>

                            <div id="insurance" class="form-check" >
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="insurance" id="radioTiene" value="true">
                                        <label class="form-check-label" for="radioTiene">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="insurance" id="radioNoTiene" value="false">
                                        <label class="form-check-label" for="radioNoTiene">
                                            No
                                        </label>
                                    </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="previous_instructions" class="col-md-4 col-form-label text-md-right">{{ __('Tiene instrucciones previas') }}</label>

                            <div id="previous_instructions" class="form-check" >
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="previous_instructions" id="radioTiene" value="true">
                                        <label class="form-check-label" for="radioTiene">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="previous_instructions" id="radioNoTiene" value="false">
                                        <label class="form-check-label" for="radioNoTiene">
                                            No
                                        </label>
                                    </div>
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="movility" class="col-md-4 col-form-label text-md-right">{{ __('Estado de movilidad') }}</label>

                            <div id="movility" class="form-check" >
                                    <div class="col-md-12">
                                        <input class="form-check-input" type="radio" name="movility" id="radioAndar" value="walks">
                                        <label class="form-check-label" for="radioAndar">
                                            Puede andar
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-check-input" type="radio" name="movility" id="radioAyuda" value="walks_with_assistance">
                                        <label class="form-check-label" for="radioAyuda">
                                            Puede andar con ayuda
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-check-input" type="radio" name="movility" id="radioSilla" value="wheelchair">
                                        <label class="form-check-label" for="radioSilla">
                                            Va en silla de ruedas
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-check-input" type="radio" name="movility" id="radioCama" value="bedridden">
                                        <label class="form-check-label" for="radioCama">
                                            En cama
                                        </label>
                                    </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="situation" class="col-md-4 col-form-label text-md-right">{{ __('Describa la situación médica y esperanza de vida') }}</label>
                            <div class="col-md-6">
                                <textarea id="situation" class="form-control" name="situation" rows="3" autofocus></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                        <div class="card-header">{{ __('Deseo') }}</div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="wish" class="col-md-4 col-form-label text-md-right">{{ __('Tu deseo') }}</label>
                                <div class="col-md-6">
                                    <textarea id="wish" rows="3" class="form-control" name="wish" autofocus></textarea>
                                </div>
                            </div>
        
                            
                            <div class="form-group row">
                                <label for="last_day" class="col-md-4 col-form-label text-md-right">{{ __('Fecha deseada') }}</label>
        
                                <div class="col-md-6">
                                    <input id="last_day" type="date" class="form-control" name="last_day" required>
                                </div>
                            </div>
        
                            
                            <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Solicitar deseo') }}
                                        </button>
                                    </div>
                                </div>      
                        </div>
                    </div>
        </div>
    </div>
</form>
@endsection