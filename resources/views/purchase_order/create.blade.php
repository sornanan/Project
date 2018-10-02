<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<h1>Create New Purchase_order</h1>
<form action="{{ url('/') }}/purchase_order" method="POST">
{{ csrf_field() }}
	{{ method_field('POST') }}

	
	
		
	<div class="line">
		<strong>Price : </strong>
		<input type="text" name="price" placeholder="name here..." >
	</div>
	

	<div class="line">
		<strong>ปู้จัดจำหน่าย: </strong>
		<select name="id">
			@foreach($table_sup as $row_sup)
			<option value="{{ $row_sup->id_supplier}}">
				 {{ $row_sup->name_supplier}}
			</option>
			@endforeach
		</select>
	</div>
	<div class="line">
		<strong>พนักงาน: </strong>
		<select name="id">
			@foreach($table_user as $row_user)
			<option value="{{ $row_user->id}}">
				 {{ $row_user->name}}
			</option>
			@endforeach
		</select>
	</div>
	
	
	<div class="line">
		<a href="{{ url('/') }}/purchase_order">back</a>
		<button type="submit">Create</button>
	</div>
</form>


