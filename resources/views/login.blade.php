<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | Sistem Monitoring Kehadiran Siswa</title>

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container d-flex align-items-center justify-content-center" style="min-height:100vh;">

        <div class="row justify-content-center">

            <div class="col-xl-12 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <div class="row">

                            <div class="col-lg-6 d-none d-lg-block bg-login-image"
                                style="background:url('{{ asset('img/sekolah.webp') }}'); background-size:cover;"></div>

                            <div class="col-lg-6">
                                <div class="p-5">

                                    <div class="text-center mb-4">

                                        <h4 class="text-gray-900 font-weight-bold">

                                            Sistem Informasi Monitoring Kehadiran Siswa

                                        </h4>

                                        <p class="small text-gray-600">

                                            Berbasis QR Code & WhatsApp Gateway
                                            MTs Al Aziz Pucanganom Jambesari
                                            Kabupaten Bondowoso

                                        </p>

                                    </div>

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group">
                                            <input type="username" name="email" class="form-control form-control-user"
                                                placeholder="Masukkan Username" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password"
                                                class="form-control form-control-user" placeholder="Masukkan Password"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">

                                                <input type="checkbox" class="custom-control-input" id="remember"
                                                    name="remember">

                                                <label class="custom-control-label" for="remember">
                                                    Ingat Saya
                                                </label>

                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">

                                            <i class="fas fa-sign-in-alt"></i>
                                            Login Sistem

                                        </button>

                                    </form>

                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="#">
                                            Hubungi Admin Jika Lupa Password
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
