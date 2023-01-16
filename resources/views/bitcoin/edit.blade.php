@extends('layout.main')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="{{route('bitcoins.index')}}">Go Back</a>
    <form action="{{route('bitcoins.update', $bitcoin)}}" method="POST" >
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="date" class="form-label" >Data</label>
          <input type="date" class="form-control" value="{{old('date', $bitcoin->date)}}" id="date" name="date">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" value="{{old('price',$bitcoin->price)}}" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="open" class="form-label">Apertura</label>
            <input type="text" class="form-control" value="{{old('open',$bitcoin->open)}}" id="open" name="open">
        </div>
        <div class="mb-3">
            <label for="high" class="form-label">high</label>
            <input type="text" class="form-control" value="{{old('high',$bitcoin->high)}}" id="high" name="high">
        </div>
        <div class="mb-3">
            <label for="change" class="form-label">Cambio</label>
            <input type="text" class="form-control" value="{{old('change',$bitcoin->change)}}" id="change" name="change">
        </div>
        <div class="mb-3">
            <label for="volume" class="form-label">Volume</label>
            <input type="text" class="form-control" value="{{old('volume',$bitcoin->volume)}}" id="volume" name="volume">
        </div>

        <button class="submit">INVIA</button>
    </form>
</div>
@endsection
