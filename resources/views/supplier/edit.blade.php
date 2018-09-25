<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@forelse($table_supplier as $row)
<h1>Edit Customer : {{ $row->id_supplier }}</h1>
	<form action="{{ url('/') }}/supplier/{{ $row->id_supplier }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="line">
			<strong>ชื่อ-นามสกุล : </strong>
			<input type="text" name="name" value="{{ $row->name_supplier }}" >
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
			<a href="{{ url('/') }}/supplier">back</a>
			<button type="submit">Update</button>
		</div>
	</form>
@empty	
	<div>This Customer id does not exist</div>
@endforelse

