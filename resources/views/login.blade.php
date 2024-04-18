<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Ellora Official</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/login.css">
</head>
<body class="login-body">
    <div class="col-10 col-md-6 col-lg-5 col-xl-4">
        <div class="text-center">
            <h1 class="login-text-brand">Ellora</h1>
        </div>
        <h3 class="text-center login-text-primary mb-5"><b>Login</b></h3>

        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <form action="{{ route('login.store') }}" method="post">
            @csrf
            <div class="mb-4">
                <div class="form-login-input-group">
                    <label for="email">Masukkan Email</label>
                    <input id="email" name="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" />
                    <div class="invalid-feedback">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <div class="form-login-input-group">
                    <label for="password">Masukkan Password</label>
                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" />
                    <div class="invalid-feedback">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="d-grid mt-5">
                <button type="submit" class="btn btn-brand">Login</button>
            </div>
            <div class="text-center flex">
                <div class="div flex">
                    <a href="{{ route('register.index') }}">Register</a>
                </div>
                <div class="div">
                    <a href="{{ route('forgotpassword.show') }}">Forgot Password</a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
