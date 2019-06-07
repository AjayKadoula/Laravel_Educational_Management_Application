<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=1024">
        <title>School:-Management system</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            body {
            	font-family: Montserrat;
            	color: white;
            	background: url(http://backgroundcheckall.com/wp-content/uploads/2017/12/school-background-images-hd-8.jpg);
            	background-size: cover;
            	background-position: center;
            }
            .rnav{
              boder:1px soloid green;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" style="color:white; font-size:20px;">Login</a>
                        <a href="{{ asset('studentregistrationStatus')}}" style="color:white; font-size:20px;">Register</a><hr>

                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    School System
                </div>

                <div class="links">
                <h1> <i>" Education is the most powerful weapon <br>which you can use to change the world"</i></h1>
                </div>
            </div>
        </div>
    </body>
</html>
