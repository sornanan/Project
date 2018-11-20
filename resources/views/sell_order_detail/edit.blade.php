@extends('theme.default')

@section('content')
@forelse($table_sell_order_detail as $row)
<h1>เเก้ไขข้อมูล  : {{ $row->id_selldetail }}</h1>
	<form action="{{ url('/') }}/sell_order_detail/{{ $row->id_selldetail }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
	<div class="form-group">
		<strong>รหัสการขาย: </strong>
		<select class="form-control" name="id_sell">
			@foreach($table_sell as $row_sell)
			<option value="{{ $row_sell->id_sell}}">
				 {{ $row_sell->id_sell}}
			</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<strong>ชื่อสินค้า : </strong>
		<select class="form-control" name="id_product">
			@foreach($table_product2 as $row_product)
			<option value="{{ $row_product->id_product}}">
				 {{ $row_product->product}}
			</option>
			@endforeach
		</select>
	</div>
		<div class="line">
			<strong>จำนวนสินค้า : </strong>
			<input class="form-control" type="text" name="quantity" value="{{ $row->quantity }}"  >
		</div>
		<div class="form-group">
			<strong>ราคา : </strong>
			<input class="form-control" type="text" name="price" value="{{ $row->price }}"  >
		</div>
		<div class="line">
			<a class="btn btn-primary pull-right " href="{{ url('/') }}/sell_order">back</a>
			<button class="btn btn-success" type="submit">Update</button>
		</div>
	</form>
@empty	
	<div>This Customer id does not exist</div>
@endforelse
@endsection
