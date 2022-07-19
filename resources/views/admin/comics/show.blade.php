@extends('admin.template.base')

@section('pageTitle', 'Admin')

@section('pageMain')
    <main>
        <h1>Fumetto in vendita</h1>

        <table>
            <thead>
                <tr>
                    <th>Campo</th>
                    <th>Valore</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comic->toArray() as $key => $value)
                    <tr>
                        <td>{{$key}}</td>
                        <td>{{$value}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
