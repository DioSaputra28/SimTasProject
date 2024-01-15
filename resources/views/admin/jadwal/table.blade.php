@extends('admin.main')

@section('container')

<h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex justify-content-end">
        <h4 class="m-0 font-weight-bold text-primary">List Tugas</h4>
        <a href="{{ route('jadwal.create') }}" class="btn btn-primary ml-auto"><i class="fa fa-plus" aria-hidden="true"></i></i></a>  
	</div>
	<div class="card-body">
		<div class="table-responsive">
			@if (Session::has('sukses'))
				<div class="alert alert-success" role="alert">
				{{ Session::get('sukses') }}
			</div>
			@endif
			
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th class="col-1">Id </th>
						<th>Petugas</th>
						<th>Blok Ruang</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@if ($tbjadwal->count() > 0)
						@foreach ($petugas as $jadwal)
							
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $jadwal->tbuser->id }}</td>
							<td>{{ $jadwal->blokruang }}</td>
							<td>
								<div role="group" aria-label="Contoh Biasa" class="d-flex">
									<a href="{{ route('pengguna.show', ['pengguna' => $jadwal->tbuser->id]) }}" class="btn btn-secondary m-1"><i class="fa-solid fa-file"></i></a>
									<a href="{{ route('pengguna.edit', ['pengguna' => $jadwal->tbuser->id]) }}" class="btn btn-warning m-1"><i class="fa fa-pencil" aria-hidden="true"></i></a>
									<form action="{{ route('pengguna.destroy', ['pengguna' => $jadwal->tbuser->id]) }}" method="POST" onsubmit="return confirm('Yakin ingin Hapus?')">
										@csrf
										@method('DELETE')
										<button class="btn btn-danger m-1" ><i class="fa fa-trash" aria-hidden="true"></i></button>
									</form>
								</div>
							</td>
						</tr>
						@endforeach
					
					@endif
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection