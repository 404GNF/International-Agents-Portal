<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HZ Agency Webshop</title>

    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css"
    />

    <link rel="stylesheet" href="{{ asset('css/resources.css') }}" />

</head>

<body>
@include('common.header')

@yield('content')

<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
</body>
</html>