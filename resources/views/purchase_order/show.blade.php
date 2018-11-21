@extends('theme.default')
@section('content')
@forelse($table_purchase_order as $row)
	
	@include('purchase_order_detail/index')
	<a class="btn btn-primary btn-block" href="{{ url('/') }}/purchase_order">back</a>
@empty
	<div>This Purchas id does not exist</div>

@endforelse
@endsection

