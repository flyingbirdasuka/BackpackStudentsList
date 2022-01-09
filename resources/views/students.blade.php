 @extends('layouts/app')


	@section('content')
	<ul class="breadcrumb">
			<li class="lesson"><a href="/students">All lessons</a></li>
			@if(count($lessons)>0)	
				@foreach($lessons as $lesson)	
				  <li class="lesson"><a href="/students/{{$lesson->id}}">{{$lesson->lesson}}</a></li>
				@endforeach
			</ul>
			@endif	
	<div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            
		@if (count($students)>0)
			<p><?php echo count($students) ?> member<?php echo count($students)>1 ? 's': '' ?></p>
			@foreach($students as $student)
			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">{{$student->first_name}} {{$student->last_name}}</h5>
				    <h6><a href="mailto:{{$student->email}}" class="card-link">{{$student->email}}</a></h6>
				    <p class="card-text">Class: <a href="/students/{{$student->lesson_id}}">{{$student->lesson->lesson}}</a></p>
				    <p class="card-text">Phone: {{$student->phone}}</p>
				  </div>
				</div>
			</div>	
			@endforeach
		@endif
			
		   </div>
		</div>
	</div>	   	
	@endsection