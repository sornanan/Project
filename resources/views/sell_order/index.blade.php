<h1>ขายสินค้า List</h1>
<div class="line">
	<a href="{{ url('/') }}/sell_order/create">
New ขายสินค้า
</a>
</div>
<table border=1>
<tr>
		<th>รหัสขาย</th>
		<th>วันที่ขายสินค้า</th>
		<th>ราคา</th>
		<th>วันที่เสนอราคา</th>
		<th>รหัสลูกค้า</th>
		<th>รหัสพนักงาน</th>
		<th>action</th>
	</tr>
	@foreach($table_sell_order as $row)
	<tr>
		<td>{{ $row->id_sell }} </td>
		<td>{{ $row->date }} </td>
		<td>{{ $row->price }}</td>
		<td>{{ $row->date_quatation }}</td>
		<td>{{ $row->id_customer}}</td>
		<td>{{ $row->id_user}}</td>
		<td>
			<a href="{{ url('/') }}/sell_order/{{ $row->id_sell }}">View</a>
			<a href="{{ url('/') }}/sell_order/{{ $row->id_sell }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
