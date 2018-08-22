<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<h1>Create New Product</h1>
<form action="{{ url('/') }}/product" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}	
	<div class="line">
		<strong>product : </strong>
		<input type="text" name="product" placeholder="address here..." >
	</div>
	<div class="line">
		<a href="{{ url('/') }}/product">back</a>
		<button type="submit">Create</button>
	</div>
</form>


