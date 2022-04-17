<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Informasi begal">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.min.css')}}">
	<title> Masuk </title>
	<style type="text/css">
		html{
			height: 100%;
		}
		body{
			background-image: url("{{asset('img/bg_0.svg')}}");
			background-repeat: no-repeat;
			background-size: cover;
			background-color: #011220;
		}

		.right_bottom_corner{
			right: 0px;
			bottom: 0px;
			position: fixed;
			padding: 40px;

			text-shadow: 1px 1px 1px black;
			color: white;
		}

		#desc{
			text-shadow: 1px 1px 1px black;
			color: white;
		}
		@media only screen and (max-width: 768px){
			#desc{
				margin-top: 10px;
			}
			#begal{
				width: 100%;
			}
		}
		
	</style>
</head>
<body>

	<div class="right_bottom_corner">
		#BasmiBegal
	</div>

	<div class="container pt-4">
		<div class="row justify-content-md-center">
			<div class="col col-lg-4">
				@yield('authlay')
			</div>
			<div class="col-md" id="desc" style="font-size: 13pt;">
				<p>Dapatkan dan bagikan informasi tentang begal di daerahmu !<br>Bantu orang lain untuk mendapatkan situasi di daerahmu.</p>
			</div>
			<div class="col-sm-3">
				<img src="{{asset('img/thief.png')}}" id="begal">	
			</div>
		</div>
	</div>


<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('fontawesome/js/all.min.js')}}"></script>
</body>
</html>