@extends('theme.default')
@section('content')
<h1>เพิ่มข้อมูล</h1>
<form action="{{ url('/') }}/purchase_order_detail" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}

	<div class="form-group" >
		<strong>รายละเอียด </strong>
		<input class="form-control" type="textarea" name="detail" >
	</div>
	<div class="line">
		<strong>จำนวน : </strong>
		<input class="form-control" type="text" name="quantity" >
	</div>
	<div class="form-group">
		<strong>ราคา : </strong>
		<input class="form-control" type="text" name="price">
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
		<strong>รหัสซื้อสินค้า: </strong>
		<select class="form-control" name="id_order">
			@foreach($table_per as $row_per)
			<option value="{{ $row_per->id_order}}">
				 {{ $row_per->id_order}}
			</option>
			@endforeach
		</select>
	</div>
	

	<div class="line">
		<a class="btn btn-primary pull-right " href="{{ url('/') }}/purchase_order">back</a>
		<button class="btn btn-success type="submit">Create</button>
	</div>
</form>
@endsection()

