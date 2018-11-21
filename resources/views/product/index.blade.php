@extends('theme.default')
@section('content')
<br>
<h1>ข้อมูลสินค้า</h1>
<div class="line">
	<a class="btn btn-primary" href="{{ url('/') }}/product/create"style="margin-bottom: 15px;">
เพิ่มข้อมูล
</a>
</div>
    <table class="table"  >
<tr class="active" >
		<th>#</th>
		<th>ชื่อสินค้า</th>
		<th>ยอดคงเหลือสินค้า</th>
		<th>action</th>
	</tr>
	@foreach($table_product as $row)
	<tr>
		<td>{{ $row->id_product }} </td>
		<td>{{ $row->product }} </td>
		<td>{{ $row->balance}}</td>
		<td>
			<a class="btn-success btn-sm" href="{{ url('/') }}/product/{{ $row->id_product }}">View</a>
			<a class="btn-success btn-sm" href="{{ url('/') }}/product/{{ $row->id_product }}/edit">Edit</a>
		</td>
	</tr>
	
	@endforeach
</table>
@endsection()