@extends('templates.master')
@section('content')
<h1>Create New Sell_orderdetail</h1>
<form action="{{ url('/') }}/purchase_order_detail" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}

	<div class="form-group" >
		<strong>รายละเอียด </strong>
		<input class="form-control" type="text" name="detail" >
	</div>
	<div class="line">
		<strong>จำนวน : </strong>
		<input class="form-control" type="text" name="quantity" >
	</div>
	<div class="form-group">
		<strong>ราคา : </strong>
		<input class="form-control" type="text" name="price">
	</div>
	<div class="form-group">
		<strong>จำนวนเงิน : </strong>
		<input class="form-control" type="text"  name="amount"  >
	</div>

	<div class="line">
		<a href="{{ url('/') }}/purchase_order_detail">back</a>
		<button type="submit">Create</button>
	</div>
</form>
@endsection()

