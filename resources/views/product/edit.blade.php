@extends('theme.default')
@section('content')
@forelse($table_product as $row)
<h1>เเก้ไขข้อมูล  : {{ $row->id_product }}</h1>
	<form action="{{ url('/') }}/product/{{ $row->id_product}}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="form-group">
			<strong>ชื่อสินค้า : </strong>
			<input class="form-control" type="text" name="product" value="{{ $row->product }}" >
		</div>
		<div class="form-group">
			<a class="btn btn-primary pull-right " href="{{ url('/') }}/product">back</a>
			<button class="btn btn-success " type="submit">Update</button>
		</div>
	</form>

@empty	
	<div>This Product id does not exist</div>
@endforelse

@endsection()