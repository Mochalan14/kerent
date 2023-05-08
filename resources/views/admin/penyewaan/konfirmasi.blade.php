@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Form Konfirmasi
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.transaksi.proseskonfirmasi', $penyewaan->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="nama_mobil">Nama Mobil</label>
                            <input type="text" name="nama_mobil" class="form-control"
                                value="{{ old('nama_mobil', $penyewaan->mobils->nama_mobil) }}">
                        </div>
                        <div class="form-group">
                            <label for="nama_user">Nama User</label>
                            <input type="text" name="nama_user" class="form-control disabled"
                                value="{{ old('nama_user', $penyewaan->users->name) }}">
                        </div>
                        <div class="form-group">
                            <label for="total_harga">Total Harga</label>
                            <input type="text" name="total_harga" class="form-control"
                                value="{{ old('total_harga', $penyewaan->total_harga) }}">
                        </div>

                        <div class="form-group">
                            <label for="nama_user">Bukti Pembayaran</label>
                            <img src="{{ asset('storage/' . $penyewaan->bukti_pembayaran) }}" class="img-fluid"
                                alt="{{ $penyewaan->bukti_pembayaran }}">
                        </div>

                        <div class="form-group">
                            <label for="konfirmasi"></label>
                            <select name="konfirmasi_id" id="konfirmasi_id" class="form-control">
                                @foreach ($konfirmasi as $item)
                                    <option value="{{ $item->id }}">{{ $item->konfirmasi }}</option>
                                @endforeach

                            </select>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
@endsection
