@extends('layouts.admin')

@section('title', 'Status Index Page')

@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
@endsection

@section('content')
    <h5 class="mb-4">Tambah Status</h5>
    <form action="{{ route('admin.status.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="price" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" id="status">
        </div>
        <div class="d-flex">
            <button type="submit" class="btn btn-primary me-3">Simpan</button>
            <a href="{{ route('admin.status.index') }}" type="button" class="btn btn-danger">Batal</a>
        </div>
    </form>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#exampleTable').DataTable();
        });
    </script>
@endsection
