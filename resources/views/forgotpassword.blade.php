<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | Ellora Official</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/login.css">
</head>
<body class="login-body">
    <div class="col-10 col-md-6 col-lg-5 col-xl-4">
        <div class="text-center">
            <h1 class="login-text-brand">Ellora</h1>
        </div>
        <h3 class="text-center login-text-primary mb-5"><b>Forgot Password</b></h3>

        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <form action="{{ route('forgotpassword.update') }}" method="post">
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
            <div class="form-login-input-group">
                <label for="name">Masukkan Nama</label>
                <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" value="{{ old('name') }}" />
                <div class="invalid-feedback">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <div class="form-login-input-group">
                    <label for="password1">Masukkan Password</label>
                    <input type="password" id="password1" name="password1" class="form-control @error('password1') is-invalid @enderror" placeholder="Password Baru" />
                    <div class="invalid-feedback">
                        @error('password1')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <div class="form-login-input-group">
                    <label for="password2">Masukkan Password</label>
                    <input type="password" id="password2" name="password2" class="form-control @error('password2') is-invalid @enderror" placeholder="Konfirmasi Password Baru" />
                    <div class="invalid-feedback">
                        @error('password2')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="d-grid mt-5">
                <button type="submit" class="btn btn-brand">Forgot Password</button>
            </div>
            <div class="text-center">
                <a href="{{ route('register.index') }}">Register</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
