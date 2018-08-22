<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@forelse($table_product as $row)
<h1>Edit Product : {{ $row->id_product }}</h1>
	<form action="{{ url('/') }}/product/{{ $row->id_product}}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="line">
			<strong>ชื่อ-นามสกุล : </strong>
			<input type="text" name="product" value="{{ $row->product }}" >
		</div>
		<div class="line">
			<a href="{{ url('/') }}/product">back</a>
			<button type="submit">Update</button>
		</div>
	</form>
@empty	
	<div>This Product id does not exist</div>
@endforelse

