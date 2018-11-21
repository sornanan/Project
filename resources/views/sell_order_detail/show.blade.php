@extends('theme.default')

@section('content')
@forelse($table_sell_order_detail as $row)
	<h1>Sell_detail : {{ $row->id_selldetail }} </h1>
	<div class="form-group">
		<strong >รหัส : </strong>
		<span class="form-control">{{ $row->id_selldetail }} </span>
	</div>
	<div class="form-group">
		<strong>รหัสการขาย : </strong>
		<span class="form-control">{{ $row->id_sell}}</span>
	</div>
	<div class="form-group">
		<strong>รหัสสินค้า: </strong>		
		<span class="form-control">{{ $row->id_product }}</span>
	</div>
	<div class="form-group">
		<strong>จำนวน : </strong>		
		<span class="form-control">{{ $row->quantity }}</span>
	</div>
	<div class="form-group">
		<strong>ราคา : </strong>		
		<span class="form-control">{{ $row->price }}</span>
	</div>
	<div class="form-group">
		<strong>จำนวนเงิน : </strong>		
		<span class="form-control">{{ $row->amount }}</span>
	</div>
	<div class="line">
		<a class="btn btn-success " href="{{ url('/') }}/sell_order_detail/{{ $row->id_selldetail }}/edit">edit</a>
		<a class= "btn btn-primary " href="{{ url('/') }}/sell_order">back</a>
	<div class="line">
	<form class="inline" action="{{ url('/') }}/sell_order_detail/{{ $row->id_selldetail }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button class="btn btn-danger btn-sm pull-right " type="submit">Delete</button>
	</form>
</div>

	</div>

@empty
	<div>This Customer id does not exist</div>

@endforelse
@endsection

