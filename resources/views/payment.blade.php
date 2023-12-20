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
                            <th>Total pembayaran</th>
                            <th>Waktu pembayaran</th>
                            <th>Metode pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $row->total_pembayaran }}</td>
                                <td>{{ $row->waktu_pembayaran }}</td>
                                <td>{{ $row->metode_pembayaran }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                        data-bs-target="#modalEdit{{ $row->id_pembayaran }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalHapus{{ $row->id_pembayaran }}">
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
