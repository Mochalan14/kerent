@extends('layouts.admin')

@section('title', 'Status Index Page')

@section('scripts')
{{--  --}}
@endsection

@section('content')
    <h5 class="mb-4">Edit Status</h5>
    <form action="{{ route('admin.status.update',$status->id) }}" method="post">
        @method("PUT")
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">ID</label>
            <input type="text" name="id" class="form-control" id="id" value="{{ $status->id }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" id="status" value="{{ $status->status }}">
        </div>
        
        <div class="d-flex">
            <button type="submit" class="btn btn-primary me-3">Simpan</button>
            <a href="{{ route('admin.status.index') }}" type="button" class="btn btn-danger">Batal</a>
        </div>
    </form>
@endsection

@section('js')
    {{--  --}}
@endsection
