@extends('theme.default')
@section('content')
@forelse($table_re_product as $row)
<h1>Edit  : {{ $row->id_return }}</h1>
	<form action="{{ url('/') }}/re_product/{{ $row->id_return }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}	

		<div class="form-group">
			<strong>วันที่ : </strong>
			<input class="form-control"type="date" name="date" value="{{ $row->date }}"  >
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
		
		<div class="line">		
			<a class="btn btn-primary pull-right "href="{{ url('/') }}/re_product">back</a>
			<button class="btn btn-success "type="submit">Update</button>
		</div>
	</form>
@empty	
	<div>This Customer id does not exist</div>
@endforelse
@endsection()
