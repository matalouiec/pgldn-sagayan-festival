<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sagayan Festival 2019</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-image: url("/storage/img/green.jpg"); */
                /* background-color: #dcf1d6; */
                background-position: center center;  
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 90px;
                color:white;
                font-weight:bold;
                font-family: serif;
                font-style:bold;
            }
            .subtitle {
                font-size: 40px;
                color:#ffe700;
                font-weight:bold;
                font-family: serif;
                font-style:italic;
                text-align:left;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="subtitle">
                    60th Araw ng Lanao del Norte
                </div>
                <div class="title m-b-md">
                Sagayan Festival 2019<br />
                </div>
                @if (Route::has('login'))
                    <div class="start">
                        @auth
                            <a class="btn btn-info btn-lg" role="button" href="{{ url('/dashboard') }}">SCORE CARD</a>   
                        @else
                            <a class="btn btn-info btn-lg" role="button" href="{{ route('login') }}">LOG IN</a>
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
