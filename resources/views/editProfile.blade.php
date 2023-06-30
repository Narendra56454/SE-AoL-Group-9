@extends('layout.main')

@section('editProfile-style')
    <link rel="stylesheet" href="css/style-editProfile.css">
@endsection

@section('main-container')
    
    <div class="content-container">
        <h1>Edit Profile</h1>

        <div class="profile-img-container">
            <img src="img/default_profile_image2.svg" alt="profile image" class="editProfile-img">
            <img src="img/camera_icon.svg" alt="icon camera" class="camera-icon">
        </div>

        <form action="/editProfile" method="POST">
            @csrf
            <label for="usernama">Username</label>
            <input type="text" id="usernama" name="name" value="{{ auth()->user()->name }}">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" disabled>
            <label for="no-hp">Nomor Handphone</label>
            <input type="text" id="no-hp" name="phone_number" value="{{ auth()->user()->phone_number }}">
            <div class="address">
                <div class="dropdown-container">
                    <p>Kota</p>
                    <select name="city" id="city">
                        <option value="" disabled>--||--</option>
                        <option value="jakarta">Jakarta</option>
                        <option value="bandung">Bandung</option>
                        <option value="surabaya">Surabaya</option>
                    </select>
                </div>

                <div class="dropdown-container">
                    <p>Negara</p>
                    <select name="country" id="negara">
                        <option value="" disabled>--||--</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="malaysia">Malaysia</option>
                        <option value="brunei">Brunei</option>
                    </select>
                </div>
            </div>

            <div class="conf-btn">
                <a href="/profile" id="batal">Batalkan</a>
                <button id="simpan" type="submit">Simpan</button>
            </div>
        </form>
    </div>

@endsection