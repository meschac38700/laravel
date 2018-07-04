
@extends('../layouts/master')

	@section('title','Weekend')
	
	@section('content')

		{{-- utilisation de la methode static isWeekend contenue dans la classe App\Utilities\Date --}}
		@include('../shared/_weekend')
		

	@endsection