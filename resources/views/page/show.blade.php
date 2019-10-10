@extends('layouts.welcome')



@section('content')
  <div class="container">
    <a href="{{route('cat.index')}}">Back</a>
    <a href="{{route('cat.create')}}">Create New Element</a>

    <div class="box">
      <p>{{$cat -> name}}</p>
      <p>{{$cat -> race}}</p>
      <p>{{$cat -> cat_rfid}}</p>
      <a href="{{route('cat.edit', $cat -> id)}}">Edit Element</a>
      <a href="{{route('cat.destroy', $cat -> id)}}">Destroy Element</a>
    </div>
  </div>
@endsection
