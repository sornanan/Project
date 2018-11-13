@extends('theme.default')
@section('content')
@forelse($table_purchase_order as $row)
	<h1>Purchase_order : {{ $row->id_order }} </h1>
	<div class="form-group">
		<strong >id_order : </strong>
		<span class="form-control">{{ $row->id_order }} </span>
	</div>
	<div class="form-group">
		<strong>date : </strong>
		<span class="form-control">{{ $row->date }} </span>
	</div>
	<div class="form-group">
		<strong>id_supplier: </strong>
		<span class="form-control">{{ $row->id_supplier}}</span>
	</div>
	<div class="form-group">
		<strong>id_user: </strong>
		<span class="form-control">{{ $row->id_user}}</span>
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
	<div>This Purchas id does not exist</div>

@endforelse
@endsection

