<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@forelse($table_sell_order as $row)
	<h1>Customer : {{ $row->id_customer }} </h1>
	<div class="line">
		<strong>name : </strong>
		<span>{{ $row->id_sell }} </span>
	</div>
	<div class="line">
		<strong>date : </strong>
		<span>{{ $row->date}}</span>
	</div>

	<div class="line">
		<strong>price : </strong>		
		<span>{{ $row->price }}</span>
	</div>
	<div class="line">
		<strong>date_quatation : </strong>		
		<span>{{ $row->date_quatation }}</span>
	</div>
	<div class="line">
		<strong>id_customer : </strong>		
		<span>{{ $row->id_customer }}</span>
	</div>
	<div class="line">
		<strong>id_user : </strong>		
		<span>{{ $row->id_user }}</span>
	</div>
	<div class="line">
		<a href="{{ url('/') }}/sell_order">back</a>
		<a href="{{ url('/') }}/sell_order/{{ $row->id_sell }}/edit">edit</a>
		<div class="line">
	<form class="inline" action="{{ url('/') }}/sell_order/{{ $row->id_sell }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit">Delete</button>
	</form>
</div>

	</div>

@empty
	<div>This Customer id does not exist</div>

@endforelse


