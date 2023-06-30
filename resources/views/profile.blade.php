@extends('layout.main')

@section('profile-style')
    <link rel="stylesheet" href="css/style-profile.css">
@endsection

@section('main-container')
    <div class="container">
        <h1>Profile Pengguna</h1>
        <img src="img/default_profile_image2.svg" alt="profile image" class="edit-profile-img">

        <div class="detail-container">
            <div class="detail-profile">
                <p class="p">Nama Pengguna :</p>
                <p>{{ auth()->user()->name }}</p>
            </div>
            <div class="detail-profile">
                <p class="p">Email :</p>
                <p>{{ auth()->user()->email }}</p>
            </div>
            <div class="detail-profile">
                <p class="p">Nomor Ponsel :</p>
                <p>{{ auth()->user()->phone_number }}</p>
            </div>
            <div class="detail-profile">
                <p class="p">Kota, Negara :</p>
                <p>{{ auth()->user()->city }}, {{ auth()->user()->country }}</p>
            </div>
        </div>

        <a href="/editProfile"><button id="edit">Edit Profile</button></a>
    </div>
@endsection
