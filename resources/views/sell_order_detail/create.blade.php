@extends('theme.default')
@section('content')
<h1>เพิ่มข้อมูล</h1>
<form action="{{ url('/') }}/sell_order_detail" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}


	<div class="form-group">
		<strong>รหัสการขาย: </strong>
		<select class="form-control" name="id_sell" id="id_sell" >
			@foreach($table_sell as $row_sell)
			<option value="{{ $row_sell->id_sell}}">
				 {{ $row_sell->id_sell}}
			</option>
			@endforeach
		</select>
		<script>
			document.getElementById("id_sell").value = "{{ $id_sell }}";
		</script>
	</div>
	<div class="form-group">
		<strong>ชื่อสินค้า : </strong>
		<select class="form-control" name="id_product" id="id_product" 
			onchange="setPrice(this.options[this.selectedIndex].getAttribute('price'));" >
			@foreach($table_product2 as $row_product)
			<option value="{{ $row_product->id_product}}" price="{{ 100 }}" >
				 {{ $row_product->product}}
			</option>
			@endforeach
		</select>
		<script>
			function setPrice(price){
				document.getElementById("price").value = price;
			}
		</script>
	</div>
	<div class="line">
		<strong>จำนวน : </strong>
		<input class="form-control" type="text" name="quantity" >
	</div>
	<div class="form-group">
		<strong>ราคา : </strong>
		<input class="form-control" type="text" name="price" id="price">
	</div>
	

	<div class="line">
		<a class="btn btn-primary pull-right " href="{{ url('/') }}/sell_order">back</a>
		<button class="btn btn-success"  type="submit">Create</button>
	</div>
</form>
@endsection

