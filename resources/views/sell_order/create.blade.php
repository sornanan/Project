@extends('theme.default')
@section('content')
<h1>เพิ่มข้อมูล </h1>
<form action="{{ url('/') }}/sell_order" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div class="line">
		<strong>วันที่ขาย : </strong>
		<input class="form-control" type="date" name="date" >
	</div>
	<div class="form-group">
		<strong>วันที่เสนอราคา : </strong>
		<input class="form-control"  type="date"  name="date_quatation"  >
	</div>

	<div class="form-group">
		<strong>ลูกค้า: </strong>
		<select class="form-control" name="id_customer">
			@foreach($table_cus as $row_cus)
			<option value="{{ $row_cus->id_customer}}">
				 {{ $row_cus->name_customer}}
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
		<a class="btn btn-primary pull-right" href="{{ url('/') }}/sell_order">back</a>
		<button class="btn btn-success " type="submit">Create</button>
	</div>
</form>
@endsection

