<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@forelse($table_purchase_order as $row)
	<h1>Customer : {{ $row->id_order }} </h1>
	<div class="line">
		<strong>price : </strong>
		<span>{{ $row->price }} </span>
	</div>
	<div class="line">
		<strong>date: </strong>
		<span>{{ $row->date}}</span>
	</div>
	<div class="line">
		<strong>id_supplier: </strong>		
		<span>{{ $row->id_supplier }}</span>
	</div>
	<div class="line">
		<strong>id_user: </strong>		
		<span>{{ $row->id_user }}</span>
	</div>
	<div class="line">
		<a href="{{ url('/') }}/purchase_order">back</a>
		<a href="{{ url('/') }}/purchase_order/{{ $row->id_order }}/edit">edit</a>
		<div class="line">
	<form class="inline" action="{{ url('/') }}/purchase_order/{{ $row->id_order }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit">Delete</button>
	</form>
</div>

	</div>

@empty
	<div>This Customer id does not exist</div>

@endforelse


