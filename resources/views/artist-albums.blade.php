@extends('main-layout')

@section('title', 'Albums by Artist')

@section('content')
</br>
<h2>Artist: {{$artist->Artist_Name}}</h2>
<ul>
  <table class="table">
    <tr>
      <th>Album Title</th>
    </tr>
    @foreach($albums as $album)
    <tr>
      <td><a href="/albums/{{$album->AlbumId}}/reviews">{{$album->Title}}</a></td>
    </tr>
    @endforeach
  </table>
</ul>
@endsection
