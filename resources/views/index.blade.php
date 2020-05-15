<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title></title>
<meta charset='UTF-8' />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
<link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
</head>
<body>
<div id='app'></div>
<script src="{{ asset('js/index.js') }}"></script>
<script src="{{ asset('js/manifest.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script>
</body>
</html>