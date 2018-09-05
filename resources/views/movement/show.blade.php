<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@forelse($table_movement as $row)
	<h1>Customer : {{ $row->id_move }} </h1>
	<div class="line">
		<strong>id_move : </strong>
		<span>{{ $row->id_move }} </span>
	</div>
	<div class="line">
		<strong>id_product : </strong>
		<span>{{ $row->id_product}}</span>
	</div>
	<div class="line">
		<strong>date: </strong>		
		<span>{{ $row->date }}</span>
	</div>
	<div class="line">
		<strong>inproduct : </strong>		
		<span>{{ $row->inproduct }}</span>
	</div>
	<div class="line">
		<strong>outproduct : </strong>		
		<span>{{ $row->outproduct }}</span>
	</div>
	<div class="line">
		<strong>receive : </strong>		
		<span>{{ $row->receive }}</span>
	</div>
	<div class="line">
		<strong>send : </strong>		
		<span>{{ $row->send }}</span>
	</div>
	<div class="line">
		<strong>balance : </strong>		
		<span>{{ $row->balance }}</span>
	</div>
	<div class="line">
		<a href="{{ url('/') }}/movement">back</a>
		<a href="{{ url('/') }}/movement/{{ $row->id_move }}/edit">edit</a>
		<div class="line">
	<form class="inline" action="{{ url('/') }}/movement/{{ $row->id_move }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit">Delete</button>
	</form>
</div>

	</div>

@empty
	<div>This Customer id does not exist</div>

@endforelse


