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
                <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px;font-size: 500%">{!! __('patrocinadores.apoyo')!!}</h1>
        </div>                   
    </div>
    <br><br>
        <div class="row" >
            <div class="columnSingle">
                    <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">{!! __('patrocinadores.patro')!!}</h1>
                <div class="col-md-12">
                        <p style="text-align: center;margin-bottom: 8px">{!! __('patrocinadores.tienes')!!}</p>
                </div>
            </div>                   
        </div>

        <br><br>
        <div class="row">
                
            <div class="columnFour">

                <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                    <a href="https://www.vialta.es/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="486" height="354" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Vialta-ambulancia-del-deseo.png" class="vc_single_image-img attachment-full" alt="logo Vialta" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Vialta-ambulancia-del-deseo.png 486w, https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Vialta-ambulancia-del-deseo-300x219.png 300w" sizes="(max-width: 486px) 100vw, 486px">                   
                         <div class="overlay">
                    <div class="text">UCAM</div>
                </div></a>
                </div>&nbsp;
                
            </div>
            <div class="columnFour">
                <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                    <a href="https://www.mesadelcastillo.com/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="486" height="354" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Hospital-Mesa-del-Castillo-ambulancia-del-deseo.png" class="vc_single_image-img attachment-full" alt="logo Hospital Mesa del Castillo" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Hospital-Mesa-del-Castillo-ambulancia-del-deseo.png 486w, https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Hospital-Mesa-del-Castillo-ambulancia-del-deseo-300x219.png 300w" sizes="(max-width: 486px) 100vw, 486px">                    
                        <div class="overlay">
                    <div class="text">SUECOS</div>
                </div></a>
                </div>&nbsp;
            </div>
            <div class="columnFour">
                    <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                        <a href="https://smartcommunication.es" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="486" height="354" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/logo-patrocinadores-Smart-Communication-ambulancia-del-deseo.jpg" class="vc_single_image-img attachment-full" alt="logo Smart Communication" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/logo-patrocinadores-Smart-Communication-ambulancia-del-deseo.jpg 486w, https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/logo-patrocinadores-Smart-Communication-ambulancia-del-deseo-300x219.jpg 300w" sizes="(max-width: 486px) 100vw, 486px">                       
                             <div class="overlay">
                        <div class="text">HEFAME</div>
                    </div></a>
                    </div>&nbsp;
                </div>
            <div class="columnFour">
                    <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                        <a href="https://www.ucam.edu/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="486" height="354" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/logo-colaboradores-UCAM-ambulancia-del-deseo-1.jpg" class="vc_single_image-img attachment-full" alt="logo UCAM" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/logo-colaboradores-UCAM-ambulancia-del-deseo-1.jpg 486w, https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/logo-colaboradores-UCAM-ambulancia-del-deseo-1-300x219.jpg 300w" sizes="(max-width: 486px) 100vw, 486px">                        
                            <div class="overlay">
                        <div class="text">BELÉN GUGU</div>
                    </div></a>
                    </div>&nbsp;
                </div>
    </div>


    <div class="row">
                
        <div class="columnFour">

            <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                <a href="https://www.cajamar.es" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="486" height="354" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Cajamar-ambulancia-del-deseo.png" class="vc_single_image-img attachment-full" alt="logo Cajamar" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Cajamar-ambulancia-del-deseo.png 486w, https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Cajamar-ambulancia-del-deseo-300x219.png 300w" sizes="(max-width: 486px) 100vw, 486px">                
                    <div class="overlay" >
                <div class="text">UCAM</div> 
            </div></a>
            </div>&nbsp;
            
        </div>
        <div class="columnFour">
            <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                <a href="https://extrupol.com/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="486" height="354" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Extrusion-ambulancia-del-deseo.png" class="vc_single_image-img attachment-full" alt="logo Extrusion" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Extrusion-ambulancia-del-deseo.png 486w, https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Extrusion-ambulancia-del-deseo-300x219.png 300w" sizes="(max-width: 486px) 100vw, 486px">               
                     <div class="overlay">
                <div class="text">Suecos</div>
            </div></a>
            </div>&nbsp;
        </div>
        <div class="columnFour">
                <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                    <a href="http://disfrimur.com" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="486" height="354" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Disfrimur-ambulancia-del-deseo.png" class="vc_single_image-img attachment-full" alt="logo Disfrimur" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Disfrimur-ambulancia-del-deseo.png 486w, https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Disfrimur-ambulancia-del-deseo-300x219.png 300w" sizes="(max-width: 486px) 100vw, 486px">                    
                        <div class="overlay">
                    <div class="text">Hefame</div>
                </div></a>
                </div>&nbsp;
            </div>
        <div class="columnFour">
            <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                <a href="http://www.hospitaldemolina.es/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="486" height="354" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Hospital-de-Molina-ambulancia-del-deseo.png" class="vc_single_image-img attachment-full" alt="logo Hospital Molina de Segura" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Hospital-de-Molina-ambulancia-del-deseo.png 486w, https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Hospital-de-Molina-ambulancia-del-deseo-300x219.png 300w" sizes="(max-width: 486px) 100vw, 486px">                
                    <div class="overlay">
                <div class="text">Hefame</div>
            </div></a>
            </div>&nbsp;
        </div>

