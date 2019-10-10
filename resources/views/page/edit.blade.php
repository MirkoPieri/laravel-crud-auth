@extends('layouts.welcome')

@section('content')

  <div class="container">
    <a href="{{route('cat.show', $cat -> id)}}">BACK</a>

      <div class="edit">
        <form method="post" action="{{route('cat.update', $cat -> id)}}">
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$cat -> name}}">
          </div>

          <div class="form-group">
            <label for="race">Race</label>
            <input type="text" name="race" value="{{$cat -> race}}">
          </div>

          <div class="form-group">
            <label for="cat_rfid">Identification Code</label>
            <input type="text" name="cat_rfid" value="{{$cat -> cat_rfid}}">
          </div>

          <button type="submit">Save</button>
        </form>
      </div>

  </div>

{{-- pagina per modificare post --}}
@endsection
