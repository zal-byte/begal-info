@extends('../home')

@section('body')
	<style>
		body{
			overflow-x: hidden;
		}
		@media only screen and (max-width: 768px){
			#d-1{
				margin-bottom: 5px;
			}
			#show{
				display: block;
			}
			#logout{
				margin-top: 10px;
			}
			#img-col{
				display: flex;
				justify-content: center;
			}
			
		}
		@media only screen and (min-width: 1366px){
			#d-1{
				position: sticky;
				top: 0;
			}
			#s-0{
				margin-top: 30px;
			}

		}
	</style>
	<div class="row justify-content-center">
		<div class="col-sm mt-3 sticky-top" id="d-0">
			<div class="container" id="d-1" style="margin-top: 8px;">
				<div class="card shadow-sm border-0 mb-1">
					<div class="card-body">
						<div class="row">
							<div class="col-sm" id="img-col">
								<img src="{{asset('img/thief.png')}}" id="img-user" style="width:45%; border-radius: 90px;">
							</div>
							<div class="col-sm text-center" id="username">
								{{ Session::get('full_name') }}
							</div>
							<div class="col-sm">
								<a onclick="$('#modal-logout').modal('show')" id="logout" style="width:100%;" class="bg-danger text-white btn btn-solid text-decoration-none">
								Logout
							</a>
							</div>
						</div>
					</div>
				</div>
				<div class="card shadow-sm border-0">
					<div class="card-body">
						<div class="d-flex justify-content-between">
							<h4 class="text-center">
								Create new post
							</h4>
							<button id="toggle" class="btn btn-solid bg-primary text-white">
								Show / Hide
							</button>
						</div>
						<div class="form-group" id="form-1">	
						<hr>

							<input type="text" name="title" class="form-control mb-2" required placeholder="Judul">
							<textarea class="form-control mb-3" name="content" rows="5" placeholder="Isi"></textarea>
							<input type="file" name="files[]" multiple class="form-control mb-2">
							<button class="btn btn-solid btn-dark" style="width:100%">
								Kirim
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7">
			<div class="container" style="padding-bottom: 10px;" id="s-0">
				<div id="article">

				</div>
			</div>
		</div>	
	</div>

	<div class="modal fade" role="dialog" id="modal-logout" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">
						Keluar ?
					</h3>
				</div>
				<div class="modal-body">
					<p>
						Kamu yakin ingin keluar ?
					</p>
				</div>
				<div class="modal-footer">
					<a class="btn btn-solid bg-danger text-white" href="{{route('logout')}}">
						Keluar
					</a>
					<button class="btn btn-solid bg-primary text-white" onclick="$('#modal-logout').modal('hide');">
						Tutup
					</button>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){

			$('#toggle').on('click', function(){
				$('#form-1').slideToggle();
			});

			$.ajax({
				type:'GET',
				url:'/article/post',
				success:function(res){
					$('#article').html(res);
				}
			});
		});
	</script>
@endsection