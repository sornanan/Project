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
		<strong>ที่อยู่ : </strong>
		<input type="number" name="address" placeholder="address here..." >
	</div>

	<div class="line">
		<a href="{{ url('/') }}/purchase_order">back</a>
		<button type="submit">Create</button>
	</div>
</form>


