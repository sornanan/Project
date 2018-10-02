<h1>Purchase List</h1>
<div class="line">
	<a href="{{ url('/') }}/purchase_order/create">
New Purchase
</a>
</div>
<table border=1>
<tr>
		<th>id_order</th>
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
			<a href="{{ url('/') }}/purchase_order/{{ $row->id_order }}">View</a>
			<a href="{{ url('/') }}/purchase_order/{{ $row->id_order }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
