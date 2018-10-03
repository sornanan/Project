@extends('templates.master')

@section('content')
<h1>Supplier List</h1>
<div class="line">
	<a class="btn btn-primary"  href="{{ url('/') }}/supplier/create"style="margin-bottom: 15px;">
		
เพิ่มผู้จัดจำหน่าย
</a>
</div>
<br>
<table class="table table-bordered">
<tr>
		<th style="padding-left: 15px;">รหัส</th>
		<th>ชื่อ</th>
		<th>ที่อยู่</th>
		<th>email</th>
		<th>เบอร์โทรศัพท์</th>
		<th width="120px;">action</th>
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