@extends('layout.main')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="{{route('bitcoins.index')}}">Go Back</a>
    <form action="{{route('bitcoins.store')}}" method="POST" >
        @csrf

        <div class="mb-3">
          <label for="date" class="form-label">Data</label>
          <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="open" class="form-label">Apertura</label>
            <input type="text" class="form-control" id="open" name="open">
        </div>
        <div class="mb-3">
            <label for="high" class="form-label">high</label>
            <input type="text" class="form-control" id="high" name="high">
        </div>
        <div class="mb-3">
            <label for="change" class="form-label">Cambio</label>
            <input type="text" class="form-control" id="change" name="change">
        </div>
        <div class="mb-3">
            <label for="volume" class="form-label">Volume</label>
            <input type="text" class="form-control" id="volume" name="volume">
        </div>

        <button class="submit">INVIA</button>
    </form>
</div>
@endsection
