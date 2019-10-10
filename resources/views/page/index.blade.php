@extends('layouts.welcome')

@section('content')
  <div class="container">
    @foreach ($cats as $cat)
      <div class="box">
        <p>{{$cat -> name}}</p>
        <p>{{$cat -> race}}</p>
        <a href="{{route('cat.show', $cat -> id)}}">APRI</a>
      </div>
    @endforeach
  </div>
@endsection
