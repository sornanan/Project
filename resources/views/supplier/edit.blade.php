@extends('theme.default')

@section('content')

@forelse($table_supplier as $row)
<h1>Edit Supplier : {{ $row->id_supplier }}</h1>
	<form action="{{ url('/') }}/supplier/{{ $row->id_supplier }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="form-group">
			<strong>ชื่อ-นามสกุล : </strong>
			<input class="form-control" type="text" name="name_supplier" value="{{ $row->name_supplier }}" >
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
			<input class="form-control" type="text" name="telephone" value="{{ $row->telephone }}"  >
		</div>
		<div class="line">
			<a class="btn btn-primary pull-right" href="{{ url('/') }}/supplier">back</a>
			<button class="btn btn-success btn-sm type="submit">Update</button>
		</div>
	</form>
@empty	
	<div>This Customer id does not exist</div>
@endforelse

@endsection()