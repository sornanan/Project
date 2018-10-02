@extends('templates.master')

@section('content')
<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@forelse($table_customer as $row)
	<h1>Customer : {{ $row->id_customer }} </h1>
	<div class="form-group">
		<strong>ชื่อ-สกุล : </strong>
		<span class="form-control">{{ $row->name_customer }} </span>
	</div>
	<div class="form-group">
		<strong>ที่อยู่ : </strong>
		<span class="form-control">{{ $row->address}}</span>
	</div>
	<div class="form-group">
		<strong>email: </strong>		
		<span class="form-control">{{ $row->email }}</span>
	</div>
	<div class="form-group">
		<strong>เบอร์โทรศัพท์ : </strong>		
		<span class="form-control">{{ $row->telephone }}</span>
	</div>
	<div class="form-group">
		<a class="btn btn-success  pull-right"href="{{ url('/') }}/customer/{{ $row->id_customer }}/edit">edit</a>
		<a class="btn btn-primary "href="{{ url('/') }}/customer">back</a>

		<form class="inline" action="{{ url('/') }}/customer/{{ $row->id_customer }}" method="POST">
		<br><button class="btn btn-danger btn-sm pull-right "type="submit">Delete</button>
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		
	</form>
	


	</div>

@empty
	<div>This Customer id does not exist</div>

@endforelse
@endsection()


