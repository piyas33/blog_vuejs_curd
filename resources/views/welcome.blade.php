<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel Vue JS CRUD Example</title>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
</head>
<body>

    <div id="app">
        <app></app>
    </div>

    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

</body>
</html>