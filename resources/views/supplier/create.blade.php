<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<h1>Create New Supplier</h1>
<form action="{{ url('/') }}/supplier" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div class="line">
		<strong>Name : </strong>
		<input type="text" name="name_supplier" placeholder="name here..." >
	</div>
	<div class="line">
		<strong>ที่อยู่ : </strong>
		<input type="number" name="address" placeholder="address here..." >
	</div>
	<div class="line">
		<strong>email : </strong>
		<input type="text" name="email" placeholder="email here..." >
	</div>
	<div class="line">
		<strong>Telephone : </strong>
		<input type="number"  name="telephone" placeholder="telephone here..." >
	</div>
	<div class="line">
		<a href="{{ url('/') }}/supplier">back</a>
		<button type="submit">Create</button>
	</div>
</form>


