@extends('master')

@section('title', $title)

@section('konten')
{{-- button add new student --}}
	<a href="{{ url('student/create') }}" class="btn btn-success mb-2">Add new student</a>
{{-- end button add new student --}}
{{-- table students --}}
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nis</th>
			<th scope="col">Nama</th>
			<th scope="col">Kelas</th>
			<th scope="col">Alamat</th>
			<th scope="col">No Telepon</th>
			<th scope="col">Aksi</th>
		</tr>
	</thead>
	<tbody>
		@php
		$no = 1;
		@endphp
		@foreach($students as $s)
		<tr>
			<th scope="row">{{ $no++ }}</th>
			<td>{{ $s->nis }}</td>
			<td>{{ $s->nama }}</td>
			<td>{{ $s->kelas }}</td>
			<td>{{ $s->alamat }}</td>
			<td>{{ $s->no_telepon }}</td>
			<td>
				{{-- form delete student --}}
				<form action="{{ url('student/'.$s->id) }}" method="POST">
				{{-- edit button --}}
				<a href="" class="btn btn-info text-white">Edit</a>
				{{-- end edit button --}}
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
				{{-- end form delete student --}}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{-- end table students --}}
@endsection