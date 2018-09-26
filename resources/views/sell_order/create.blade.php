<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<h1>Create New Customer</h1>
<form action="{{ url('/') }}/sell_order" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div class="line">
		<strong>วันที่ขาย : </strong>
		<input type="date" name="date" placeholder="name here..." >
	</div>
	<div class="line">
		<strong>ราคา : </strong>
		<input type="number" name="price" placeholder="address here..." >
	</div>
	<div class="line">
		<strong>วันที่รับสินค้าคืน : </strong>
		<input type="date" name="date_sent" placeholder="email here..." >
	</div>
	<div class="line">
		<strong>วันที่เสนอราคา : </strong>
		<input type="date"  name="date_quatation" placeholder="telephone here..." >
	</div>
	<div class="line">
		<a href="{{ url('/') }}/sell_order">back</a>
		<button type="submit">Create</button>
	</div>
</form>


