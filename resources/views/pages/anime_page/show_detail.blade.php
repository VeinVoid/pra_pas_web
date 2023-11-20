@extends('layouts.main')
@section('container')
    <h1 class="text-center">Information Anime</h1>
    <h3 class="text-center">{{ $anime->anime_name }}</h3>
    <div class="row information justify-content-center mt-5">
        <div class="col-2">
            <h4>Anime Sinopsis</h4>
            <p class="mt-4">{{ $anime->sinopsis }}</p>
        </div>
        <div class="col-2">
            <h4>Detail Anime</h4>
            <h5>Rate :</h5>
            <p>{{ $anime->rate }}</p>
            <h5>Studio :</h5>
            <p>{{ $anime->studio }}</p>
            <h5>Release :</h5>
            <p>{{ $anime->release }}</p>
        </div>
    </div>
@endsection