@extends('theme.default')
@section('content')
<h1>เพิ่มข้อมูล </h1>
<form action="{{ url('/') }}/re_product" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}

	
	
	<div class="form-group">
		<strong>วันที่ : </strong>
		<input class="form-control" type="date" name="date" >
	</div>
	<div class="form-group">
		<strong>ชื่อลูกค้า : </strong>
		<select class="form-control" name="id_customer">
			@foreach($table_cus2 as $row_customer)
			<option value="{{ $row_customer->id_customer}}">
				 {{ $row_customer->name_customer}}
			</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<a class="btn btn-primary pull-right " href="{{ url('/') }}/re_product">back</a>
		<button class="btn btn-success "type="submit">Create</button>
	</div>
</form>
@endsection()

