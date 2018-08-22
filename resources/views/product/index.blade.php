<h1>Product</h1>
<div class="line">
	<a href="{{ url('/') }}/product/create">
New Product
</a>
</div>
<table border=1>
<tr>
		<th>รหัสสินค้า</th>
		<th>ชื่อสินค้า</th>
		<th>action</th>
	</tr>
	@foreach($table_product as $row)
	<tr>
		<td>{{ $row->id_product }} </td>
		<td>{{ $row->product }} </td>
		<td>
			<a href="{{ url('/') }}/product/{{ $row->id_product }}">View</a>
			<a href="{{ url('/') }}/product/{{ $row->id_product }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
