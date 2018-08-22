<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@forelse($table_product as $row)
	<h1>Product : {{ $row->id_product }} </h1>
	<div class="line">
		<strong>name : </strong>
		<span>{{ $row->product }} </span>
	</div>
	
	<div class="line">
		<a href="{{ url('/') }}/product">back</a>
		<a href="{{ url('/') }}/product/{{ $row->id_product }}/edit">edit</a>
		<div class="line">
	<form class="inline" action="{{ url('/') }}/product/{{ $row->id_product }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit">Delete</button>
	</form>
</div>

	</div>

@empty
	<div>This Customer id does not exist</div>

@endforelse


