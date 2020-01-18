<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	{{-- Bootstrap --}}
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="container">
		{{-- navbar --}}
		<!-- Image and text -->
		<nav class="navbar navbar-light bg-light">
			<a class="navbar-brand" href="#">
				<img src="/docs/4.4/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
				Data Siswa
			</a>
		</nav>
		{{-- end navbar --}}
		{{-- content --}}
		<div>
			@yield('konten')
		</div>
		{{-- end content --}}
	</div>

	{{-- jquery --}}
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>