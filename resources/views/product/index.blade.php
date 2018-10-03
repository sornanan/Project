@extends('templates.master')

@section('content')
<h1>Product</h1>
<div class="line">
	<a class="btn btn-primary" href="{{ url('/') }}/product/create"style="margin-bottom: 15px;">
New Product
</a>
</div>
    <table class="table table-bordered">
<tr>
		<th style="padding-left: 15px;">รหัสสินค้า</th>
		<th>ชื่อสินค้า</th>
		<th >action</th>
	</tr>
	@foreach($table_product as $row)
	<tr>
		<td>{{ $row->id_product }} </td>
		<td>{{ $row->product }} </td>
		<td>
			<a class="btn-success btn-sm" href="{{ url('/') }}/product/{{ $row->id_product }}">View</a>
			<a class="btn-success btn-sm" href="{{ url('/') }}/product/{{ $row->id_product }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection()