<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    Join
                </div>

                <div>

                    <form action="{{ route('join') }}" method="POST" enctype="form-cadastro">
                        <csrf-token>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nickname" placeholder="Nickname">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="confirm" placeholder="Confirm">
                        </div>
                        <div class="button">
                            <button type="submite">Join !</button>
                        </div>
                    </form>

                </div>
        </div>
    </body>
</html>
