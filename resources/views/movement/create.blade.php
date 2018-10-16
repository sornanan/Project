@extends('theme.default')
@section('content')
<h1>Create New Movement</h1>
<form action="{{ url('/') }}/movement" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}

	
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
	<div class="form-group">
		<strong>สินค้าเข้า : </strong>
		<input class="form-control type="text" name="inproduct" >
	</div>
	<div class="form-group">
		<strong>สินค้าออก : </strong>
		<input class="form-control type="text" name="outproduct" >
	</div>
	<div class="form-group">
		<strong>สินค้าค้างรับ : </strong>
		<input class="form-control type="text" name="receive" >
	</div>
	<div class="form-group">
		<strong>สินค้าค้างส่ง : </strong>
		<input class="form-control type="text"  name="send">
	</div>
	<div class="form-group">
		<a class="btn btn-primary pull-right " href="{{ url('/') }}/movement">back</a>
		<button class="btn btn-success type="submit">Create</button>
	</div>
</form>
@endsection()

