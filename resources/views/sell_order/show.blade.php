@extends('theme.default')
@section('content')
@forelse($table_sell_order as $row)
	
@include('sell_order_detail/index')
	<a class="btn btn-primary btn-block" href="{{ url('/') }}/sell_order">back</a>
@empty
	<div>This Customer id does not exist</div>

@endforelse
@endsection

