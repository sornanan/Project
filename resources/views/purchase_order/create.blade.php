<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<h1>Create New Purchase_order</h1>
<form action="{{ url('/') }}/purchase_order" method="POST">
{{ csrf_field() }}
	{{ method_field('POST') }}

	
	
		<div class="line">
		<strong>วันที่ : </strong>
		<input type="date" name="date" placeholder="address here..." >
	</div>
	<div class="line">
		<strong>Price : </strong>
		<input type="text" name="price" placeholder="name here..." >
	</div>
	

	<div class="line">
		<strong>ชื่อลูกค้า: </strong>
		<select name="id">
			@foreach($table_supplier2 as $row_users)
			<option value="{{ $row_users->id}}">
				 {{ $row_users->name}}
			</option>
			@endforeach
		</select>
	</div>
		
	<div class="line">
		<a href="{{ url('/') }}/purchase_order">back</a>
		<button type="submit">Create</button>
	</div>
</form>


