@extends('theme.default')
@section('content')
<h1>ขายสินค้า List</h1>
<div class="line">
	<a class="btn btn-primary" href="{{ url('/') }}/sell_order/create"style="margin-bottom: 15px;">
New ขายสินค้า
</a>
</div>
<table class="table table-bordered">
<tr>
		<th>รหัสขาย</th>
		<th>วันที่ขายสินค้า</th>
		<th>วันที่เสนอราคา</th>
		<th>รหัสลูกค้า</th>
		<th>ชื่อลูกค้า</th>
		<th>รหัสพนักงาน</th>
		<th>ชื่อพนักงาน</th>
		<th>action</th>
	</tr>
	@foreach($table_sell_order as $row)
	<tr>
		<td>{{ $row->id_sell }} </td>
		<td>{{ $row->date }} </td>
		<td>{{ $row->date_quatation }}</td>
		<td>{{ $row->id_customer}}</td>
		<td>{{ $row->name_customer}}</td>
		<td>{{ $row->id}}</td>
		<td>{{ $row->name}}</td>
		<td>
			<a class="btn-success btn-sm" href="{{ url('/') }}/sell_order/{{ $row->id_sell }}">View</a>
			<a class="btn-success btn-sm" href="{{ url('/') }}/sell_order/{{ $row->id_sell }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection