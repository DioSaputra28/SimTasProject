@extends('admin.main')

@section('container')
<h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex justify-content-end">
        <h4 class="m-0 font-weight-bold text-primary">Jadwal</h4> 
		<a href="{{ route('pengguna.index') }}" class="btn btn-danger ml-auto"><i class="fa-solid fa-arrow-left-long"></i></a>  
	</div>
	<div class="card-body">
		<form class="row g-3" action="{{ route('jadwal.store') }}" method="POST">
			@csrf
			<div class="col-md-6">
			  <label for="inputPassword4" class="form-label">Petugas</label>
			  <select class="form-control" aria-label="Default select example" name="iduser">
				<option disabled selected>>--Petugas--<</option>
                @foreach ($namaPetugas as $petugas)
                    <option value="{{ $petugas->id }}">{{ $petugas->namalengkap }}</option>
                @endforeach
			  </select>
			</div>
			<div class="col-md-4">
			  <label for="inputState" class="form-label">Ruangan</label>
			  <select class="form-control" aria-label="Default select example" name="blokruang">
				<option selected disabled>>--Ruangan--<</option>
				<option value="Administrator">Administrator</option>
				<option value="Kepala TU">Kepala TU</option>
				<option value="Karyawan">Karyawan</option>
			  </select>
			</div>
			<div class="col-12 mt-2">
			  <button type="submit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
			</div>
		  </form>
	</div>
</div>
@endsection