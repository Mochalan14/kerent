@extends('auth.layouts.app')

@section('judul', 'Register Page | keRent')

@section('konten')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Daftar Akun</h2>
                                <p>sudah punya akun ?</p>
                                <a href="/login" class="btn btn-white btn-outline-white">login</a>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Daftar Akun</h3>
                                </div>
                            </div>
                            <form action="/registerproses" class="signin-form" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Nama</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Kamu"
                                        name="name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Masukkan Email Kamu"
                                        name="email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                        required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
