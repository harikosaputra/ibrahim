<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ibrahim Group</title>
    <link rel="shortcut icon" href="/assets/image/aqiqah.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/compiled/css/app.css">
    <link rel="stylesheet" href="/assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="/assets/compiled/css/auth.css">
    <style>
        /* Styling form container, lebih lebar */
        .form-container {
            width: 475px; /* Lebarkan menjadi 500px */
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 1;
        }

        /* Perkecil ukuran font untuk judul dengan force */
        .auth-title {
            font-size: 25px !important; /* Menambahkan !important agar aturan ini lebih kuat */
        }

        /* Mengatur posisi tulisan input agar dimulai dari kiri */
        .form-control-xl {
            height: 40px; /* Mengurangi tinggi input */
            padding: 10px; /* Mengurangi padding input */
            padding-left: 15px; /* Menambahkan padding kiri untuk menghindari teks menempel pada tepi */
            text-align: left; /* Memastikan teks berada di kiri */
        }


        /* Dekorasi sudut layar dengan gradient */
        .corner-decoration {
            position: fixed;
            width: 150px;
            height: 150px;
            background: linear-gradient(180deg, lightblue, lavender);
            border-radius: 50%;
            z-index: 0;
        }

        .top-left {
            top: -25px;
            left: -25px;
        }

        .top-right {
            top: -25px;
            right: -25px;
        }

        .bottom-left {
            bottom: -25px;
            left: -25px;
        }

        .bottom-right {
            bottom: -25px;
            right: -25px;
        }

        /* Bintik-bintik tambahan dengan gradient */
        .dots {
            position: fixed;
            width: 50px;
            height: 50px;
            background: linear-gradient(180deg, lightblue, lavender);
            border-radius: 50%;
            z-index: 0;
        }

        .dot-1 {
            top: 10%;
            left: 20%;
        }

        .dot-2 {
            top: 30%;
            right: 25%;
        }

        .dot-3 {
            bottom: 20%;
            left: 15%;
        }

        .dot-4 {
            bottom: 10%;
            right: 10%;
        }

        .dot-5 {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Flexbox untuk menempatkan form di tengah layar */
        .row.h-100 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .col-lg-5, .col-12 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Styling untuk label dan checkbox "Remember Me" */
        .remember-me {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .remember-me input {
            margin-right: 10px;
        }

        /* Mengurangi tinggi tombol Login */
        .btn-lg {
            height: 45px; /* Kurangi tinggi tombol */
            padding: 10px 20px; /* Menyesuaikan padding agar tombol tetap proporsional */
        }
    </style>
</head>

<body>
    <!-- Hiasan sudut layar -->
    <div class="corner-decoration top-left"></div>
    <div class="corner-decoration top-right"></div>
    <div class="corner-decoration bottom-left"></div>
    <div class="corner-decoration bottom-right"></div>

    <!-- Bintik-bintik tambahan -->
    <div class="dots dot-1"></div>
    <div class="dots dot-2"></div>
    <div class="dots dot-3"></div>
    <div class="dots dot-4"></div>
    <div class="dots dot-5"></div>

    <script src="/assets/static/js/initTheme.js"></script>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left" class="form-container">
                    <h5 class="auth-title mb-4">Welcome to Ibrahim Group</h5>

                    <!-- Menampilkan alert error jika ada -->
                    @if(session('message'))
                        <div class="alert alert-danger">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        
                        <!-- Label dan input email -->
                        <div class="form-group mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control form-control-xl" placeholder="Email" name="email" id="email">
                            {{-- <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div> --}}
                        </div>

                        <!-- Label dan input password -->
                        <div class="form-group  mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password" id="password">
                            {{-- <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div> --}}
                        </div>

                        <!-- Ceklis Remember Me -->
                        <div class="remember-me">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember Me</label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-3">Log in</button>
                    </form>                    
                </div>
            </div>
        </div>

    </div>
</body>

</html>
