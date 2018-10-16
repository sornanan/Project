@extends('theme.default')
@section('content')
<h1>Re_product List</h1>
<div class="line">
	<a class="btn btn-primary" href="{{ url('/') }}/re_product/create"style="margin-bottom: 15px;">
New 
</a>
</div>
    <table class="table table-bordered">
<tr>	<th>รหัสคืนสินค้า</th>
		<th>วันที่</th>
		<th>รหัสลูกค้า</th>
		<th>action</th>
	</tr>
	@foreach($table_re_product as $row)
	<tr>
		<td>{{ $row->id_return }} </td>
		<td>{{ $row->date }} </td>
		<td>{{ $row->id_customer }} </td>

		<td>
			<a class="btn-success btn-sm" href="{{ url('/') }}/re_product/{{ $row->id_return }}">View</a>
			<a class="btn-success btn-sm" href="{{ url('/') }}/re_product/{{ $row->id_return }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection()