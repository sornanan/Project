<h1>รายละเอียดการซื้อสินค้า</h1>
<div class="line">
	<a class="btn btn-primary" href="{{ url('/') }}/purchase_order_detail/create"style="margin-bottom: 15px;">
เพิ่มข้อมูล
</a>
</div>
    <table class="table table-bordered">
<tr>
		<th>#</th>	
		<th>รหัสซื้อสินค้า</th>
		<th>รายละเอียด</th>
		<th>จำนวน</th>
		<th>ราคา</th>
		<th>จำนวนเงิน</th>
		<th>รหัสสินค้า</th>
	
		<th>action</th>
	</tr>
	@foreach($table_purchase_order_detail as $row)
	<tr>
		<td>{{ $row->id_orderdetail }} </td>
		<td>{{ $row->id_order }}</td>
		<td>{{ $row->detail }} </td>
		<td>{{ $row->quantity }}</td>
		<td>{{ $row->price }}</td>
		<td>{{ $row->amount }}</td>
		<td>{{ $row->id_product }}</td>
		


		<td>
			<form class="inline" action="{{ url('/') }}/purchase_order_detail/{{ $row->id_orderdetail }}" method="POST">
			<a class="btn-success btn-sm" href="{{ url('/') }}/purchase_order_detail/{{ $row->id_orderdetail }}/edit">Edit</a>
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button class = "btn btn-danger btn-sm pull-center"type="submit">Delete</button>
		</td>
	</tr>
	
	@endforeach

</table>
