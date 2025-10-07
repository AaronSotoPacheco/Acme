<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fc;
            font-family: 'Arial', sans-serif;
        }

        .login-container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .login-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: 600;
        }

        .form-group input {
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
            width: 100%;
            border: 1px solid #ddd;
        }

        .form-group input:focus {
            outline: none;
            border-color: #4e73df;
            box-shadow: 0 0 8px rgba(78, 115, 223, 0.3);
        }

        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #2e59d9;
            border-color: #2e59d9;
        }

        .text-center a {
            font-size: 14px;
            color: #4e73df;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="login-container">
            <h2 class="login-title">Iniciar Sesión</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <div class="text-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Contraseña" required autocomplete="current-password">
                    @error('password')
                        <div class="text-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                <div class="text-center mt-3">
                    <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                </div>
                <div class="text-center mt-2">
                    <a href="{{ route('register') }}">¿No tienes una cuenta? Regístrate</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
