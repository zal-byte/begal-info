@extends('../auth')


@section('authlay')

	<div class="card shadow-sm border-0 flex-1">
		<div class="card-body">
			<h3 class="text-center">
				Daftar
			</h3>
			<hr>
			<form method="POST" action="{{route('signup_post')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<input type="text" name="full_name" class="form-control mb-2" required placeholder="Nama lengkap">
					<input type="text" name="username" class="form-control mb-2" required placeholder="Nama pengguna">	
					<input type="password" name="password" class="form-control mb-2" required placeholder="Kata sandi">
					<input type="password" name="verify_password" class="form-control mb-2" required placeholder="Ulangi kata sandi">

					@if( $errors->any())

					<div class="mt-1 mb-1">
						<p class="text-center text-white rounded p-2 bg-danger">
							{{ $errors->first() }}
						</p>
					</div>

					@endif

					@if(session()->has('success'))
					<div class="mt-1 mb-1">
						<p class="text-center text-white rounded p-2 bg-success">
							{{ session()->get('success') }}
						</p>
					</div>
					@endif

					<button type="submit" class="btn btn-solid btn-dark mt-1 text-white" style="width:100%;">
						Daftar <span class="fa fa-add"></span>
					</button>
					<p class="text-center mt-2">
						Sudah punya akun ?, <a href="{{route('login_form')}}" class="text-decoration-none text-white rounded p-1 bg-dark"> Masuk</a>.
					</p>
				</div>
			</form>
		</div>
	</div>

@endsection