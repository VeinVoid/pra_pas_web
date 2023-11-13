@extends('layouts.main')
@section('container')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Anime</th>
        <th scope="col">Age</th>
        <th></th>
        <th scope="col">Action</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach ($husbandos as $key => $husbando)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $husbando->husbando_name }}</td>
          <td>{{ $husbando->husbando_anime }}</td>
          <td>{{ $husbando->husbando_age }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection