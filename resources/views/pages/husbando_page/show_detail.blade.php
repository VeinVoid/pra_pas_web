@extends('layouts.main')
@section('container')
    <h1 class="text-center">Profile</h1>
    <h3 class="text-center">Husbando from anime {{ $husbando->husbando_anime }}</h3>
    <div class="row information justify-content-center mt-5">
        <div class="col-2">
            <h4>About Husbando</h4>
            <p class="mt-4">{{ $husbando->husbando_deskription }}</p>
            <h5>Image from Pinterest</h5>
        </div>
        <div class="col-2">
            <img src="{{ $husbando->husbando_image }}" width="200px">
        </div>
        <div class="col-2">
            <h4>Detail Waifu</h4>
            <h5>Name :</h5>
            <p>{{ $husbando->husbando_name }}</p>
            <h5>Age :</h5>
            <p>{{ $husbando->husbando_age }}</p>
            <h5>Birth Date :</h5>
            <p>{{ $husbando->husbando_birth }}</p>
        </div>
    </div>
@endsection