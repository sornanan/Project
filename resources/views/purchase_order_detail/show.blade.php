@extends('theme.default')
@section('content')
@forelse($table_purchase_order_detail as $row)
	<h1>Customer : {{ $row->id_orderdetail }} </h1>
	<div class="line">
		<strong>รายละเอียด : </strong>
		<span>{{ $row->detail }} </span>
	</div>
	<div class="line">
		<strong>จำนวน : </strong>
		<span>{{ $row->quantity}}</span>
	</div>
	<div class="line">
		<strong>ราคา: </strong>		
		<span>{{ $row->price }}</span>
	</div>
	<div class="line">
		<strong>จำนวนเงิน : </strong>		
		<span>{{ $row->amount }}</span>
	</div>
	<div class="line">
		<strong>id_product : </strong>		
		<span>{{ $row->id_product }}</span>
	</div>
	<div class="line">
		<strong>id_order : </strong>		
		<span>{{ $row->id_order }}</span>
	</div>
	<div class="line">
		<a href="{{ url('/') }}/purchase_order_detail">back</a>
		<a href="{{ url('/') }}/purchase_order_detail/{{ $row->id_orderdetail }}/edit">edit</a>
		<div class="line">
	<form class="inline" action="{{ url('/') }}/purchase_order_detail/{{ $row->id_orderdetail }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit">Delete</button>
	</form>
</div>

	</div>

@empty
	<div>This Customer id does not exist</div>

@endforelse
@endsection

