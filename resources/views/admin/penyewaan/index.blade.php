@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>{{ $title }}</h3>
            <a href="{{ route('admin.mobil.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <h3>Perlu Konfirmasi</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mobil</th>
                            <th>Nama User</th>
                            <th>Total Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($perlukonfirmasi as $penyewaan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $penyewaan->mobils->nama_mobil }}</td>
                                <td>{{ $penyewaan->users->name }}</td>
                                <td>@currency($penyewaan->total_harga)</td>
                                <td>
                                    <a href="{{ route('admin.transaksi.konfirmasi', $penyewaan->id) }}"
                                        class="btn btn-sm btn-success">Konfirmasi</a>
                                    <form onclick="return confirm('anda yakin data dihapus?');" class="d-inline"
                                        action="{{ route('admin.transaksi.destroy', $penyewaan->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada yang perlu dikonfirmasi</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-body">
            <h3>Sudah Konfirmasi</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mobil</th>
                            <th>Nama User</th>
                            <th>Total Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sudahkonfirmasi as $penyewaan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $penyewaan->mobils->nama_mobil }}</td>
                                <td>{{ $penyewaan->users->name }}</td>
                                <td>@currency($penyewaan->total_harga)</td>
                                <td>
                                    {{-- <a href="{{ route('admin.mobil.edit', $mobil->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a> --}}
                                    <form onclick="return confirm('anda yakin data dihapus?');" class="d-inline"
                                        action="{{ route('admin.transaksi.destroy', $penyewaan->id) }}" method="post">
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
