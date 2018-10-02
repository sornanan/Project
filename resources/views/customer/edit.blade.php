@extends('templates.master')

@section('content')
@forelse($table_customer as $row)
<h1>Edit Customer : {{ $row->id_customer }}</h1>

	<form action="{{ url('/') }}/customer/{{ $row->id_customer }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="form-group">
			<strong>ชื่อ-นามสกุล : </strong>
			<input class="form-control" type="text" name="name_customer" value="{{ $row->name_customer }}" >
		</div>
		<div class="form-group">
			<strong>ที่อยู่ : </strong>
			<input class="form-control" type="text" name="address" value="{{ $row->address }}"  >
		</div>
		<div class="form-group">
			<strong>email : </strong>
			<input class="form-control" type="text" name="email" value="{{ $row->email }}"  >
		</div>
		<div class="form-group">
			<strong>เบอร์โทรศัพท์ : </strong>
			<input class="form-control" type="number" name="telephone" value="{{ $row->telephone }}"  >
		</div>
		<div class="line">
			<a class="btn btn-primary pull-right" href="{{ url('/') }}/customer">back</a>
			<button class="btn btn-success btn-sm" type="submit">Update</button>
		</div>
	</form>

@empty	
	<div>This Customer id does not exist</div>
@endforelse
@endsection()
