<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@forelse($table_movement as $row)
<h1>Edit Customer : {{ $row->id_move }}</h1>
	<form action="{{ url('/') }}/movement/{{ $row->id_move }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="line">
			<strong>ชื่อ-นามสกุล : </strong>
			<input type="text" name="name_customer" value="{{ $row->inproduct }}" >
		</div>
		<div class="line">
			<strong>ที่อยู่ : </strong>
			<input type="text" name="address" value="{{ $row->outproduct }}"  >
		</div>
		<div class="line">
			<strong>email : </strong>
			<input type="text" name="email" value="{{ $row->receive }}"  >
		</div>
		<div class="line">
			<strong>เบอร์โทรศัพท์ : </strong>
			<input type="number" name="telephone" value="{{ $row->send }}"  >
		</div>
		<div class="line">
			<a href="{{ url('/') }}/movement">back</a>
			<button type="submit">Update</button>
		</div>
	</form>
@empty	
	<div>This Customer id does not exist</div>
@endforelse

