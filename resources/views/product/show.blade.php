@extends('templates.master')

@section('content')
@forelse($table_product as $row)
	<h1>Product : {{ $row->id_product }} </h1>
	<div class="form-group">
		<strong>name : </strong>
		<span class="form-control">{{ $row->product }} </span>
	</div>
	
	<div class="line">

		<a class = "btn btn-success  pull-right"  href="{{ url('/') }}/product/{{ $row->id_product }}/edit">edit</a>
		<a class = "btn btn-primary "href="{{ url('/') }}/product">back</a>
		
		<div class="line">
	<form class="inline" action="{{ url('/') }}/product/{{ $row->id_product }}" method="POST">
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


