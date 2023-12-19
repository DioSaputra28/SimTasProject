@extends('admin.main')

@section('container')
<div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Jabatan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        </tbody>
      <tfoot>
        <tr>
          <th colspan="4"></th>
          <th>
            <button type="button" class="btn btn-primary">Tambah Data</button>
          </th>
        </tr>
      </tfoot>
    </table>
@endsection