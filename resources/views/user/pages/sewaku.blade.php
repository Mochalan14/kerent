@extends('user.layouts.app')

@section('judul', 'Sewaku')
@section('konten')
    <div class="section2 events" id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Sewaku</h6>
                        <h2>Daftar Penyewaanku</h2>
                    </div>
                </div>
                @foreach ($daftarsewa as $sewa)
                    <div class="col-lg-12 col-md-6">
                        <div class="item"
                            style="background-color: {{ $sewa->konfirmasi_id == 3 || $sewa->konfirmasi_id == 4 ? '#f2f8f1ee' : '' }} ">
                            <div class="row">
                                <div class="col-lg-9">
                                    <ul>
                                        <li>
                                            <span
                                                class="category mt-3 {{ $sewa->konfirmasi_id == 3 || $sewa->konfirmasi_id == 4 ? 'text-success' : '' }}">{{ $sewa->konfirmasis->konfirmasi }}</span>
                                            <h4>{{ $sewa->mobils->nama_mobil }}</h4>
                                        </li>
                                        <li>
                                            <span>Tanggal Sewa:</span>
                                            <h6>{{ $sewa->tanggal_sewa }}</h6>
                                            <span>Tanggal Kembali:</span>
                                            <h6>{{ $sewa->tanggal_kembali }}</h6>
                                        </li>

                                        @php
                                            $tanggalsewa = date_create($sewa->tanggal_sewa);
                                            $tanggalkembali = date_create($sewa->tanggal_kembali);
                                            
                                            $tanggalsekarang = date_create(date('Y/m/d'));
                                            $interval = date_diff($tanggalkembali, $tanggalsekarang);
                                            $jumlahHari = $interval->format('%a');
                                        @endphp

                                        <li>
                                            <span>Sisa Sewa:</span>
                                            @if ($tanggalsekarang <= $tanggalkembali && $tanggalsekarang >= $tanggalsewa)
                                                <h6>{{ $jumlahHari }} Hari</h6>
                                            @elseif ($tanggalsekarang > $tanggalkembali)
                                                <h6>Sudah Selesai</h6>
                                            @else
                                                <h6>Belum dimulai</h6>
                                            @endif
                                            <span>Total Harga:</span>
                                            <h6>@currency($sewa->total_harga)</h6>
                                        </li>
                                    </ul>

                                    <a href="{{ route('sewa.detail', $sewa->id) }}"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
