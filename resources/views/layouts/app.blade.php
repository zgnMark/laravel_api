<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"> <!-- 获取 config/app.php中的语言配置 -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" conten="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'LaraBBS') - {{ setting('site_name', 'Laravel 进阶教程') }}</title>
    <meta name="description" content="@yield('description', setting('seo_description', 'LaraBBS 爱好者社区。'))" />
    <meta name="keyword" content="@yield('keyword', setting('seo_keyword', 'LaraBBS,社区,论坛,开发者论坛'))" />

    <!-- Styles -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	@yield('styles')
</head>
<body>
	<div id="app" class="{{ route_class() }}-page"> <!-- 此处为自定义的辅助方法 在bootstrap/helpers.php -->

		@include('layouts._header')
		<div class="container">
			
			@include('layouts._message')
			@yield('content')

		</div>

		@include('layouts._footer')

	</div>

    @if (app()->isLocal())
        @include('sudosu::user-selector')
    @endif

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

</body>
</html>