@extends('theme.default')
@section('content')
<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<h1>Create New Customer</h1>
<form action="{{ url('/') }}/customer" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div class="form-group">
		<strong>ชื่อ : </strong>
		<input class="form-control type="text" name="name_customer" >
	</div>
	<div class="form-group">
		<strong>ที่อยู่ : </strong>
		<input class="form-control type="text" name="address"  >
	</div>
	<div class="form-group">
		<strong>email : </strong>
		<input class="form-control type="text" name="email" >
	</div>
	<div class="form-group">
		<strong>เบอร์โทรศัพท์ : </strong>
		<input class="form-control type="text"  name="telephone"  >
	</div>
	<div class="line">
		<a class="btn btn-primary pull-right " href="{{ url('/') }}/customer">back</a>
		<button class="btn btn-success" type="submit">Create</button>
	</div>
</form>
@endsection()


