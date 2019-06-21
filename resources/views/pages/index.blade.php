@extends('layouts.app')

@section('content')





<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ambulancia del Deseo</title>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

        <style>
            .container {
            width: 200%;
            }
            .carousel-caption{
            top: 50%;
            transform: translateY(-50%)
            text-transform: uppercase;
            }
            .column {
            float: left;
            width: 33.33%;
            }
            .columnSingle {
            float: left;
            width: 100%;
            }
            .columnTwo {
            float: left;
            width: 50%;
            }
            .row:after {
            content: "";
            display: table;
            clear: both;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <!--
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="arousel-inner" role="listbox">
                    <div class="item active">
                        <img height="auto" width="auto" src="https://ambulanciadeldeseo.es/wp-content\uploads\2018\10\banner-contacto-ambulancia-del-deseo.jpg">
                        <div class="carousel-caption">
                            <h1>text</h1>
                            <br>
                            <button type="button" class="btn btn-default">text2</button>
                        </div>
                    </div>
                    <div> 
                        <img height="auto" width="auto" src="https://ambulanciadeldeseo.es/wp-content\uploads\2018\10\banner-contacto-ambulancia-del-deseo.jpg">
                    </div>
                    <div>
                        <img height="auto" width="auto" src="https://ambulanciadeldeseo.es/wp-content\uploads\2018\10\banner-contacto-ambulancia-del-deseo.jpg">
                    </div>
                </div>
            </div>
            -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel slide" id="carousel-495818">
                            <ol class="carousel-indicators">
                                <li data-slide-to="0" data-target="#carousel-495818" class="active">
                                </li>
                                <li data-slide-to="1" data-target="#carousel-495818">
                                </li>
                                
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" alt="Carousel Bootstrap First" src="https://ambulanciadeldeseo.es/wp-content\uploads\2018\10\banner-contacto-ambulancia-del-deseo.jpg" />
                                    <div class="carousel-caption">
                                        <h4>
                                            {!! __('index.energia')!!}
                                        </h4>
                                        <p>
                                            {!! __('index.imposible')!!}
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://ambulanciadeldeseo.es/wp-content\uploads\2018\10\fondo-slide1-inicio-ambulancia-del-deseo.jpg" />
                                    <div class="carousel-caption">
                                        <h4>
                                            {!! __('index.energia')!!}
                                            
                                        </h4>
                                        <p>
                                            {!! __('index.imposible')!!}
                                        </p>
                                    </div>
                                </div>
                                
                            </div> <a class="carousel-control-prev" href="#carousel-495818" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-495818" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>

        

            
                    
            <div class="row">
                
                <div class="column">
                        <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">
                            {!! __('index.1')!!}</h1>
                        <div class="col-md-12">
                                <p style="text-align: center;margin-bottom: 8px">{!! __('index.1.1')!!}</p>
                        </div>
                </div>
                
                <div class="column">
                        <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">
                            {!! __('index.2')!!}</h1>
                        <div class="col-md-12">
                                <p style="text-align: center;margin-bottom: 8px">
                                    {!! __('index.2.1')!!}      
                                </p>
                        </div>
                </div>
                
                <div class="column">
                        <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">
                            {!! __('index.3')!!}</h1>
                        <div class="col-md-12">
                                <p style="text-align: center;margin-bottom: 8px">
                                    {!! __('index.3.1')!!}
                                </p>
                        </div>
                </div>
                
            </div>
            


                <br><br>

                    
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://player.vimeo.com/video/301355473?dnt=1&app_id=122963"></iframe>
                </div>

                <br><br>


            
                
                <div class="row" >
                        <div class="columnSingle">
                                <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">{!! __('index.entrevista')!!}</h1>
                    <div class="col-md-12">
                            <p style="text-align: center;margin-bottom: 8px">{!! __('index.hace')!!}</p>
                    </div>
                        </div>
                    
                        
                </div>
                
            
            
                    <br><br>





            <div class="vc_column-inner "><div class="wpb_wrapper">
                    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                        <div class="wpb_wrapper">
                            <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/517120233&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            
            <br><br>


            <div class="row">
                    
                <div class="columnTwo">
                        <br><br><br><br><br><br>
                        <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">
                            {!! __('index.mario')!!}</h1><br><br>
                        <h2 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">
                            {!! __('index.peque')!!}</h2>
                                <br><br>
                        <div class="col-md-12">
                                <p style="text-align: center;margin-bottom: 8px">{!! __('index.si')!!}</p>
                        </div>
                </div>
                
                <div class="columnTwo">
                        <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img alt="Bootstrap Image Preview" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/osito-mario-ambulancia-del-deseo.png" class="img-fluid"  />
                                    </div>
                                </div>
                            </div>
                </div>
                    
                    
                    
            </div>
            <br><br>
            
            <!-- 
            <h1>Index</h1>
            {!! __('index.hello')!!}
            @lang('index.hola')
            -->
        </div>
    </body>

</html>
@endsection