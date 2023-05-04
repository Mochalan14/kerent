@extends('user.layouts.app')

@section('judul', 'Sewa Mobil')

@section('konten')
    <div class="section2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="/prosesSewa" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="mobil" class="col">Nama Mobil</label>
                            <select class="form-select col" aria-label="Default select example" id="mobil"
                                name="id_mobil">
                                <option selected>Pilih Mobil</option>
                                @foreach ($mobil as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_mobil }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Tanggal Sewa</label>
                            <input class="text-center" id="datepicker_sewa" name="tanggal_sewa" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Tanggal Kembali</label>
                            <input class="text-center" id="datepicker_kembali" name="tanggal_kembali" />
                        </div>

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">


                        <button type="submit" class="main-button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
