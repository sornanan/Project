@extends('theme.default')
@section('content')
<br>
<h1>รับสินค้าคืน</h1>
<div class="line">
	<a class="btn btn-primary" href="{{ url('/') }}/re_product/create"style="margin-bottom: 15px;">
เพิ่มข้อมูล 
</a>
</div>
    <table class="table table-bordered">
<tr>	
		<th>#</th>
		<th>วันที่</th>
		<th>รหัสลูกค้า</th>
		<th>ชื่อลูกค้า</th>
		<th>action</th>
	</tr>
	@foreach($table_re_product as $row)
	<tr>
		<td>{{ $row->id_return }} </td>
		<td>{{ $row->date }} </td>
		<td>{{ $row->id_customer }} </td>
		<td>{{ $row->name_customer}}</td>

		<td>
			<a class="btn-success btn-sm" href="{{ url('/') }}/re_product/{{ $row->id_return }}">View</a>
			<a class="btn-success btn-sm" href="{{ url('/') }}/re_product/{{ $row->id_return }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection()