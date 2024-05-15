<!DOCTYPE html>
<html>
    <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    @include('../filter.navbar')
@yield('content')


<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>

</body>
</html>