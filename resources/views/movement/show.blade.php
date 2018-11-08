@extends('theme.default')
@section('content')
@forelse($table_movement as $row)
	<h1>Movement : {{ $row->id_move }} </h1>
	<div class="form-group">
		<strong>id_move : </strong>
		<span class="form-control">{{ $row->id_move }} </span>
	</div>
	<div class="form-group">
		<strong>id_product : </strong>
		<span class="form-control">{{ $row->id_product}}</span>
	</div>
	<div class="form-group">
		<strong>date: </strong>		
		<span class="form-control">{{ $row->date }}</span>
	</div>
	<div class="form-group">
		<strong>inproduct : </strong>		
		<span class="form-control">{{ $row->inproduct }}</span>
	</div>
	<div class="form-group">
		<strong>outproduct : </strong>		
		<span class="form-control">{{ $row->outproduct }}</span>
	</div>
	<div class="form-group">
		<strong>balance : </strong>		
		<span class="form-control">{{ $row->balance }}</span>
	</div>
	<div class="form-group">
		<a class="btn btn-success  pull-right" href="{{ url('/') }}/movement/{{ $row->id_move }}/edit">edit</a>
		<a class= "btn btn-primary "href="{{ url('/') }}/movement">back</a>
		
	<form class="inline" action="{{ url('/') }}/movement/{{ $row->id_move }}" method="POST">
		<br><button class="btn btn-danger btn-sm pull-right " type="submit">Delete</button>
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		
	</form>
</div>

	</div>

@empty
	<div>This Customer id does not exist</div>

@endforelse
@endsection()

