@extends('layouts.main')
@section('container')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Anime</th>
        <th scope="col">Age</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach ($waifus as $key => $waifu)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $waifu->waifu_name }}</td>
          <td>{{ $waifu->waifu_anime }}</td>
          <td>{{ $waifu->waifu_age }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection