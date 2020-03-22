<!DOCTYPE html>
<html lang="en" class="ios device-pixel-ratio-1 device-desktop device-windows">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<link rel="icon" href="{{ url('images/favicon.png') }}">
	<title>@yield('title')</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/vue-select.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/framework7.bundle.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!}">
{{--	<link rel="stylesheet" href="{!! asset('css/swiper.min.css') !!}">--}}

	<link rel="stylesheet" href="{!! asset('css/style.css') !!}">
{{--	<link--}}
{{--			rel="stylesheet"--}}
{{--			type="text/css"--}}
{{--			href="https://unpkg.com/select2@4.0.3/dist/css/select2.min.css"--}}
{{--	/>--}}

</head>
<body>

	<div class="framework7-root">
		<div class="panel-backdrop"></div>
	    @include('theme.layout.sidebar')
        @yield('content')
	</div>

</div>
    <script src="/js/app.js"></script>
{{--    <script src="{!! asset('js/jquery-3.4.1.min.js') !!}"></script>--}}
    <script src="{!! asset('js/swiper.min.js') !!}"></script>
{{--    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>--}}
{{--	<script src="https://unpkg.com/select2@4.0.3/dist/js/select2.js"></script>--}}
	<script src="{!! asset('js/main.js') !!}"></script>
	@yield('script')
</body>
</html>
