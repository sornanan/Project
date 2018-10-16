@extends('theme.default')
@section('content')
@forelse($table_sell_order as $row)
<h1>Edit  : {{ $row->id_sell }}</h1>
	<form action="{{ url('/') }}/sell_order/{{ $row->id_sell }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="form-group">
			<strong>ชื่อ-นามสกุล : </strong>
			<input class="form-control" type="text" name="date" value="{{ $row->date }}" >
		</div>
		<div class="form-group">
			<strong>ที่อยู่ : </strong>
			<input class="form-control" type="text" name="price" value="{{ $row->price }}"  >
		</div>
		<div class="form-group">
			<strong>email : </strong>
			<input class="form-control" type="text" name="date_quatation" value="{{ $row->date_quatation }}"  >
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
			<a class="btn btn-primary pull-right " href="{{ url('/') }}/sell_order">back</a>
			<button class="btn btn-success " type="submit">Update</button>
		</div>
	</form>
@empty	
	<div>This Customer id does not exist</div>
@endforelse
@endsection
