@extends('theme.default')
@section('content')
<h1>เพิ่มข้อมูล</h1>
<form action="{{ url('/') }}/product" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}	
	<div class="form-group">
		<strong>ชื่อสินค้า : </strong>
		<input class="form-control type="text" name="product"  >
	</div>
	<div class="form-group">
		<a class="btn btn-primary pull-right " href="{{ url('/') }}/product">back</a>
		<button class="btn btn-success type="submit">Create</button>
	</div>
</form>
@endsection()


