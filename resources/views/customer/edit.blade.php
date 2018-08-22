<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@forelse($table_customer as $row)
<h1>Edit Customer : {{ $row->id_customer }}</h1>
	<form action="{{ url('/') }}/customer/{{ $row->id_customer }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="line">
			<strong>ชื่อ-นามสกุล : </strong>
			<input type="text" name="name_customer" value="{{ $row->name_customer }}" >
		</div>
		<div class="line">
			<strong>ที่อยู่ : </strong>
			<input type="text" name="address" value="{{ $row->address }}"  >
		</div>
		<div class="line">
			<strong>email : </strong>
			<input type="text" name="email" value="{{ $row->email }}"  >
		</div>
		<div class="line">
			<strong>เบอร์โทรศัพท์ : </strong>
			<input type="number" name="telephone" value="{{ $row->telephone }}"  >
		</div>
		<div class="line">
			<a href="{{ url('/') }}/customer">back</a>
			<button type="submit">Update</button>
		</div>
	</form>
@empty	
	<div>This Customer id does not exist</div>
@endforelse

