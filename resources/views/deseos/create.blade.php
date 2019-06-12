@extends('layouts.app')

@section('content')

<form method="POST" action="/deseos">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('lang.patient') }}</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('lang.name') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('lang.surname') }}</label>

                        <div class="col-md-6">
                            <input id="surname" type="text" class="form-control" name="surname" required autocomplete="surname" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('lang.birthday') }}</label>

                        <div class="col-md-6">
                            <input id="birthday" type="date" class="form-control" name="birthday" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('lang.sex') }}</label>

                        <div id="gender" class="form-check" >
                                <div class="col-md-6">
                                    <input class="form-check-input" type="radio" name="gender" id="radioMale" value="male">
                                    <label class="form-check-label" for="radioMale">
                                        @lang('lang.male')
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-check-input" type="radio" name="gender" id="radioFemale" value="female">
                                    <label class="form-check-label" for="radioFemale">
                                        @lang('lang.female')
                                    </label>
                                </div>
                        </div>
                    </div>        
                </div>
            </div>
            <br>
            <div class="card">
                    <div class="card-header">{{ __('lang.patientdata') }}</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('lang.address') }}</label>
                            <div class="col-md-6">
                                <input id="addres" type="text" class="form-control" name="address" required autocomplete="address" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="floor" class="col-md-4 col-form-label text-md-right">{{ __('lang.floor') }}</label>
                            <div class="col-md-6">
                                <input id="floor" type="number" class="form-control" name="floor" required value=0 autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="elevator" class="col-md-4 col-form-label text-md-right">{{ __('lang.haselevator') }}</label>

                            <div id="elevator" class="form-check" >
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="elevator" id="radioTiene" value="true">
                                        <label class="form-check-label" for="radioTiene">
                                            @lang('lang.yes')
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="elevator" id="radioNoTiene" value="false">
                                        <label class="form-check-label" for="radioNoTiene">
                                            @lang('lang.no')
                                        </label>
                                    </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postal_code" class="col-md-4 col-form-label text-md-right">{{ __('lang.cp') }}</label>
                            <div class="col-md-6">
                                <input id="postal_code" type="text" pattern="[0-9]*" class="form-control" name="postal_code" required  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('lang.city') }}</label>
                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city"required autocomplete="city" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('lang.province') }}</label>
                            <div class="col-md-6">
                                <input id="province" type="text" class="form-control" name="province" required autocomplete="province" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('lang.phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" pattern="\+[0-9]{2} [0-9]{9}|\\+[0-9]{11}|[0-9]{9}" class="form-control" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="weight" class="col-md-4 col-form-label text-md-right">{{ __('lang.weight') }}</label>
                            <div class="col-md-6">
                                <input id="weight" type="text" pattern="[0-9]*" class="form-control" name="weight" required  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="insurance" class="col-md-4 col-form-label text-md-right">{{ __('lang.insurance') }}</label>

                            <div id="insurance" class="form-check" >
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="insurance" id="radioTiene" value="true">
                                        <label class="form-check-label" for="radioTiene">
                                            @lang('lang.yes')
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="insurance" id="radioNoTiene" value="false">
                                        <label class="form-check-label" for="radioNoTiene">
                                            @lang('lang.no')
                                        </label>
                                    </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="previous_instructions" class="col-md-4 col-form-label text-md-right">{{ __('lang.instructions') }}</label>

                            <div id="previous_instructions" class="form-check" >
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="previous_instructions" id="radioTiene" value="true">
                                        <label class="form-check-label" for="radioTiene">
                                            @lang('lang.yes')
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="radio" name="previous_instructions" id="radioNoTiene" value="false">
                                        <label class="form-check-label" for="radioNoTiene">
                                            @lang('lang.no')
                                        </label>
                                    </div>
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="movility" class="col-md-4 col-form-label text-md-right">{{ __('lang.movility') }}</label>

                            <div id="movility" class="form-check" >
                                    <div class="col-md-12">
                                        <input class="form-check-input" type="radio" name="movility" id="radioAndar" value="walks">
                                        <label class="form-check-label" for="radioAndar">
                                            @lang('lang.walks')
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-check-input" type="radio" name="movility" id="radioAyuda" value="walks_with_assistance">
                                        <label class="form-check-label" for="radioAyuda">
                                            @lang('lang.needshelp')
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-check-input" type="radio" name="movility" id="radioSilla" value="wheelchair">
                                        <label class="form-check-label" for="radioSilla">
                                            @lang('lang.wheelchair')
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-check-input" type="radio" name="movility" id="radioCama" value="bedridden">
                                        <label class="form-check-label" for="radioCama">
                                            @lang('lang.bedridden')
                                        </label>
                                    </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="situation" class="col-md-4 col-form-label text-md-right">{{ __('lang.medicalsituation') }}</label>
                            <div class="col-md-6">
                                <textarea id="situation" class="form-control" name="situation" rows="3" autofocus></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                        <div class="card-header">{{ __('lang.wish') }}</div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="wish" class="col-md-4 col-form-label text-md-right">{{ __('lang.yourwish') }}</label>
                                <div class="col-md-6">
                                    <textarea id="wish" rows="3" class="form-control" name="wish" autofocus></textarea>
                                </div>
                            </div>
        
                            
                            <div class="form-group row">
                                <label for="last_day" class="col-md-4 col-form-label text-md-right">{{ __('lang.desireddate') }}</label>
        
                                <div class="col-md-6">
                                    <input id="last_day" type="date" class="form-control" name="last_day" required>
                                </div>
                            </div>
        
                            
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('lang.make-wish') }}
                                    </button>
                                </div>
                            </div>      
                        </div>
                    </div>
        </div>
    </div>
</form>
@endsection