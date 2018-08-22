<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@forelse($table_customer as $row)
	<h1>Customer : {{ $row->id_customer }} </h1>
	<div class="line">
		<strong>name : </strong>
		<span>{{ $row->name_customer }} </span>
	</div>
	<div class="line">
		<strong>address : </strong>
		<span>{{ $row->address}}</span>
	</div>
	<div class="line">
		<strong>email: </strong>		
		<span>{{ $row->email }}</span>
	</div>
	<div class="line">
		<strong>telephone : </strong>		
		<span>{{ $row->telephone }}</span>
	</div>
	<div class="line">
		<a href="{{ url('/') }}/customer">back</a>
		<a href="{{ url('/') }}/customer/{{ $row->id_customer }}/edit">edit</a>
		<div class="line">
	<form class="inline" action="{{ url('/') }}/customer/{{ $row->id_customer }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit">Delete</button>
	</form>
</div>

	</div>

@empty
	<div>This Customer id does not exist</div>

@endforelse


