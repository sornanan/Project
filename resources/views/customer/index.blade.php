@extends('theme.default')
@section('content')
<br>
<h1>ข้อมูลลูกค้า</h1>
<div class="line">
	<a class="btn btn-primary btn-block" href="{{ url('/') }}/customer/create"style="margin-bottom: 15px;">
เพิ่มข้อมูล</a>
</div>
<table class="table"  >
<tr class="active" >
 
	  	
		<th>#</th>
		<th>ชื่อลูกค้า</th>
		<th>ที่อยู่</th>
		<th>Email</th>
		<th>เบอร์โทรศัพท์</th>
		<th >Action</th>
	</tr>
	
	@foreach($table_customer as $row)
	<tr>
		<td >{{ $row->id_customer }} </td>
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