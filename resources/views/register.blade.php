<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style-login-regis.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        @if (session()->has('error'))
            <div class="success-register">
                <h2>{{ session('error') }}</h2>
            </div>
        @endif

        <img src="img/logo.png" alt="logo">
        <div class="content-container">
            <h1>Daftar</h1>
            <p>masukkan info diri kamu</p>

            <form action="/register" method="POST" id="regis-form">
                @csrf
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Nama Lengkap" required value="{{ old('name') }}" autocomplete="name">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <label for="conf-password">Konfirmasi Password</label>
                <input type="password" id="conf-password" name="conf_password" placeholder="Konfirmasi Password" required>
                <label for="no-hp">Nomor Ponsel</label>
                <input type="string" id="no-hp" name="phone_number" placeholder="Nomor Ponsel" value="{{ old('no_hp') }}" required>

                <div class="dropdown-container">
                    <select name="city" id="city" required>
                        <option value="" disabled selected>Kota</option>
                        <option value="jakarta" {{ old('city') == 'jakarta' ? 'selected' : '' }}>Jakarta</option>
                        <option value="bandung" {{ old('city') == 'bandung' ? 'selected' : '' }}>Bandung</option>
                        <option value="surabaya" {{ old('city') == 'surabaya' ? 'selected' : '' }}>Surabaya</option>
                    </select>
                </div>

                <div class="dropdown-container">
                    <select name="country" id="negara" required>
                        <option value="" disabled selected>Negara</option>
                        <option value="indonesia" {{ old('country') == 'indonesia' ? 'selected' : '' }}>Indonesia</option>
                        <option value="malaysia" {{ old('country') == 'malaysia' ? 'selected' : '' }}>Malaysia</option>
                        <option value="brunei" {{ old('country') == 'brunei' ? 'selected' : '' }}>Brunei</option>
                    </select>
                </div>

                <div class="terms-checkbox">
                    <input type="checkbox" id="terms-checkbox" name="terms_checkbox" value="{{ old('terms_checkbox') }}">
                    <label for="terms-checkbox"><a href="/termCondition">Syarat &amp; Ketentuan</a></label>
                </div>
                  
                <button type="submit" id="submit">Daftar</button>
            </form>
        </div>

        <h2>Sudah punya akun? Langsung <a href="/login">masuk</a></h2>
    </div>


    <script>
        document.getElementById("regis-form").addEventListener("submit", function(event) {
            var password = document.getElementById("password").value;
            var confPassword = document.getElementById("conf-password").value;
            
            if (password.length < 5) {
                event.preventDefault(); // Prevent form submission
                alert("Password Must be more than 5 character");
            }
            else if(password !== confPassword) {
                event.preventDefault(); // Prevent form submission
                alert("Password and confirm password do not match.");
            };
        });
    </script>
</body>
</html>
