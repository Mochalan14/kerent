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
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-9">
                                    <ul>
                                        <li>
                                            <span class="category mt-3">{{ $sewa->konfirmasi_id }}</span>
                                            <h4>{{ $sewa->mobil_id }}</h4>
                                        </li>
                                        <li>
                                            <span>Tanggal Sewa:</span>
                                            <h6>{{ $sewa->tanggal_sewa }}</h6>
                                            <span>Tanggal Kembali:</span>
                                            <h6>{{ $sewa->tanggal_kembali }}</h6>
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
                                    <a href="#"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <!-- <div class="col-lg-3">
                        <div class="image">
                          <img src="assets/images/event-02.jpg" alt="">
                        </div>
                      </div> -->
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category mt-3">Front End</span>
                                        <h4>New Design Trend</h4>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>24 Feb 2036</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>30 Hours</h6>
                                    </li>
                                    <li>
                                        <span>Price:</span>
                                        <h6>$320</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <!-- <div class="col-lg-3">
                        <div class="image">
                          <img src="assets/images/event-03.jpg" alt="">
                        </div>
                      </div> -->
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category mt-3">Full Stack</span>
                                        <h4>Web Programming</h4>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>12 Mar 2036</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>48 Hours</h6>
                                    </li>
                                    <li>
                                        <span>Price:</span>
                                        <h6>$440</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
