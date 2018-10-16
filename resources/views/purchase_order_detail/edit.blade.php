@extends('theme.default')
@section('content')
@forelse($table_purchase_order_detail as $row)
<h1>Edit Purchase_or : {{ $row->id_orderdetail }}</h1>
	<form action="{{ url('/') }}/purchase_order_detail/{{ $row->id_orderdetail }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="form-group">
			<strong>รายละเอียด : </strong>
			<input class="form-control"type="text" name="detail" value="{{ $row->detail }}">
		</div>
		<div class="form-group">
			<strong>จำนวน : </strong>
			<input class="form-control"type="text" name="quantity" value="{{ $row->quantity }}">
		</div>
		<div class="form-group">
			<strong>ราคา : </strong>
			<input class="form-control"type="text" name="price" value="{{ $row->price }}">
		</div>
		<div class="form-group">
			<strong>จำนวนเงิน : </strong>
			<input class="form-control"type="text" name="amount" value="{{ $row->amount }}">
		</div>
			<div class="form-group">
		<strong>สินค้า: </strong>
		<select class="form-control" name="id_product">
			@foreach($table_pro as $row_pro)
			<option value="{{ $row_pro->id_product}}">
				 {{ $row_pro->product}}
			</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<strong>พนักงาน: </strong>
		<select class="form-control" name="id_order">
			@foreach($table_per as $row_per)
			<option value="{{ $row_per->id_order}}">
				 {{ $row_per->id_order}}
			</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
			<a class="btn btn-primary pull-right " href="{{ url('/') }}/purchase_order_detail">back</a>
			<button class="btn btn-success " type="submit">Update</button>
		</div>
	</form>
@empty	
	<div>This Purchase id does not exist</div>
@endforelse
@endsection

