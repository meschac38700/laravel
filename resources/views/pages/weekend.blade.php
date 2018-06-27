@extends('../layouts/master', ['title'=>'Weekend'])

	@section('content')
		@if ($weekend)
			{{'va t\'amuser'}}
		@else
			{{ 'va travailler'}}
		@endif
	@endsection