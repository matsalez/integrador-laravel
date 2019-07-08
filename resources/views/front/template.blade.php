<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title> @yield('pageTitle') </title>
    @include('front.link')
	</head>
	<body>
		@include('front.navbar')

    @yield('mainContent')

		@include('front.footer')
	</body>
</html>
