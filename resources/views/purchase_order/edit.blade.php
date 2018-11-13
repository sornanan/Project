@extends('theme.default')
@section('content')
@forelse($table_purchase_order as $row)
<br>

<h1>เเก้ไขข้อมูล  : {{ $row->id_order }}</h1>
	<form action="{{ url('/') }}/purchase_order/{{ $row->id_order }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
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

		<div class="line">
			<br>
			<a class="btn btn-primary pull-right" href="{{ url('/') }}/purchase_order">back</a>
			<button class="btn btn-success btn-smtype="submit">Update</button>
		</div>
	</form>
	@include('purchase_order_detail/index')
@empty	
	<div>This  id does not exist</div>
@endforelse
@endsection()
