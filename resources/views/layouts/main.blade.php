<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <title>@yield('title')</title>

    <!-- Fonts -->

    <!-- Styles -->
    <style>
        html {
            background: #F8F8F8;
            font-family: 'Roboto', sans-serif;
            -webkit-font-smoothing: antialiased;
            padding: 20px 0;
        }
        .mydiv {

            color: black;
            height: 200px;

            border: 5px lightblue;
            background-color: white;
            text-align: center;
            position: relative;
            border-radius: 10px;
            box-shadow: 0 6px 6px rgba(0,0,0,0.1);

            top: 0;
            transition: all .09s ease-in;
        }
        .mydiv:hover {
            top: -6px;
            box-shadow: 0 4px 5px rgba(0,0,0,0.2);
        }

        .title {
            text-align: center;
        }
        .wrapper {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
            grid-auto-rows: minmax(100px, auto);
        }
        .one {
            grid-column: 1 / 3;
            grid-row: 1;
        }
        .two {
            grid-column: 2 / 4;
            grid-row: 1 / 3;
        }
        .three {
            grid-column: 1;
            grid-row: 2 / 5;
        }
        .four {
            grid-column: 3;
            grid-row: 3;
        }
        .five {
            grid-column: 2;
            grid-row: 4;
        }
        .six {
            grid-column: 3;
            grid-row: 4;
        }
        .available {
            padding: 10px;
            text-align: center;
            background: #1abc9c;
            color: white;
            font-size: 13px;
            border-radius: 10px 10px 0px 0px;
        }
        .raisingsoon {
            padding: 10px;
            text-align: center;
            background: #FF0000;
            color: white;
            font-size: 13px;
            border-radius: 10px 10px 0px 0px;
        }
        .fullyraised {
            padding: 10px;
            text-align: center;
            background: #FF0000;
            color: white;
            font-size: 13px;
            border-radius: 10px 10px 0px 0px;
        }
        .wip {
            padding: 10px;
            text-align: center;
            background: #FF8C00;
            color: white;
            font-size: 13px;
            border-radius: 10px 10px 0px 0px;
        }
    </style>


</head>
<body>
    @yield('content')
</body>
</html>
