@extends('theme.default')
@section('content')
@forelse($table_product as $row)
	

	@include('movement/index')
	
@empty
	<div>This Customer id does not exist</div>

@endforelse
@endsection


