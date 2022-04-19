<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

	<div class="container">
		@php
			if(isset($data)){
				foreach($data as $g){
					foreach( $g as $k => $v){
						@endphp
							<div class="card border-0 shadow-sm mt-2">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<i class="rounded p-1 bg-primary text-white">
											@php echo $v['username']; @endphp
										</i>
										<i>
											@php echo $v['title']; @endphp
										</i>
									</div>
									<hr>
									<p>
										@php echo $v['content']; @endphp
									</p>
								</div>
							</div>
						@php
					}
				}
			}else{

			}
		@endphp
	</div>

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>