<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Arts') }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
                font-size: 84px;
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
              <div id="" class="carousel slide pt-3" data-ride="carousel" >
                <div class="carousel-inner">
                    <div class="carousel-item active "> 
                      <img id ="image" class="d-block w-100" src="/images/8a0eb84545901eb1d608fe1c833d6cb41e2f3a466cb24f412873906089e526439eca03c8a293eceb434a57fb6bf1ad7160da5a1104e076d6a89826_1280.jpg" alt="First slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Welcome Art Gallery Website</h5>
                        <p>Shop With Us</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                      <img id ="image" class="d-block w-100" src="/images\4576a233e39f30e9d96c1693badd5ba94accd0e37f75195662d3a87fb49ea030a24c069a217a31505421b09d9a2226150197502b5f143e4b0c6b03_1280.jpg" alt="Second slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Welcome Art Gallery Website</h5>
                        <p>No Better Place For Arts Than Us</p>
                    </div>
                    </div>
                 </div> 
              </div> 
        </div>
    </body>
</html>


             @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif




            