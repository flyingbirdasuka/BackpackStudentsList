@extends('layouts/app')
	@section('content')
		<div class="album py-5 bg-light">
		        	<div class="container">
		         		 <div class="row">  
		         		 @if(count($lessons)>0)	 
		         		 	@foreach($lessons as $lesson)
									<div class="col-md-4">
										<div class="card" style="width: 18rem;">
										  <div class="card-body">
										    <h5 class="card-title"><a class="colored" href="/students/{{$lesson->id}}">{{$lesson->lesson}}</a></h5>
										    <p class="card-text">{{$lesson->description}}</p>
										  </div>
										</div>
									</div>
								@endforeach
							@endif
				  		</div>
					</div>
			</div>	   	
	@endsection
        	
