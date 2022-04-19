@extends('../auth')


@section('authlay')

	<div class="card shadow-sm border-0 flex-1">
		<div class="card-body">
			<h3 class="text-center">
				Masuk
			</h3>
			<hr>
			<form method="POST" action="{{route('login_post')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<input type="text" name="username" class="form-control mb-2" required placeholder="Nama pengguna">	
					<input type="password" name="password" class="form-control mb-2" required placeholder="Kata sandi">

					@if($errors->any())
						<div class="mt-1 mb-1">
							<p class="text-center text-white rounded p-2 bg-danger">
								{{ $errors->first() }}
							</p>
						</div>
					@endif

					<button type="submit" class="btn btn-solid btn-dark mt-1 text-white" style="width:100%;">
						Masuk <span class="fa fa-sign-in"></span>
					</button>
					<p class="text-center mt-2">
						Belum punya akun ?, <a href="{{route('signup_form')}}" class="text-decoration-none bg-dark p-1 rounded text-white"> Daftar</a>.
					</p>
				</div>
			</form>
		</div>
	</div>

@endsection