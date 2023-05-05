@extends('layouts.admin')

@section('title', 'Role Index Page')

@section('scripts')
{{--  --}}
@endsection

@section('content')
    <h5 class="mb-4">Edit Role</h5>
    <form action="{{ route('admin.role.update',$role->id) }}" method="post">
        @method("PUT")
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">ID</label>
            <input type="text" name="id" class="form-control" id="id" value="{{ $role->id }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Role</label>
            <input type="text" name="role" class="form-control" id="role" value="{{ $role->role }}">
        </div>
        
        <div class="d-flex">
            <button type="submit" class="btn btn-primary me-3">Simpan</button>
            <a href="{{ route('admin.role.index') }}" type="button" class="btn btn-danger">Batal</a>
        </div>
    </form>
@endsection

@section('js')
    {{--  --}}
@endsection
