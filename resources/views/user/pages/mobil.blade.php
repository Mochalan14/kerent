@extends('user.layouts.app')

@section('judul', 'Daftar Mobil')
@section('konten')
    <div class="section2 events" id="events">
        <div class="container">
            <div class="row">
                <a href="{{ route('user.sewa') }}" class="main-button ml-3 mb-3">Sewa Sekarang</a>
                <div class="col-lg-12 text-center">
                    <div class="mb-4">
                        <h2>Daftar Mobil</h2>
                    </div>
                </div>
                <div class="row mx-3">
                    @foreach ($daftarmobil as $mobil)
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <img class="img-fluid" alt="100%x280"
                                    src="https://images.unsplash.com/photo-1502877338535-766e1452684a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $mobil->nama_mobil }}</h4>
                                    <p class="card-text">Harga Mobil ini @currency($mobil->harga_sewa) / hari</p>
                                    <span class="badge rounded-pill bg-dark text-white p-2 mt-2">
                                        {{ $mobil->statuses->status }}
                                    </span>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>



            </div>
        </div>
    </div>
@endsection
