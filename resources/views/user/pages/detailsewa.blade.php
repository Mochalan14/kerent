@extends('user.layouts.app')

@section('judul', 'Detail Sewa')
@section('konten')
    <div class="section2 events" id="events">
        <div class="container">
            <div class="row">
                <a href="{{ route('sewaku') }}" class="main-button ml-3 mb-3">Kembali</a>
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Detail Sewa</h2>
                    </div>
                </div>
                @foreach ($detailsewa as $sewa)
                    @php
                        $tanggalsewa = date_create($sewa->tanggal_sewa);
                        $tanggalkembali = date_create($sewa->tanggal_kembali);
                        $interval = date_diff($tanggalsewa, $tanggalkembali);
                        $jumlahHari = $interval->format('%a');
                    @endphp
                    <div class="col-lg-12 col-md-6">
                        <div class="item" style="background-color: {{ $sewa->konfirmasi_id == 3 ? '#f2f8f1ee' : '' }} ">
                            <div class="row">
                                <div class="col-lg">
                                    <ul>
                                        <li>
                                            <span
                                                class="category mt-3 {{ $sewa->konfirmasi_id == 3 ? 'text-success' : '' }}">{{ $sewa->konfirmasis->konfirmasi }}</span>
                                            <h4>{{ $sewa->mobils->nama_mobil }}</h4>
                                        </li>
                                        <li>
                                            <span>Tanggal Sewa:</span>
                                            <h6>{{ $sewa->tanggal_sewa }}</h6>
                                            <span>Tanggal Kembali:</span>
                                            <h6>{{ $sewa->tanggal_kembali }}</h6>
                                        </li>
                                        <li>
                                            <span>Harga Sewa:</span>
                                            <h6>@currency($sewa->mobils->harga_sewa)</h6>
                                            <span>Jumlah (Hari):</span>
                                            <h6>{{ $jumlahHari }}</h6>
                                        </li>

                                        {{-- <li>
                                            <span>Tanggal Kembali:</span>
                                            <h6>{{ $sewa->tanggal_kembali }}</h6>
                                        </li> --}}
                                        {{-- <li>
                                        <span>Duration:</span>
                                        <h6>22 Hours</h6>
                                    </li> --}}
                                        <li>
                                            <span>Total Harga:</span>
                                            <h6>@currency($sewa->total_harga)</h6>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-4">
                                    <h3>Bukti Pembayaran</h3>

                                </div>
                                <div class="col-lg-8">
                                    <form class="row">
                                        <div class="col form-group">
                                            <label for="files">Upload File</label>
                                            <input type="file" class="form-control-file" id="files">
                                        </div>
                                        <div class="col form-group">
                                            <button class="main-button">Kirim</button>

                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
