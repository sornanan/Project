<h1>ผู้จัดจำหน่าย List</h1>
<div class="line">
	<a href="{{ url('/') }}/supplier/create">
		
เพิ่มผู้จัดจำหน่าย
</a>
</div>
<br>
<table border=1>
<tr>
		<th>รหัส</th>
		<th>ชื่อ</th>
		<th>ที่อยู่</th>
		<th>email</th>
		<th>เบอร์โทรศัพท์</th>
		<th>action</th>
	</tr>
	@foreach($table_supplier as $row)
	<tr>
		<td>{{ $row->id_supplier }} </td>
		<td>{{ $row->name_supplier }} </td>
		<td>{{ $row->address }}</td>
		<td>{{ $row->email }}</td>
		<td>{{ $row->telephone }}</td>
		<td>
			<a href="{{ url('/') }}/supplier/{{ $row->id_supplier }}">View</a>
			<a href="{{ url('/') }}/supplier/{{ $row->id_supplier }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
