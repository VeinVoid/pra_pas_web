@extends('layouts.main')
@section('container')
    <h1 class="text-center">Profile</h1>
    <h3 class="text-center">Waifu from anime {{ $waifu->waifu_anime }}</h3>
    <div class="row information justify-content-center mt-5">
        <div class="col-2">
            <h4>About Waifu</h4>
            <p class="mt-4">{{ $waifu->waifu_deskription }}</p>
            <h5>Image from Pinterest</h5>
        </div>
        <div class="col-2">
            <img src="{{ $waifu->waifu_image }}" width="200px">
        </div>
        <div class="col-2">
            <h4>Detail Waifu</h4>
            <h5>Name :</h5>
            <p>{{ $waifu->waifu_name }}</p>
            <h5>Age :</h5>
            <p>{{ $waifu->waifu_age }}</p>
            <h5>Birth Date :</h5>
            <p>{{ $waifu->waifu_birth }}</p>
        </div>
    </div>
@endsection
