@extends('layout.main')

@section('content')

<div class="container">

    <h1>Bitcoin detail log</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">date</th>
                <th scope="col">price</th>
                <th scope="col">open</th>
                <th scope="col">hight</th>
                <th scope="col">change</th>
                <th scope="col">volume</th>
            </tr>
        </thead>
        <tbody>

                <tr>
                    <td>{{ $bitcoin->date }}</td>
                    <td>{{ $bitcoin->price }}</td>
                    <td>{{ $bitcoin->open }}</td>
                    <td>{{ $bitcoin->high }}</td>
                    <td>{{ $bitcoin->change }}</td>
                    <td>{{ $bitcoin->volume }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('bitcoins.index')}}">Go Back</a>
                    </td>
                </tr>

        </tbody>
    </table>
</div>


@endsection
