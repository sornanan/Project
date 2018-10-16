@extends('theme.default')
@section('content')
<h1>Purchase_orderdetail List</h1>
<div class="line">
	<a class="btn btn-primary" href="{{ url('/') }}/purchase_order_detail/create"style="margin-bottom: 15px;">
New Purchase_orderdetail
</a>
</div>
    <table class="table table-bordered">
<tr>
		<th>รหัส</th>
		<th>รายละเอียด</th>
		<th>จำนวน</th>
		<th>ราคา</th>
		<th>จำนวนเงิน</th>
		<th>รหัสสินค้า</th>
		<th>รหัสซื้อสินค้า</th>
		<th>action</th>
	</tr>
	@foreach($table_purchase_order_detail as $row)
	<tr>
		<td>{{ $row->id_orderdetail }} </td>
		<td>{{ $row->detail }} </td>
		<td>{{ $row->quantity }}</td>
		<td>{{ $row->price }}</td>
		<td>{{ $row->amount }}</td>
		<td>{{ $row->id_product }}</td>
		<td>{{ $row->id_order }}</td>


		<td>
			<a class="btn-success btn-sm" href="{{ url('/') }}/purchase_order_detail/{{ $row->id_orderdetail }}">View</a>
			<a class="btn-success btn-sm" href="{{ url('/') }}/purchase_order_detail/{{ $row->id_orderdetail }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection()