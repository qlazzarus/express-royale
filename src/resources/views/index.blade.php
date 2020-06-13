<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title></title>
<meta charset='UTF-8' />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
<link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
</head>
<body class="bg-black text-xl lg:text-3xl text-white font-sans antialiased">
<div id='app'></div>
<script src="{{ mix('js/index.js') }}"></script>
</body>
</html>