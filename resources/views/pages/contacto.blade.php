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
        <br><br>
        <div class="row" >
                <div class="columnSingle">
                        <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">{!! __('contacto.si')!!}</h1>
                </div>                   
            </div>

        
       
        


            <div class="container">  
                    <form id="contact" data-es_form_id="es_widget_form">
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
                
                  <div class="vc_row wpb_row vc_row-fluid mkd-section vc_custom_1541393665490 mkd-content-aligment-left" style=""><div class="clearfix mkd-full-section-inner"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                            <div class="wpb_wrapper">
                                <iframe width="100%" height="650" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-1.152893900871277%2C37.99989541450275%2C-1.1469072103500368%2C38.00237675366954&amp;layer=cyclemap" style="border: 1px solid black"></iframe><br><small><a href="https://www.openstreetmap.org/#map=18/38.00114/-1.14990&amp;layers=C">{!! __('contacto.ver')!!}</a></small>
                            </div>
                        </div>
                    </div></div></div></div></div>
</body>
</html>


@endsection