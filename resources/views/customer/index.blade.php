@extends('theme.default')
@section('content')

<h1>Customer List</h1>
<div class="line">
	<a class="btn btn-primary" href="{{ url('/') }}/customer/create"style="margin-bottom: 15px;">
New Customer</a>
</div>
    <table class="table table-bordered">
    	
<tr>
	  	
		<th style="padding-left: 15px;">รหัสลูกค้า</th>
		<th>ชื่อลูกค้า</th>
		<th>ที่อยู่</th>
		<th>email</th>
		<th>เบอร์โทรศัพท์</th>
		<th width="120px;">Action</th>
	</tr>
	
	@foreach($table_customer as $row)
	<tr>
		 <td style ="padding-left: 40px;">{{ $row->id_customer }} </td>
		<td>{{ $row->name_customer }} </td>
		<td>{{ $row->address }}</td>
		<td>{{ $row->email }}</td>
		<td>{{ $row->telephone }}</td>
		<td>
			
			<a class="btn-success btn-sm"  href="{{ url('/') }}/customer/{{ $row->id_customer }}/edit">Edit</a>
			<a class="btn-success btn-sm"  href="{{ url('/') }}/customer/{{ $row->id_customer }}">View</a>
		
		
	</form>

		</td>
	</tr>
	@endforeach
	
</table>

@endsection