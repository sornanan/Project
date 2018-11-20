
<h1>รายละเอียดการขาย </h1>
<div class="line">
	<a class="btn btn-primary" href="{{ url('/') }}/sell_order_detail/create"style="margin-bottom: 15px;">
เพิ่มข้อมูล
</a>
</div> 

<table class="table table-bordered">
<tr>
		<th style="padding-left: 15px;">#</th>
		<th>รหัสการขาย</th>
		<th>รหัสสินค้า</th>
		<th>จำนวน</th>
		<th>ราคา</th>
		<th>จำนวนเงิน</th>
		<th>action</th>
	</tr>
	@foreach($table_sell_order_detail as $row)
	<tr>
		<td>{{ $row->id_selldetail }} </td>
		<td>{{ $row->id_sell }}</td>
		<td>{{ $row->id_product }} </td>
		<td>{{ $row->quantity }}</td>
		<td>{{ $row->price }}</td>
		<td>{{ $row->amount }}</td>
		

		
		<td>
			<a class="btn-success btn-sm" href="{{ url('/') }}/sell_order_detail/{{ $row->id_selldetail }}">View</a>
			<a class="btn-success btn-sm" href="{{ url('/') }}/sell_order_detail/{{ $row->id_selldetail }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>