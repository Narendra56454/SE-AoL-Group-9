<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style-login-regis.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        @if (session()->has('success'))
            <div class="success-register">
                <h2>{{ session('success') }}</h2>
            </div>
        @endif
        @if (session()->has('loginError'))
            <div class="success-register">
                <h2>{{ session('loginError') }}</h2>
            </div>
        @endif

        <img src="img/logo.png" alt="logo">
        <div class="content-container">
            <h1>Masuk</h1>
            <p>masukkan data login kamu</p>

            <form action="/login" method="POST" id="login-form">
                @csrf
                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Masukkan email kamu" value="{{ old('email') }}" required autocomplete="email">
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password kamu" required>

                <button id="submit" type="submit">Masuk</button>
            </form>
        </div>

        @error('email')
            <h1>Error Email</h1>
        @enderror
        @error('password')
            <h1>Error Password</h1>
        @enderror
        <h2>Mau gabung? Yuk <a href="/register">daftar</a> akunmu</h2>
    </div>

    {{-- <script>
        document.getElementById("login-form").addEventListener("submit", function(event) {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "" || password === "") {
                event.preventDefault(); // Prevent form submission
                alert("Please fill in all the fields.");
            }
        });
    </script> --}}
</body>
</html>
