@extends('layouts.app')

@section('content')
     
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ambulancia del Deseo</title>
        <style>
            .img-box {
            position: relative;
            width: 90%;
            }

            .img-box img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            height: auto;
            }

            .img-box:hover > .overlay {
            opacity: 0.75;
            cursor: pointer;  
            }

            .overlay {
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: #8EA20C;
            }

            .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
            }
            .columnFour {
            float: left;
            width: 25%;
            }
            .columnThree {
            float: center;
            width: 25%;
            }
            .columnTwo {
            float: left;
            width: 50%;
            }
        </style>
    </head>
    <body>

            <br><br>
            <div class="row">
                    
                    <div class="columnTwo">
                            <br><br><br>
                            
                            <div class="col-md-12">
                                    <p style="text-align: center;margin-bottom: 8px">{!! __('fundacion.en')!!}</p>
                            </div>
                    </div>
                    
                    <div class="columnTwo">
                            <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img alt="Bootstrap Image Preview" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/la-fundacion-Kees-Veldboer-ambulancia-del-deseo-768x502.png" class="img-fluid"  />
                                        </div>
                                    </div>
                                </div>
                    </div>
                    
                        
                        
                        
                </div>


                <br><br>



















        
            <div class="row" >
                    <div class="column">
                            <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">{!! __('fundacion.patronato')!!}</h1>
                <div class="col-md-12">
                        <p style="text-align: center;margin-bottom: 8px;">{!! __('fundacion.ponemos')!!}</p>
                </div>
                    </div>
                
                    
            </div>
            <br><br>




            <div class="row">
                
                    <div class="columnFour">
    
                        <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                        <img width="100" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/manuel-pardo.jpg">
                        <div class="overlay">
                            <div class="text">Manuel Pardo</div>
                        </div>
                        </div>&nbsp;
                        
                    </div>
                    <div class="columnFour">
                        <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                        <img width="100" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/jose-manuel-salas.jpg">
                        <div class="overlay">
                            <div class="text">José Manuel Salas</div>
                        </div>
                        </div>&nbsp;
                    </div>
                    <div class="columnFour">
                            <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                            <img width="100" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/carolina-canovas.jpg">
                            <div class="overlay">
                                <div class="text">Carolina Cánovas</div>
                            </div>
                            </div>&nbsp;
                        </div>
                    <div class="columnFour">
                            <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                            <img width="100" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/laura-juguera.jpg">
                            <div class="overlay">
                                <div class="text">Laura Juguera</div>
                            </div>
                            </div>&nbsp;
                        </div>
            </div>






            <div class="row" >
                    <div class="column">
                            <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">{!! __('fundacion.equipo')!!}</h1>
                <div class="col-md-12">
                        <p style="text-align: center;margin-bottom: 8px;">{!! __('fundacion.para')!!}</p>
                </div>
                    </div>
                
                    
            </div>
            <br><br>

            <div class="row">
                
                    <div class="columnFour">
    
                        <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                        <img width="100" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/miguel-angel-carrasco.jpg">
                        <div class="overlay">
                            <div class="text">Miguel Ángel Carrasco</div>
                        </div>
                        </div>&nbsp;
                        
                    </div>
                    <div class="columnFour">
                        <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                        <img width="100" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/ana-santana.jpg">
                        <div class="overlay">
                            <div class="text">Ana Santana</div>
                        </div>
                        </div>&nbsp;
                    </div>
                    <div class="columnFour">
                            <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                            <img width="100" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/mercedes-canovas.jpg">
                            <div class="overlay">
                                <div class="text">Mercedes Cánovas</div>
                            </div>
                            </div>&nbsp;
                        </div>
                    <div class="columnFour">
                            <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                            <img width="100" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/david-leon.jpg">
                            <div class="overlay">
                                <div class="text">David León</div>
                            </div>
                            </div>&nbsp;
                        </div>
            </div>
            



            <div class="row">
                
                    <div class="columnThree">
    
                        <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                        <img width="100" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/juan-carlos-miranda.jpg">
                        <div class="overlay">
                            <div class="text">Juan Carlos Miranda</div>
                        </div>
                        </div>&nbsp;
                        
                    </div>
                    <div class="columnThree">
                        <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                        <img width="100" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/javier-alonso.jpg">
                        <div class="overlay">
                            <div class="text">Ana Santana</div>
                        </div>
                        </div>&nbsp;
                    </div>
                    <div class="columnThree">
                            <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                            <img width="100" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/sandra-madrigal.jpg">
                            <div class="overlay">
                                <div class="text">Sandra Madrigal</div>
                            </div>
                            </div>&nbsp;
                        </div>
                    
            </div>




            
     



        

        




        
    </body>
    </html>
@endsection

<!--
https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/miguel-angel-carrasco.jpg
https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/ana-santana.jpg
https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/mercedes-canovas.jpg
https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/david-leon.jpg
-->
