@extends('theme.default')
@section('content')
@forelse($table_re_product as $row)
	<h1>Movement : {{ $row->id_return }} </h1>
	<div class="form-group">
		<strong>รหัสคืนสินค้า : </strong>
		<span class="form-control">{{ $row->id_return }} </span>
	</div>
	<div class="form-group">
		<strong>วันที่ : </strong>
		<span class="form-control">{{ $row->date}}</span>
	</div>
	<div class="form-group">
		<strong>รหัสลูกค้า: </strong>		
		<span class="form-control">{{ $row->id_customer }}</span>
	</div>
	
	<div class="form-group">
		<a class="btn btn-success  pull-right" href="{{ url('/') }}/re_product/{{ $row->id_return }}/edit">edit</a>
		<a class= "btn btn-primary "href="{{ url('/') }}/re_product">back</a>
		
	<form class="inline" action="{{ url('/') }}/re_product/{{ $row->id_return }}" method="POST">
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

