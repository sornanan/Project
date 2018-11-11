@extends('theme.default')
@section('content')
@forelse($table_sell_order as $row)
	<h1>Sell : {{ $row->id_sell }} </h1>
	<div class="form-group">
		<strong>name : </strong>
		<span class="form-control">{{ $row->id_sell }} </span>
	</div>
	<div class="form-group">
		<strong>date : </strong>
		<span class="form-control">{{ $row->date}}</span>
	</div>
	<div class="form-group">
		<strong>date_quatation : </strong>		
		<span class="form-control">{{ $row->date_quatation }}</span>
	</div>
	<div class="form-group">
		<strong>id_customer : </strong>		
		<span class="form-control">{{ $row->id_customer }}</span>
	</div>
	<div class="form-group">
		<strong>id_user : </strong>		
		<span class="form-control">{{ $row->id_user }}</span>
	</div>
	<div class="line">
		<a class="btn btn-success " href="{{ url('/') }}/sell_order/{{ $row->id_sell }}/edit">edit</a>
		<a class= "btn btn-primary " href="{{ url('/') }}/sell_order">back</a>
		
		<div class="line">
	<form class="inline" action="{{ url('/') }}/sell_order/{{ $row->id_sell }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button class="btn btn-danger btn-sm pull-right " type="submit">Delete</button>
	</form>
</div>

	</div>

@empty
	<div>This Customer id does not exist</div>

@endforelse
@endsection

