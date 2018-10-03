@extends('templates.master')

@section('content')
@forelse($table_supplier as $row)
	<h1>Customer : {{ $row->id_supplier }} </h1>
	<div class="form-group">
		<strong>name : </strong>
		<span class="form-control">{{ $row->name_supplier }} </span>
	</div>
	<div class="form-group">
		<strong>address : </strong>
		<span class="form-control">{{ $row->address}}</span>
	</div>
	<div class="form-group">
		<strong>email: </strong>		
		<span class="form-control">{{ $row->email }}</span>
	</div>
	<div class="form-group">
		<strong>telephone : </strong>		
		<span class="form-control">{{ $row->telephone }}</span>
	</div>
	<div class="line">
		<a class= "btn btn-primary" href="{{ url('/') }}/supplier">back</a>
		<a class="btn btn-success  pull-right"href="{{ url('/') }}/supplier/{{ $row->id_supplier }}/edit">edit</a>
		<div class="line">
	<form class="inline" action="{{ url('/') }}/supplier/{{ $row->id_supplier }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<br><button class="btn btn-danger btn-sm pull-right " type="submit">Delete</button>
	</form>
</div>

	</div>

@empty
	<div>This Customer id does not exist</div>

@endforelse
@endsection()


