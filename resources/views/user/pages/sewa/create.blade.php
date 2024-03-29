@extends('user.layouts.app')

@section('judul', 'Sewa Mobil')

@section('konten')
    <div class="section2">
        <div class="container">
            <div class="row">
                @if ($jumlahTersedia == 0)
                    <h3>Maaf, tidak ada mobil yang bisa disewa</h3>
                @else
                    <div class="col-lg-12">
                        <form action="/prosesSewa" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="mobil" class="col">Nama Mobil</label>
                                <select class="form-select col" aria-label="Default select example" id="mobil"
                                    name="id_mobil">
                                    @foreach ($mobil as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_mobil }}</option>
                                    @endforeach
                                </select>
                                @error('id_mobil')
                                    <span class="me-2 text-danger fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Tanggal Sewa</label>
                                <input class="text-center" id="datepicker_sewa" name="tanggal_sewa" />
                                @error('tanggal_sewa')
                                    <span class="me-2 text-danger fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Tanggal Kembali</label>
                                <input class="text-center" id="datepicker_kembali" name="tanggal_kembali" />
                                @error('tanggal_kembali')
                                    <span class="me-2 text-danger fw-bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">


                            <button type="submit" class="main-button">Submit</button>
                        </form>
                    </div>

                @endif
            </div>
        </div>
    </div>

@endsection
