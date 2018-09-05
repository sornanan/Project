<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@forelse($table_movement as $row)
<h1>Edit Customer : {{ $row->id_move }}</h1>
	<form action="{{ url('/') }}/movement/{{ $row->id_move }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="line">
		<strong>ชื่อสินค้า : </strong>
		<select name="id_product">
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
	</div>
		
		<div class="line">		
			<a href="{{ url('/') }}/movement">back</a>
			<button type="submit">Update</button>
		</div>
	</form>
@empty	
	<div>This Customer id does not exist</div>
@endforelse

