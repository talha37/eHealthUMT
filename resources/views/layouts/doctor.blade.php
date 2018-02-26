<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>eHealthUMT </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
                <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="css/AdminLTE.min.css">
        <!-- Custom style -->
        <link rel="stylesheet" href="css/style.css">
        <style>
            html, body {
                background: linear-gradient(
                    rgba(0, 0, 0, 0.7),
                    rgba(0, 0, 0, 0.7)
                ),
                url('img/landing-bg.jpg') no-repeat center center fixed;
                background-color: #fff;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                color: #fff;
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

            .btn-o {
                transition: 0.5s;
                background-color: transparent;
                border-radius: 50px;
                border-color: #fff;
                padding: 8px 48px;
                font-size: 22px;
            }

            .btn-o:hover {
                transition: 0.5s;
                background-color: #fff;
                color: #232323;
                border-color: #fff;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    eHealthUMT
                </div>
                <div class="row">
                    <div class="col-md-12">
                    @if(Auth::check())
                        <a href="{{ url('/view-profile') }}"><button class="btn btn-primary btn-o">Go to Dashboard</button></a>
                        <a href="{{ route('loggedout') }}"><button class="btn btn-primary btn-o">Log Out</button></a>
                    @else
                        <a href="{{ url('/login') }}"><button class="btn btn-primary btn-o">Login</button></a>
                        <a href="{{ url('/register') }}"><button class="btn btn-primary btn-o">Make Profile</button></a>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
