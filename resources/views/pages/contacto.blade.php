@extends('layouts.app')

@section('content')
    
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    
        
</head>
<body>
        <div class="row" >
                <div class="columnSingle">
                        <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">{!! __('contacto.si')!!}</h1>
                </div>                   
            </div>

        <br><br>
       
        


            <div class="container">  
                    <form id="contact" action="" method="post">
                            <div class="columnSingle">
                                    <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">{!! __('contacto.en')!!}</h1>
                                <div class="col-md-12">
                                        <p style="text-align: center;margin-bottom: 8px">{!! __('contacto.rellena')!!}</p>
                                </div>
                            </div>
                      <fieldset>
                        <input placeholder="{!! __('contacto.nombre')!!}" type="text" tabindex="1" required autofocus>
                      </fieldset>
                      <fieldset>
                        <input placeholder="{!! __('contacto.email')!!}" type="email" tabindex="2" required>
                      </fieldset>
                      <fieldset>
                        <input placeholder="{!! __('contacto.telefono')!!}" type="tel" tabindex="3" required>
                      </fieldset>
                      <fieldset>
                        <input placeholder="{!! __('contacto.asunto')!!}" type="text" tabindex="4" required>
                      </fieldset>
                      <fieldset>
                        <textarea placeholder="{!! __('contacto.mensaje')!!}" tabindex="5" required></textarea>
                      </fieldset>
                      <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">{!! __('contacto.enviar')!!}</button>
                      </fieldset>
                      
                    </form>
                  </div>
                

</body>
</html>


@endsection