@extends('templates.master')

@section('content')
@forelse($table_customer as $row)
<h1>Edit Customer : {{ $row->id_customer }}</h1>
	<form action="{{ url('/') }}/sell_order_detail/{{ $row->id_customer }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="form-group">
			<strong>รายละเอียด : </strong>
			<input class="form-control" type="text" name="detail" value="{{ $row->detail }}" >
		</div>
		<div class="line">
			<strong>จำนวนสินค้า : </strong>
			<input type="text" name="quantity" value="{{ $row->quantity }}"  >
		</div>
		<div class="line">
			<strong>ราคา : </strong>
			<input type="text" name="price" value="{{ $row->price }}"  >
		</div>
		<div class="line">
			<strong>จำนวนเงิน : </strong>
			<input type="number" name="amount" value="{{ $row->amount }}"  >
		</div>
		<div class="line">
			<a class="btn btn-primary pull-right " href="{{ url('/') }}/sell_order_detail">back</a>
			<button class="btn btn-success " type="submit">Update</button>
		</div>
	</form>
@empty	
	<div>This Customer id does not exist</div>
@endforelse
@endsection()
