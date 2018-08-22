<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<h1>Create New Customer</h1>
<form action="{{ url('/') }}/movement" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div class="line">
		<strong>สินค้าเข้า : </strong>
		<input type="number" name="inproduct" placeholder="name here..." >
	</div>
	<div class="line">
		<strong>สินค้าออก : </strong>
		<input type="number" name="outproduct" placeholder="address here..." >
	</div>
	<div class="line">
		<strong>สินค้าค้างรับ : </strong>
		<input type="number" name="receive" placeholder="email here..." >
	</div>
	<div class="line">
		<strong>สินค้าค้างส่ง : </strong>
		<input type="number"  name="send" placeholder="telephone here..." >
	</div>
	<div class="line">
		<a href="{{ url('/') }}/movement">back</a>
		<button type="submit">Create</button>
	</div>
</form>


