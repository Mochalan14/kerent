@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>{{ $title }}</h3>
        <a href="{{ route('admin.role.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body"> 
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach ($roles as $role)
                <tbody>
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->role }}</td>
                        @auth
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('admin.role.edit', $role->id) }}" type="button" class="btn btn-primary me-3">Edit</a>
                            <form action="{{ route('admin.role.destroy', $role->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger me-3">Delete</button>
                            </form>
                        </td>
                    @endauth
                    </tr>
                @endforeach
@endsection