@extends('layouts.welcome')

@section('content')

  <div class="container">
    <a href="{{route('cat.index')}}">BACK</a>

      <div class="edit">
        <form method="post" action="{{route('cat.store')}}">
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="">
          </div>

          <div class="form-group">
            <label for="race">Race</label>
            <input type="text" name="race" value="">
          </div>

          <div class="form-group">
            <label for="cat_rfid">Identification Code</label>
            <input type="text" name="cat_rfid" value="">
          </div>

          <button type="submit">Save</button>
        </form>
      </div>

  </div>

{{-- pagina per creare nuovo post --}}
@endsection
