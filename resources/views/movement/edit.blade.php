@extends('theme.default')
@section('content')
@forelse($table_movement as $row)
<h1>เเก้ไขข้อมูล  : {{ $row->id_move }}</h1>
	<form action="{{ url('/') }}/movement/{{ $row->id_move }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="form-group">
		<strong>ชื่อสินค้า : </strong>
		<select class="form-control" name="id_product">
			<option>
				โปรดเลือก...
			</option>
			@foreach($table_product2 as $row_product)
				@if($id == $row_product->id_product) 
				<option value="{{ $row_product->id_product}}" selected>
					 {{ $row_product->product}}
				</option>
				@else
				<option value="{{ $row_product->id_product}}" >
					 {{ $row_product->product}}
				</option>
				@endif
				@endforeach
			</select>
		<div class="form-group">
			<strong>สินค้าเข้า : </strong>
			<input class="form-control"type="text" name="amount_m" value="{{ $row->amount }}"  >
		</div>
		</select>
	</div>
		
		<div class="line">		
			<a class="btn btn-primary pull-right "href="{{ url('/') }}/movement">back</a>
			<button class="btn btn-success "type="submit">Update</button>
		</div>
	</form>
@empty	
	<div>This Customer id does not exist</div>
@endforelse
@endsection()
