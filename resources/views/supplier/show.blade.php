<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@forelse($table_supplier as $row)
	<h1>Customer : {{ $row->id_supplier }} </h1>
	<div class="line">
		<strong>name : </strong>
		<span>{{ $row->name_supplier }} </span>
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
		<a href="{{ url('/') }}/supplier">back</a>
		<a href="{{ url('/') }}/supplier/{{ $row->id_supplier }}/edit">edit</a>
		<div class="line">
	<form class="inline" action="{{ url('/') }}/supplier/{{ $row->id_supplier }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit">Delete</button>
	</form>
</div>

	</div>

@empty
	<div>This Customer id does not exist</div>

@endforelse


