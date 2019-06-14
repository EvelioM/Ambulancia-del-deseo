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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        
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


        <!-- 
        <h1>Index</h1>
        {!! __('index.hello')!!}
        @lang('index.hola')
        -->
    </body>

</html>

















@endsection