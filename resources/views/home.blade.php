<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.min.css')}}">
	<title>Home</title>
	<style type="text/css">

	</style>
</head>
<body>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

	<div class="row">
		<div class="col-sm">
			<div class="container">
				@yield('body')
			</div>	
		</div>
	</div>



<script type="text/javascript" src="{{asset('fontawesome/js/all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>