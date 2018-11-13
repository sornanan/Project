@extends('theme.default')
@section('content')
<br>
<h1>ข้อมูลการซื้อ-ขาย</h1>
<div class="line">
	<a class="btn btn-primary" href="{{ url('/') }}/movement/create"style="margin-bottom: 15px;">
เพิ่มข้อมูล
</a>
 <table class="table table-bordered">

<tr>
		<th style="padding-left: 15px;">#</th>
		<th>รหัสสินค้า</th>
		<th>ชื่อสินค้า</th>
		<th>วันที่</th>
		<th>สินค้าเข้า</th>
		<th>สินค้าออก</th>
		<th>ยอดคงเหลือสินค้า</th>
		<th width="120px;">Action</th>
	</tr>
	@foreach($table_movement as $row)
	<tr>
		<td style ="padding-left: 40px;">{{ $row->id_move }} </td>
		<td>{{ $row->id_product }} </td>
		<td>{{ $row->product}}</td>
		<td>{{ $row->date }}</td>
		<td>{{ $row->inproduct }}</td>
		<td>{{ $row->outproduct }}</td>
		<td>{{ $row->balance }}</td>

		<td>
			<a class="btn-success btn-sm" href="{{ url('/') }}/movement/{{ $row->id_move }}">View</a>
			<a class="btn-success btn-sm" href="{{ url('/') }}/movement/{{ $row->id_move }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection()