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
                        <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px;font-size: 500%">{!! __('donar.donaciones')!!}</h1>
                </div>                   
            </div>
            <br><br>
                <div class="row" >
                    <div class="columnSingle">
                            <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">{!! __('donar.quiero')!!}</h1>
                        <div class="col-md-12">
                                <p style="text-align: center;margin-bottom: 8px">{!! __('donar.la')!!}</p>
                        </div>
                    </div>                   
                </div>
                <br><br>
    <div class="row">
                    
        <div class="columnTwo">
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <img alt="Bootstrap Image Preview" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/donaciones-fondo-trabajando-ambulancia-del-deseo.jpg-1024x678.jpg" class="img-fluid"  />
                        </div>
                    </div>
                </div>
         </div>
            <div class="columnTwo">
                    <br><br><br>
                    
                    <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">
                        {!! __('donar.donacionesa')!!}</h1>
                    <div class="col-md-12">
                            <p style="text-align: center;margin-bottom: 8px">{!! __('donar.si')!!}</p>
                    </div>
                    <br><br>
                    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                        <div class="wpb_wrapper" style="width: 10%;margin-left: 42%;">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="D2YZM2XCLRV6E">
                            <input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">
                            <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                            </form>
                
                        </div>
                    </div>
            </div>
                               
        </div>
    <br><br>

    <div class="row">
                
        <div class="columnTwo">
                <br><br><br>
                
                <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">
                    {!! __('donar.aportacion')!!}</h1>
                <div class="col-md-12">
                        <p style="text-align: center;margin-bottom: 8px">{!! __('donar.site')!!}</p>
                </div>
        </div>
        
        <div class="columnTwo">
                <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <img alt="Bootstrap Image Preview" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/donaciones-fondo-transferencia-ambulancia-del-deseo-1024x677.jpg" class="img-fluid"  />
                            </div>
                        </div>
                    </div>
        </div>
        
            
            
            
    </div>
    <br><br>

    <div class="row" >
            <div class="columnSingle">
                    <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">{!! __('donar.ventajas')!!}</h1>
                <div class="col-md-12">
                        <p style="text-align: center;margin-bottom: 8px">{!! __('donar.te')!!}</p>
                </div>
            </div>                   
        </div>

   </body>
   </html>






@endsection