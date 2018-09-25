<h1>Customer List</h1>
<div class="line">
	<a href="{{ url('/') }}/sell_order_detail/create">
New Customer
</a>
</div>
<table border=1>
<tr>
		<th>รหัส</th>
		<th>รหัสสินค้า</th>
		<th>จำนวน</th>
		<th>ราคา</th>
		<th>จำนวนเงิน</th>
		<th>รหัสขายสินค้า</th>
		<th>action</th>
	</tr>
	@foreach($table_sell_order_detail as $row)
	<tr>
		<td>{{ $row->id_selldetail }} </td>
		<td>{{ $row->id_product }} </td>
		<td>{{ $row->quantity }}</td>
		<td>{{ $row->price }}</td>
		<td>{{ $row->amount }}</td>
		<td>{{ $row->id_sell }}</td>

		
		<td>
			<a href="{{ url('/') }}/sell_order_detail/{{ $row->id_selldetail }}">View</a>
			<a href="{{ url('/') }}/sell_order_detail/{{ $row->id_selldetail }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