</div>
        








        <br><br>
        <div class="row" >
            <div class="columnSingle">
                    <h1 class="mkd-section-title mkd-section-title-small" style="text-align: center;margin-bottom: 8px">{!! __('patrocinadores.colaboradores')!!}</h1>
                <div class="col-md-12">
                        <p style="text-align: center;margin-bottom: 8px">{!! __('patrocinadores.nos')!!}</p>
                </div>
            </div>                   
        </div>
        <br><br>

        <div class="row">
                
            <div class="columnFour">

                <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                    <a href="https://www.ucam.edu" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="486" height="354" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/logo-colaboradores-UCAM-ambulancia-del-deseo.jpg" class="vc_single_image-img attachment-full" alt="logo UCAM Responsabilidad Social Corporativa" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/logo-colaboradores-UCAM-ambulancia-del-deseo.jpg 486w, https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/logo-colaboradores-UCAM-ambulancia-del-deseo-300x219.jpg 300w" sizes="(max-width: 486px) 100vw, 486px">
                    <div class="overlay">
                    <div class="text">UCAM</div>
                </div></a>
                </div>&nbsp;
                
            </div>
            <div class="columnFour">
                <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                    <a href="https://www.suecos.es" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="486" height="354" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/logo-patrocinadores-Suecos-ambulancia-del-deseo.jpg" class="vc_single_image-img attachment-full" alt="logo Suecos" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/logo-patrocinadores-Suecos-ambulancia-del-deseo.jpg 486w, https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/logo-patrocinadores-Suecos-ambulancia-del-deseo-300x219.jpg 300w" sizes="(max-width: 486px) 100vw, 486px">
                    <div class="overlay">
                    <div class="text">SUECOS</div>
                </div></a>
                </div>&nbsp;
            </div>
            <div class="columnFour">
                    <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                        <a href="https://www.hefame.es/web/hefame/fundacion" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="486" height="354" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/logo-colaboradores-fundacion-Hefame-ambulancia-del-deseo.jpg" class="vc_single_image-img attachment-full" alt="logo Fundación Hefame" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/logo-colaboradores-fundacion-Hefame-ambulancia-del-deseo.jpg 486w, https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/logo-colaboradores-fundacion-Hefame-ambulancia-del-deseo-300x219.jpg 300w" sizes="(max-width: 486px) 100vw, 486px">
                        <div class="overlay">
                        <div class="text">HEFAME</div>
                    </div></a>
                    </div>&nbsp;
                </div>
            <div class="columnFour">
                    <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                        <a href="https://ambulanciadeldeseo.es" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="486" height="354" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/logo-colaboradores-Belen-Gugu-ambulancia-del-deseo.jpg" class="vc_single_image-img attachment-full" alt="logo Belén Gugu" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/logo-colaboradores-Belen-Gugu-ambulancia-del-deseo.jpg 486w, https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/logo-colaboradores-Belen-Gugu-ambulancia-del-deseo-300x219.jpg 300w" sizes="(max-width: 486px) 100vw, 486px">
                        <div class="overlay">
                        <div class="text">BELÉN GUGU</div>
                    </div></a>
                    </div>&nbsp;
                </div>
    </div>


    <div class="row">
                
        <div class="columnFour">

            <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                <a href="https://www.mmb.es/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="486" height="354" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/logo-colaboradores-MMB-ambulancia-del-deseo.jpg" class="vc_single_image-img attachment-full" alt="logo MMB Abogados" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/logo-colaboradores-MMB-ambulancia-del-deseo.jpg 486w, https://ambulanciadeldeseo.es/wp-content/uploads/2018/11/logo-colaboradores-MMB-ambulancia-del-deseo-300x219.jpg 300w" sizes="(max-width: 486px) 100vw, 486px">               
                <div class="overlay" >
                <div class="text">UCAM</div> 
            </div></a>
            </div>&nbsp;
            
        </div>
        <div class="columnFour">
            <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                <a href="https://www.ucam.edu/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="486" height="354" src="https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Catedra-ambulancia-del-deseo.png" class="vc_single_image-img attachment-full" alt="logo Cátedra" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Catedra-ambulancia-del-deseo.png 486w, https://ambulanciadeldeseo.es/wp-content/uploads/2019/02/logo-Catedra-ambulancia-del-deseo-300x219.png 300w" sizes="(max-width: 486px) 100vw, 486px">               
                <div class="overlay">
                <div class="text">Suecos</div>
            </div></a>
            </div>&nbsp;
        </div>
        <div class="columnFour">
                <div class="img-box" style="display: block;margin-left: auto;margin-right: auto;">
                    <a href="https://www.fundacioncajamurcia.es/" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="486" height="354" src="https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/logo-colaboradores-Fundacion-CajaMurcia-ambulancia-del-deseo.jpg" class="vc_single_image-img attachment-full" alt="logo Fundación CajaMurcia" srcset="https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/logo-colaboradores-Fundacion-CajaMurcia-ambulancia-del-deseo.jpg 486w, https://ambulanciadeldeseo.es/wp-content/uploads/2018/10/logo-colaboradores-Fundacion-CajaMurcia-ambulancia-del-deseo-300x219.jpg 300w" sizes="(max-width: 486px) 100vw, 486px">                    
                    <div class="overlay">
                    <div class="text">Hefame</div>
                </div></a>
                </div>&nbsp;
            </div>

</div>










    </body>
</html>








@endsection