<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend/images/favi_icon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/images/favi_icon.ico') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <!-- jQuery (required for Toastr) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <script>
        toastr.options = {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: "3000",
            extendedTimeOut: "1000",
            showDuration: "300",
            hideDuration: "300",
            showMethod: "slideDown",
            hideMethod: "fadeOut"
        };
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            background: linear-gradient(120deg, #6366f1, #38bdf8, #22c55e, #f97316);
            background-size: 400% 400%;
            animation: gradientMove 10s ease infinite;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Floating color blobs */
        .blob {
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.6;
        }

        .blob.one { background: #6366f1; top: -80px; left: -80px; }
        .blob.two { background: #22c55e; bottom: -80px; right: -80px; }
        .blob.three { background: #f97316; bottom: 50%; left: 60%; }

        .login-box {
            width: 100%;
            max-width: 420px;
            padding: 40px;
            border-radius: 24px;
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(20px);
            box-shadow: 0 40px 80px rgba(0,0,0,0.6);
            border: 1px solid rgba(255,255,255,0.15);
            position: relative;
            z-index: 10;
            color: #fff;
        }

        .brand-icon {
            width: 233px;
            height: 70px;
            border-radius: 24px;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: #020617;
            margin: 0 auto 20px;
            box-shadow: 0 0 30px rgba(56,189,248,0.8);
        }

        h2 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 8px;
        }

        p {
            text-align: center;
            color: #cbd5f5;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .form-control {
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            color: #fff;
            padding: 12px 15px;
            border-radius: 14px;
        }

        .form-control::placeholder {
            color: #cbd5f5;
        }

        .form-control:focus {
            background: rgba(255,255,255,0.15);
            border-color: #38bdf8;
            box-shadow: 0 0 0 0.2rem rgba(56,189,248,.25);
            color: #fff;
        }

        .input-group-text {
            background: transparent;
            border: 1px solid rgba(255,255,255,0.2);
            color: #e5e7eb;
        }

        .btn-login {
            background: linear-gradient(135deg, #22c55e, #38bdf8, #6366f1);
            border: none;
            border-radius: 14px;
            padding: 14px;
            font-weight: 600;
            color: #020617;
            transition: 0.3s ease;
            box-shadow: 0 10px 30px rgba(56,189,248,0.6);
        }

        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(56,189,248,0.9);
        }

        .links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .links a {
            color: #38bdf8;
            text-decoration: none;
        }

        .footer-text {
            text-align: center;
            font-size: 13px;
            color: #cbd5f5;
            margin-top: 25px;
        }
    </style>
</head>
<body>
@if (session('success'))
    <script>
        toastr.success("{{ session('success') }}");
    </script>
@endif

@if (session('error'))
    <script>
        toastr.error("{{ session('error') }}");
    </script>
@endif

@if (session('info'))
    <script>
        toastr.info("{{ session('info') }}");
    </script>
@endif
<div class="blob one"></div>
<div class="blob two"></div>
<div class="blob three"></div>

<div class="login-box">
    <div class="brand-icon">
        <img src="{{ asset('backend/images/kamala2.webp') }}"
             alt="WebbiTech"
             height="75px">
    </div>

    <h2>Admin Login</h2>
    <p>Welcome back to your creative dashboard</p>

    <form id="loginForm" method="POST" action="{{ route('admin.login.submit') }}">
        @csrf

        <!-- Email -->
        <div class="mb-3">
            <div class="input-group input-group-validate">
                <span class="input-group-text">
                    <i class="fa-solid fa-envelope"></i>
                </span>
                <input type="email" name="email" class="form-control" placeholder="Email address" value="{{ old('email')}}">
            </div>
            <small class="text-danger error-text"></small>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <div class="input-group input-group-validate">
                <span class="input-group-text">
                    <i class="fa-solid fa-lock"></i>
                </span>

                <input type="password" name="password" id="password" class="form-control" placeholder="Password">

                <span class="input-group-text" style="cursor:pointer;" onclick="togglePassword()">
                    <i class="fa-solid fa-eye" id="toggleIcon"></i>
                </span>
            </div>
            <small class="text-danger error-text"></small>
        </div>

        {{-- <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Remember me</label>
        </div> --}}

        <button type="submit" class="btn btn-login w-100" id="loginBtn">
            <span class="btn-text">Sign In</span>
            <span class="spinner-border spinner-border-sm d-none"></span>
        </button>
    </form>


    <div class="footer-text">       
        © 2026 Graphics Design Admin Panel
    </div>
</div>

<script>
    $(document).ready(function () {

        $('#loginForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                email: "Email is required",
                password: "Password is required"
            },

            errorPlacement: function (error, element) {
                element
                    .closest('.mb-3')
                    .find('.error-text')
                    .html(error);
            },

            highlight: function (element) {
                $(element)
                    .closest('.input-group-validate')
                    .addClass('is-invalid-group');
            },

            unhighlight: function (element) {
                $(element)
                    .closest('.input-group-validate')
                    .removeClass('is-invalid-group');

                $(element)
                    .closest('.mb-3')
                    .find('.error-text')
                    .empty();
            },

            submitHandler: function (form) {
                $('#loginBtn').prop('disabled', true);
                $('#loginBtn .btn-text').addClass('d-none');
                $('#loginBtn .spinner-border').removeClass('d-none');
                form.submit();
            }
        });

    });
</script>

<script>
    function togglePassword() {
        const pass = document.getElementById('password');
        pass.type = pass.type === 'password' ? 'text' : 'password';
    }
</script>

</body>
</html>
