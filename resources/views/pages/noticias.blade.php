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
                        <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px;font-size: 500%">{!! __('noticias.noticias')!!}</h1>
                </div>                   
            </div>

        
            <br><br>
        <div class="row">
                <div class="columnFour">
                        <a href="https://ambulanciadeldeseo.es/el-deseo-de-jesus-%c2%b7-barcelona/" title="El deseo de Jesús · Barcelona">
                        <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                                
                                    <img width="650" height="650" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulancia-del-dese-Jesus-barcelona-650x650.jpg" class="attachment-hue_mikado_square size-hue_mikado_square wp-post-image" alt="" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulancia-del-dese-Jesus-barcelona-650x650.jpg 650w, https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulancia-del-dese-Jesus-barcelona-150x150.jpg 150w" sizes="(max-width: 650px) 100vw, 650px">		                              
                                    <div class="overlay">
                            <div class="text" >{!! __('noticias.1')!!}</div>
                            
                            
                        </div>
                        </div></a>&nbsp;
                    </div>
                <div class="columnFour">
    
                        <a href="https://ambulanciadeldeseo.es/marcha-bullas-amor-de-dios/" title="Marcha Solidaria colegio Amor de Dios de Bullas">
                    <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                                <img width="650" height="650" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulancia-del-deseo-marcha-solidaria-bullas2-650x650.jpg" class="attachment-hue_mikado_square size-hue_mikado_square wp-post-image" alt="" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulancia-del-deseo-marcha-solidaria-bullas2-650x650.jpg 650w, https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulancia-del-deseo-marcha-solidaria-bullas2-150x150.jpg 150w" sizes="(max-width: 650px) 100vw, 650px">		                            
                                <div class="overlay">
                        <div class="text">{!! __('noticias.2')!!}</div>
                    </div>
                    </div></a>&nbsp;
                    
                </div>
                <div class="columnFour">
                        <a href="https://ambulanciadeldeseo.es/rifa-solidaria/" title="Rifa Solidaria IES Mariano Baquero">
                        <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                                <img width="650" height="650" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulancia-del-deseo-rifasolidaria-650x650.jpg" class="attachment-hue_mikado_square size-hue_mikado_square wp-post-image" alt="" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulancia-del-deseo-rifasolidaria-650x650.jpg 650w, https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulancia-del-deseo-rifasolidaria-150x150.jpg 150w" sizes="(max-width: 650px) 100vw, 650px">		                           
                                <div class="overlay">
                        <div class="text">{!! __('noticias.3')!!}</div>
                    </div>
                    </div></a>&nbsp;
                </div>
                
                <div class="columnFour">
                        <a href="https://ambulanciadeldeseo.es/primer-premio-albert-jovell/" title="1er Premio · V Edición Albert Jovell">
                        <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                                <img width="650" height="492" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulancia-del-deseo-premios-albert-jovell-650x492.jpg" class="attachment-hue_mikado_square size-hue_mikado_square wp-post-image" alt="">		                               
                                <div class="overlay">
                            <div class="text">{!! __('noticias.4')!!}</div>
                        </div>
                        </div></a>&nbsp;
                    </div>
        </div>

        <div class="row">
                <div class="columnFour">
                        <a href="https://ambulanciadeldeseo.es/ambulancia-homologada/" title="¡2ª Ambulancia Homologada!">
                            <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                                
                                    <img width="650" height="650" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulanciadeldeseo-homologacion-650x650.jpg" class="attachment-hue_mikado_square size-hue_mikado_square wp-post-image" alt="" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulanciadeldeseo-homologacion-650x650.jpg 650w, https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulanciadeldeseo-homologacion-150x150.jpg 150w" sizes="(max-width: 650px) 100vw, 650px">
                                    <div class="overlay">
                            <div class="text" >{!! __('noticias.5')!!}</div>
                            
                            
                        </div>
                        </div></a>&nbsp;
                    </div>
                <div class="columnFour">
    
                        <a href="https://ambulanciadeldeseo.es/merchandising/" title="Merchandising">
                                <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                                        <img width="650" height="650" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/Ambulancia-del-deseo-Merchandising-650x650.jpg" class="attachment-hue_mikado_square size-hue_mikado_square wp-post-image" alt="" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/Ambulancia-del-deseo-Merchandising-650x650.jpg 650w, https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/Ambulancia-del-deseo-Merchandising-150x150.jpg 150w" sizes="(max-width: 650px) 100vw, 650px">
                                        <div class="overlay">
                        <div class="text">{!! __('noticias.6')!!}</div>
                    </div>
                    </div></a>&nbsp;
                    
                </div>
                <div class="columnFour">
                        <a href="https://ambulanciadeldeseo.es/premio-satse-modalidad-personal/" title="Premio SATSE · Modalidad Personal">
                        <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                                <img width="650" height="650" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulanciadeldeseo-SATSE-650x650.jpg" class="attachment-hue_mikado_square size-hue_mikado_square wp-post-image" alt="" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulanciadeldeseo-SATSE-650x650.jpg 650w, https://ambulanciadeldeseo.es/wp-content/uploads/2019/06/ambulanciadeldeseo-SATSE-150x150.jpg 150w" sizes="(max-width: 650px) 100vw, 650px">				                           
                                <div class="overlay">
                        <div class="text">{!! __('noticias.7')!!}</div>
                    </div>
                    </div></a>&nbsp;
                </div>
                
                <div class="columnFour">
                        <a href="https://ambulanciadeldeseo.es/foro-hurge-malaga/" title="II Congreso Internacional HURGE · Málaga">
                        <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                                <img width="650" height="650" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/05/hurge_malaga-650x650.jpg" class="attachment-hue_mikado_square size-hue_mikado_square wp-post-image" alt="" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2019/05/hurge_malaga-650x650.jpg 650w, https://ambulanciadeldeseo.es/wp-content/uploads/2019/05/hurge_malaga-150x150.jpg 150w" sizes="(max-width: 650px) 100vw, 650px">		                               
                                <div class="overlay">
                            <div class="text">{!! __('noticias.8')!!}</div>
                        </div>
                        </div></a>&nbsp;
                    </div>
        </div>


        <div class="row">
                <div class="columnFour">
                        <a href="https://ambulanciadeldeseo.es/hospital-molina-actividades/" title="Hospital de Molina, 17º Aniversario.">
                        <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                                
                                <img width="650" height="650" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/05/ambulanciadeldeseo-hospital-molina-stand-650x650.jpg" class="attachment-hue_mikado_square size-hue_mikado_square wp-post-image" alt="" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2019/05/ambulanciadeldeseo-hospital-molina-stand-650x650.jpg 650w, https://ambulanciadeldeseo.es/wp-content/uploads/2019/05/ambulanciadeldeseo-hospital-molina-stand-150x150.jpg 150w" sizes="(max-width: 650px) 100vw, 650px">		                              
                                    <div class="overlay">
                            <div class="text" >{!! __('noticias.9')!!}</div>
                            
                            
                        </div>
                        </div></a>&nbsp;
                    </div>
                <div class="columnFour">
    
                        <a href="https://ambulanciadeldeseo.es/un-deseo-especial-marcha-solidaria/" title="Marcha Solidaria colegio Amor de Dios de Bullas">
                    <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                            <img width="650" height="650" src="https://ambulanciadeldeseo.es/wp-content\uploads\2019\04\mosaico_Marcha-650x650.jpg" class="attachment-hue_mikado_square size-hue_mikado_square wp-post-image" alt="" srcset="https://ambulanciadeldeseo.es/\wp-content\uploads\2019\04\mosaico_Marcha-650x650.jpg 650w, https://ambulanciadeldeseo.es/\wp-content\uploads\2019\04\mosaico_Marcha-150x150.jpg 150w, https://ambulanciadeldeseo.es/\wp-content\uploads\2019\04\mosaico_Marcha-1125x1125.jpg 1125w" sizes="(max-width: 650px) 100vw, 650px">		                            
                                <div class="overlay">
                        <div class="text">{!! __('noticias.10')!!}</div>
                    </div>
                    </div></a>&nbsp;
                    
                </div>
                <div class="columnFour">
                        <a href="https://ambulanciadeldeseo.es/ambulancia-del-deseo-premio-solidaridad/" title="Premio a la Solidaridad · IES Mariano Baquero">
                        <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                                <img width="650" height="650" src="https://ambulanciadeldeseo.es/wp-content\uploads\2019\04\ambulancia-del-deseo-premio-solidaridad-650x650.jpg" class="attachment-hue_mikado_square size-hue_mikado_square wp-post-image" alt="" srcset="https://ambulanciadeldeseo.es/wp-content\uploads\2019\04\ambulancia-del-deseo-premio-solidaridad-650x650.jpg 650w, https://ambulanciadeldeseo.es/wp-content\uploads\2019\04\ambulancia-del-deseo-premio-solidaridad-150x150.jpg 150w" sizes="(max-width: 650px) 100vw, 650px">		                           
                                <div class="overlay">
                        <div class="text">{!! __('noticias.11')!!}</div>
                    </div>
                    </div></a>&nbsp;
                </div>
                
                <div class="columnFour">
                        <a href="https://ambulanciadeldeseo.es/concierto-benefico/" title="Donación Concierto benéfico en Peñíscola">
                        <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                                <img width="650" height="650" src="https://ambulanciadeldeseo.es/wp-content\uploads\2019\04\ambulancia-del-deseo-concierto-benefico-650x650.jpg" class="attachment-hue_mikado_square size-hue_mikado_square wp-post-image" alt="" srcset="https://ambulanciadeldeseo.es/wp-content\uploads\2019\04\ambulancia-del-deseo-concierto-benefico-650x650.jpg 650w, https://ambulanciadeldeseo.es/wp-content\uploads\2019\04\ambulancia-del-deseo-concierto-benefico-150x150.jpg 150w" sizes="(max-width: 650px) 100vw, 650px">		                               
                                <div class="overlay">
                            <div class="text">{!! __('noticias.12')!!}</div>
                        </div>
                        </div></a>&nbsp;
                    </div>
        </div>










        









  </body>
  </html>
@endsection