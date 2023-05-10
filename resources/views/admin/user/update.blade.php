@extends('layouts.admin')

@section('title', 'Role Index Page')

@section('scripts')
{{--  --}}
@endsection

@section('content')
    <h5 class="mb-4">Edit User</h5>
    <form action="{{ route('admin.user.update',$user->id) }}" method="post">
        @method("PUT")
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="nama" value="{{ $user->name}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="email" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Role</label>
            <input type="text" name="role" class="form-control" id="role" value="{{ $user->roles->role }}">
        </div>
        
        <div class="d-flex">
            <button type="submit" class="btn btn-primary me-3">Simpan</button>
            <a href="{{ route('admin.user.index') }}" type="button" class="btn btn-danger">Batal</a>
        </div>
    </form>
@endsection

@section('js')
    {{--  --}}
@endsection
