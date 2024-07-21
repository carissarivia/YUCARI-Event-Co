@extends('admin.layouts.app')

@section('content')
<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain mt-5 animate__animated animate__fadeIn"> <!-- Mengubah margin-top untuk menaikkan posisi -->
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                <p class="mb-0">Silahkan masukkan username dan password:</p> <!-- Mengubah teks pesan -->
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.login') }}" role="form" class="text-start">
                                    @csrf
                                    <div class="mb-3 animate__animated animate__fadeInUp">
                                        <label class="form-label">Username</label> <!-- Mengubah label dari Email menjadi Username -->
                                        <input type="text" class="form-control" name="username" required>
                                    </div>
                                    <div class="mb-3 animate__animated animate__fadeInUp">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                    <div class="form-check form-switch d-flex align-items-center mb-3 animate__animated animate__fadeInUp">
                                        <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                                        <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                                    </div>
                                    <div class="text-center animate__animated animate__fadeInUp">
                                        <button type="submit" class="btn btn-info w-100 mt-4 mb-0 btn-hover">Sign in</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Bagian Reset Password dan Sign Up dihilangkan -->
                        </div>
                    </div>
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-info h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('{{ asset('assets/img/curved-images/curved14.jpg') }}'); background-size: cover;">
                            <span class="mask bg-gradient-dark opacity-6"></span>
                            <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                            <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
