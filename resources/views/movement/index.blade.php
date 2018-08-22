<h1>movement List</h1>
<div class="line">
	<a href="{{ url('/') }}/movement/create">
New movement
</a>
</div>
<table border=1>
<tr>
		<th>id_move</th>
		<th>id_product</th>
		<th>date</th>
		<th>inproduct</th>
		<th>outproduct</th>
		<th>receive</th>
		<th>send</th>
		<th>balance</th>
	</tr>
	@foreach($table_movement as $row)
	<tr>
		<td>{{ $row->id_move }} </td>
		<td>{{ $row->id_product }} </td>
		<td>{{ $row->date }}</td>
		<td>{{ $row->inproduct }}</td>
		<td>{{ $row->outproduct }}</td>
		<td>{{ $row->receive }}</td>
		<td>{{ $row->send }}</td>
		<td>{{ $row->balance }}</td>

		<td>
			<a href="{{ url('/') }}/movement/{{ $row->id_move }}">View</a>
			<a href="{{ url('/') }}/movement/{{ $row->id_move }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
