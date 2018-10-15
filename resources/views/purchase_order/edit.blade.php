@extends('templates.master')

@section('content')
@forelse($table_purchase_order as $row)
<h1>Edit Purchase_order : {{ $row->id_order }}</h1>
	<form action="{{ url('/') }}/purchase_order/{{ $row->id_order }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="form-group">
			<strong>ราคา : </strong>
			<input class="form-control"type="text" name="price" value="{{ $row->price }}"  >
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
		<div class="line">
			<a href="{{ url('/') }}/purchase_order">back</a>
			<button type="submit">Update</button>
		</div>
	</form>
@empty	
	<div>This Customer id does not exist</div>
@endforelse
@endsection()
