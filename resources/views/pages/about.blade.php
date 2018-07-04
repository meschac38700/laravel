@extends('../layouts/master')
	

	@section('title','About')
	
	@section('content')
		<h1>About</h1>
		<h5>{{$name}}</h5>

		

	@endsection

	
	@push('scripts.footer')
		<script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
	@endpush
