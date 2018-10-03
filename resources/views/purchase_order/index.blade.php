@extends('templates.master')

@section('content')
<h1>Purchase List</h1>
<div class="line">
	<a class="btn btn-primary" href="{{ url('/') }}/purchase_order/create"style="margin-bottom: 15px;">
New Purchase
</a>
</div>
	<table class="table table-bordered">
<tr>
		<th style="padding-left: 15px;">id_order</th>
		<th>date</th>
		<th>price</th>
		<th>id_supplier</th>
		<th>id_user</th>
		<th>action</th>
	</tr>
	@foreach($table_purchase_order as $row)
	<tr>
		<td>{{ $row->id_order }} </td>
		<td>{{ $row->date }} </td>
		<td>{{ $row->price }}</td>
		<td>{{ $row->id_supplier}}</td>
		<td>{{ $row->id_user }}</td>
		<td>
			<a class="btn-success btn-sm"  href="{{ url('/') }}/purchase_order/{{ $row->id_order }}">View</a>
			<a class="btn-success btn-sm"  href="{{ url('/') }}/purchase_order/{{ $row->id_order }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection()