@extends('theme.default')
@section('content')
<br>
<h1>รายการซื้อสินค้า</h1>
<div class="line">
	<a class="btn btn-primary" href="{{ url('/') }}/purchase_order/create"style="margin-bottom: 15px;">
เพิ่มข้อมูล
</a>
</div>
	<table class="table"  >
<tr class="active" >
		<th>#</th>
		<th>วันที่</th>
		<th>รหัสผู้จัดจำหน่าย</th>
		<th>ชื่อผู้จัดจำหน่าย</th>
		<th>รหัสพนักงาน</th>
		<th>ชื่อพนักงาน</th>
		<th>action</th>
	</tr>
	@foreach($table_purchase_order as $row)
	<tr>
		<td>{{ $row->id_order }} </td>
		<td>{{ $row->date }} </td>
		<td>{{ $row->id_supplier}}</td>
		<td>{{ $row->name_supplier }}</td>
		<td>{{ $row->id }}</td>
		<td>{{ $row->name }}</td>
		<td>
			<form class="inline" action="{{ url('/') }}/purchase_order/{{ $row->id_order }}" method="POST">	
			<a class="btn-success btn-sm"  href="{{ url('/') }}/purchase_order/{{ $row->id_order }}">View</a>
			<a class="btn-success btn-sm" href="{{ url('/') }}/purchase_order/{{ $row->id_order }}/edit">Edit</a>
				
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button class="btn btn-danger btn-sm pull-center " type="submit">Delete</button>
	</form>
		</td>
	</tr>
	@endforeach
</table>
@endsection()