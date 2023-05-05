@extends('layouts.admin')

@section('title', 'Konfirmasi Index Page')

@section('scripts')
{{--  --}}
@endsection

@section('content')
    <h5 class="mb-4">Edit Konfirmasi</h5>
    <form action="{{ route('admin.konfirmasi.update',$konfirmasi->id) }}" method="post">
        @method("PUT")
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">ID</label>
            <input type="text" name="id" class="form-control" id="id" value="{{ $konfirmasi->id }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Konfirmasi</label>
            <input type="text" name="konfirmasi" class="form-control" id="konfirmasi" value="{{ $konfirmasi->konfirmasi }}">
        </div>
        
        <div class="d-flex">
            <button type="submit" class="btn btn-primary me-3">Simpan</button>
            <a href="{{ route('admin.konfirmasi.index') }}" type="button" class="btn btn-danger">Batal</a>
        </div>
    </form>
@endsection

@section('js')
    {{--  --}}
@endsection
