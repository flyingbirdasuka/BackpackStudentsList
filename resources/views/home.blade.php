@extends('layouts/app')

	@section('content')
	<h1>The Dance School Admin Page</h1>
	<div class="album py-5 bg-light">

        <div class="container">
          <div class="row">
			<div class="col-md-4">
				<a class="colored" href="/students">	
					<div class="card" style="width: 18rem; height:300px;">	
					  <div class="card-body text-center">
					    <h3 class="card-title card-title-center">Students List</h3>
					  </div>
					</div>  
				</a>  
			</div>	
			<div class="col-md-4">
				<a class="colored" href="/lessons">	
					<div class="card" style="width: 18rem; height:300px;">			
					  <div class="card-body text-center">
					    <h3 class="card-title card-title-center">Lessons List</h3>
					  </div>
					</div>  
				</a>  
			</div>
			<div class="col-md-4">
				<a class="colored" href="/admin">	
					<div class="card" style="width: 18rem; height:300px;">			
					  <div class="card-body text-center">
					    <h3 class="card-title card-title-center">Admin</h3>
					  </div>
					</div>  
				</a>  
			</div>
			
		   </div>
		</div>
	</div>	   	
	@endsection