@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>{{ $title }}</h3>
        <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body"> 
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach ($users as $user)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles->role }}</td>
                        @auth
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('admin.user.edit', $user->id) }}" type="button" class="btn btn-primary me-3">Edit</a>
                            <form action="{{ route('admin.user.destroy', $user->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger me-3">Delete</button>
                            </form>
                        </td>
                    @endauth
                    </tr>
                @endforeach
@endsection