@extends('layout.main')

@section('content')
    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">date</th>
                    <th scope="col">open</th>
                    <th scope="col">hight</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bitcoins as $bitcoin)
                    <tr>
                        <td>{{ $bitcoin->id }}</td>
                        <td>{{ $bitcoin->date }}</td>
                        <td>{{ $bitcoin->open }}</td>
                        <td>{{ $bitcoin->high }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('bitcoins.show', $bitcoin)}}">Details</a>
                            <a class="btn btn-primary" href="{{route('bitcoins.edit', $bitcoin)}}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $bitcoins->links() }}


    </div>
@endsection
