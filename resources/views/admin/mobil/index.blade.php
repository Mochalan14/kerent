@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>{{ $title }}</h3>
            <a href="{{ route('admin.mobil.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mobil</th>
                            <th>Harga Sewa</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mobils as $mobil)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mobil->nama_mobil }}</td>
                                <td>{{ $mobil->harga_sewa }}</td>
                                <td>{{ $mobil->statuses->status }}</td>
                                <td>
                                    <a href="{{ route('admin.mobil.edit', $mobil->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form onclick="return confirm('anda yakin data dihapus?');" class="d-inline" action ="{{ route('admin.mobil.destroy', $mobil->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
