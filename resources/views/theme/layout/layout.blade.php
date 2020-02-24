<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<link rel="icon" href="images/favicon.png">
	<title>Shop Mẹ Ỉn - Thời trang trẻ em cao cấp</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/framework7.bundle.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/swiper.min.css') !!}">

	<link rel="stylesheet" href="{!! asset('css/style.css') !!}">
</head>
<body>

	<div id="app" class="framework7-root">
		<!-- Navigation -->
		<div class="view view-main view-init ios-edges">
{{--			<div class="page page-home page-with-subnavbar">--}}
{{--				@include('theme.layout.tabbar')--}}

{{--				<div class="tabs">--}}
{{--					<div id="tab-home" class="tab tab-home tab-active">--}}
{{--						<!-- home -->--}}

{{--						<!-- navbar home -->--}}
{{--					@include('theme.layout.header')--}}
{{--					<!-- end navbar home -->--}}

{{--						<!-- sidebarbar or panel -->--}}
{{--						<div class="panel-backdrop"></div>--}}

{{--						<!-- end sidebarbar or panel -->--}}
{{--					@include('theme.layout.sidebar')--}}
{{--				<!-- content -->--}}
{{--				@yield('content')--}}
{{--				<!-- end content -->--}}
{{--					</div>--}}

{{--				</div>--}}
{{--			</div>--}}
			@yield('content')
		</div>
	</div>

</div>

{{--	<script src="{!! asset('js/framework7.bundle.min.js') !!}"></script>--}}
{{--	<script src="{!! asset('js/routes.js') !!}"></script>--}}
{{--	<script src="{!! asset('js/swiper.min.js') !!}"></script>--}}
{{--	<script src="{!! asset('js/app.js') !!}"></script>--}}

	<script src="{!! asset('js/jquery-3.4.1.min.js') !!}"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
	<script src="{!! asset('js/main.js') !!}"></script>

</body>
</html>