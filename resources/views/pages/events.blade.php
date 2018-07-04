@extends('../layouts/master')
	
	@section('title','Events')
	
	@section('content')
		<ul>
			@foreach($events as $event)
					<li> {{$event}} </li>
			@endforeach
		</ul>
	@endsection