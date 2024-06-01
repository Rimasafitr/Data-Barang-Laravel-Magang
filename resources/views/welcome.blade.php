<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME</title>
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>

        body {
            background-image: url('{{ asset('assets/img/background.png') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .button-container {
            margin-top: 20px;
        }
        .btn {
            padding: 10px 20px;
            font-size: 18px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn-login {
            background-color: #007bff;
            color: white;
        }
        .btn-register {
            background-color: #28a745;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Website Kelola Barang</h1>
    <div class="button-container">
        <a href="{{ route('login') }}" class="btn btn-login">Login</a>
        <a href="{{ route('register') }}" class="btn btn-register">Register</a>
    </div>
    <script src="{{ asset('/') }}assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
