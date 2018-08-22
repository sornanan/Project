<h1>Customer List</h1>
<div class="line">
	<a href="{{ url('/') }}/customer/create">
New Customer
</a>
</div>
<table border=1>
<tr>
		<th>รหัสลูกค้า</th>
		<th>ชื่อลูกค้า</th>
		<th>ที่อยู่</th>
		<th>email</th>
		<th>เบอร์โทรศัพท์</th>
		<th>action</th>
	</tr>
	@foreach($table_customer as $row)
	<tr>
		<td>{{ $row->id_customer }} </td>
		<td>{{ $row->name_customer }} </td>
		<td>{{ $row->address }}</td>
		<td>{{ $row->email }}</td>
		<td>{{ $row->telephone }}</td>
		<td>
			<a href="{{ url('/') }}/customer/{{ $row->id_customer }}">View</a>
			<a href="{{ url('/') }}/customer/{{ $row->id_customer }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
