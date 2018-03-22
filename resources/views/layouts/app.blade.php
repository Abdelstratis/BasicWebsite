<!doctype html>

<html lang="en">

<head>

    <link rel="stylesheet" href="css/app.css">

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <title>Website</title>


</head>

<body>
    @include('inc.navbar')



    <div class="container">

        {{--@if(Request::is('/'))--}}
            {{--@include('inc.showcase')--}}
        {{--@endif--}}

        <div >
            @if(Request::is('/'))
                @include('inc.carousel')
            @endif
        </div>

        <div class="row">

            <div class="col-md-8 col-lg-8">

                @include('inc.messages')

                @yield('content')

            </div>



            <div class="col-md-4 col-lg-4">

                @include('inc.sidebar')

            </div>

        </div>

    </div>

    <footer id="footer" class="text-center text-muted">
        <p> Copyright 2018 &copy; Abdel - Stratis | <a href="http://localhost/BasicWebsite/public/mention"/> Mentions Légales</a> </p>
    </footer>


    {{--<!-- jQuery library -->--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}

    {{--<!-- Latest compiled JavaScript -->--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}

    {{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
    {{--<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>--}}
    {{--<script src="../../../../assets/js/vendor/popper.min.js"></script>--}}
    {{--<script src="../../../../dist/js/bootstrap.min.js"></script>--}}


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

</body>

</html>