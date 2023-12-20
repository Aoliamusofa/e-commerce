@extends('layout.template')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $title ?? '' }}</h4>
                <button type="button" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
                    Tambah data
                </button>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama pelanggan</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->jk }}</td>
                                <td>{{ $row->tlp }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->role }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                        data-bs-target="#modalEdit{{ $row->user_id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalHapus{{ $row->user_id }}">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
