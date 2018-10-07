@extends('templates.master')
@section('content')
<h1>Create New Purchase_order</h1>
<form action="{{ url('/') }}/purchase_order" method="POST">
{{ csrf_field() }}
	{{ method_field('POST') }}

	
	<div class="form-group">
		<strong>Price : </strong>
		<input class="form-control" type="text" name="price"  >
	</div>
	

	<div class="form-group">
		<strong>ผู้จัดจำหน่าย: </strong>
		<select class="form-control" name="id_supplier">
			@foreach($table_sup as $row_sup)
			<option value="{{ $row_sup->id_supplier}}">
				 {{ $row_sup->name_supplier}}
			</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<strong>พนักงาน: </strong>
		<select class="form-control" name="id_user">
			@foreach($table_user as $row_user)
			<option value="{{ $row_user->id}}">
				 {{ $row_user->name}}
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

