@extends('master')

@section('title', $title)

@section('konten')
{{-- button add new student --}}
<a href="{{ url('student') }}" class="btn btn-success mb-2">back to index</a>
{{-- end button add new student --}}
{{-- menampilkan error validasi --}}
@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
{{-- form add students --}}
<form action="{{ url('student') }}" method="POST">
	<div class="form-group">
		<label for="nis">Nis</label>
		<input type="text" class="form-control" id="nis" name="nis">
	</div>
	<div class="form-group">
		<label for="nama">nama</label>
		<input type="text" class="form-control" id="nama" name="nama">
	</div>
	<div class="form-group">
		<label for="kelas">kelas</label>
		<input type="text" class="form-control" id="kelas" name="kelas">
	</div>
	<div class="form-group">
		<label for="alamat">Alamat</label>
		<textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
	</div>
	<div class="form-group">
		<label for="no_telepon">No Telepon</label>
		<input type="text" class="form-control" id="no_telepon" name="no_telepon">
	</div>
	@csrf

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
{{-- end form add students --}}
@endsection