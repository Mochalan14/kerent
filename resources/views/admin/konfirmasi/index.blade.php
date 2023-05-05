@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>{{ $title }}</h3>
        <a href="{{ route('admin.konfirmasi.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body"> 
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Konfirmasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach ($konfirmasis as $konfirmasi)
                <tbody>
                    <tr>
                        <td>{{ $konfirmasi->id }}</td>
                        <td>{{ $konfirmasi->konfirmasi }}</td>
                        @auth
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('admin.konfirmasi.edit', $konfirmasi->id) }}" type="button" class="btn btn-primary me-3">Edit</a>
                            <form action="{{ route('admin.konfirmasi.destroy', $konfirmasi->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger me-3">Delete</button>
                            </form>
                        </td>
                    @endauth
                    </tr>
                @endforeach
@endsection
