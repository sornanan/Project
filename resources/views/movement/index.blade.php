@extends('theme.default')
@section('content')
<br>
<h1>ข้อมูลการซื้อ-ขาย</h1>
<div class="line">
	<a class="btn btn-primary" href="{{ url('/') }}/movement/create"style="margin-bottom: 15px;">
เพิ่มข้อมูล
</a>
   <table class="table table-bordered">
<tr >
		<th>#</th>
		<th>รหัสสินค้า</th>
		<th>ชื่อสินค้า</th>
		<th>วันที่</th>
		<th>จำนวนสินค้า</th>
		<th>ยอดคงเหลือสินค้า</th>
		<th>Action</th>
	</tr>
	@foreach($table_movement as $row)
	<tr>
		<td >{{ $row->id_move }} </td>
		<td>{{ $row->id_product }} </td>
		<td>{{ $row->product}}</td>
		<td>{{ $row->date }}</td>
		<td>{{ $row->amount_m }}</td>
		<td>{{ $row->balance }}</td>

		<td>
			<form class="inline" action="{{ url('/') }}/movement/{{ $row->id_move }}" method="POST">
			<a class="btn-success btn-sm" href="{{ url('/') }}/movement/{{ $row->id_move }}/edit">Edit</a>

		<button class="btn btn-danger btn-sm pull-center " type="submit">Delete</button>
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		
	</form>
		</td>
	</tr>
	@endforeach
</table>
<a class="btn btn-primary btn-block" href="{{ url('/') }}/product">back</a>
@endsection()