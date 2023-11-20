@extends('layouts.main')
@section('container')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Anime Name</th>
        <th scope="col">Rate</th>
        <th scope="col">Release</th>
        <th></th>
        <th scope="col">Action</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach ($animes as $key => $anime)
        <tr>
          <td>{{ $key + 1 }}</td>
          <p>{{ $anime->anime_id }}</p>
          <td>{{ $anime->anime_name }}</td>
          <td>{{ $anime->rate }}</td>
          <td>{{ $anime->release }}</td>
          <td><a href="anime/{{ $anime->id }}"><button type="button" class="btn btn-outline-primary">Detail</button></a></td>
          <td><a href="anime/edit/{{ $anime->id }}"><button type="button" class="btn btn-outline-warning">Edit</button></a></td>
          <td><a href="anime/delete/{{ $anime->id }}"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection