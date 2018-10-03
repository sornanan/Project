@extends('templates.master')

@section('content')
<h1>Create New Supplier</h1>
<form action="{{ url('/') }}/supplier" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div class="form-group">
		<strong>Name : </strong>
		<input class="form-control type="text" name="name_supplier"  >
	</div>
	<div class="form-group">
		<strong>ที่อยู่ : </strong>
		<input class="form-control type="text" name="address"  >
	</div>
	<div class="form-group">
		<strong>email : </strong>
		<input class="form-control type="text" name="email"  >
	</div>
	<div class="form-group">
		<strong>Telephone : </strong>
		<input class="form-control type="number"  name="telephone"  >
	</div>
	<div class="line">
		<a class="btn btn-primary pull-right " href="{{ url('/') }}/supplier">back</a>
		<button class="btn btn-success" type="submit">Create</button>
	</div>
</form>
@endsection()

