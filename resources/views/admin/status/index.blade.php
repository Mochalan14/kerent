@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>{{ $title }}</h3>
        <a href="{{ route('admin.status.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body"> 
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach ($statuses as $status)
                <tbody>
                    <tr>
                        <td>{{ $status->id }}</td>
                        <td>{{ $status->status }}</td>
                        @auth
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('admin.status.edit', $status->id) }}" type="button" class="btn btn-primary me-3">Edit</a>
                            <form action="{{ route('admin.status.destroy', $status->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger me-3">Delete</button>
                            </form>
                        </td>
                    @endauth
                    </tr>
                @endforeach
@endsection