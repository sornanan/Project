@extends('theme.default')
@section('content')
<br>
<h1>ข้อผู้จัดจำหน่าย</h1>
<div class="line">
	<a class="btn btn-primary"  href="{{ url('/') }}/supplier/create"style="margin-bottom: 15px;">
		
เพิ่มข้อมูล
</a>
</div>
<br>
<table class="table"  >
<tr class="active" >
		<th>#</th>
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
			<a class="btn-success btn-sm"  href="{{ url('/') }}/supplier/{{ $row->id_supplier }}">View</a>
			<a class="btn-success btn-sm"  href="{{ url('/') }}/supplier/{{ $row->id_supplier }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection()