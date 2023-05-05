@extends('layouts.admin')

@section('content')
        <div class="card">
            <div class="card-header">
                Form Tambah Data
            </div>
            <div class="card-body">
                <form action="{{ route('admin.mobil.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_mobil">Nama Mobil</label>
                        <input type="text" name="nama_mobil" class="form-control" value="{{ old('nama_mobil') }}">
                    </div>
                    <div class="form-group">
                        <label for="harga_sewa">Harga Sewa</label>
                        <input type="text" name="harga_sewa" class="form-control" value="{{ old('harga_sewa') }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status_id" id="status_id" class="form-control">
                            <option value="1">Tersedia</option>
                            <option value="2">Sedang Disewa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
@endsection