@extends('admin.main')

@section('container')

<h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex justify-content-end">
        <h4 class="m-0 font-weight-bold text-primary">List Pengguna</h4>
        <a href="{{ route('pengguna.create') }}" class="btn btn-primary ml-auto"><i class="fa fa-plus" aria-hidden="true"></i></i></a>  
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th class="col-1">Id</th>
						<th>Nama Lengkap</th>
						<th>Jenis Kelamin</th>
						<th>Username</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@if ($tbuser->count() > 0)
						@foreach ($tbuser as $user)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $user->namalengkap }}</td>
								<td>{{ $user->jeniskelamin }}</td>
								<td>{{ $user->username }}</td>
								<td>{{ $user->level }}</td>
								<td>
									<div role="group" aria-label="Contoh Biasa">
										<button type="button" class="btn btn-secondary"><i class="fa-solid fa-file"></i></button>
										<button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>
										<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
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