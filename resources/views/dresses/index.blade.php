@extends('layouts.app')

@section('title', 'Dresses')
    
@section('content')
    <h1>Tutti i vestiti</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>BRAND</th>
                <th>DESIGNER</th>
                <th>COLOR</th>
                <th>SIZE</th>
                <th>PRICE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vestiti as $vestito)
                <tr>
                    <th>{{  $vestito['id']  }}</th>
                    <td>{{  $vestito['name']  }}</td>
                    <td>{{  $vestito['brand']  }}</td>
                    <td>{{  $vestito['designer']  }}</td>
                    <td>{{  $vestito['color']  }}</td>
                    <td>{{  $vestito['size']  }}</td>
                    <td>{{  $vestito['price']  }}</td>
                    <td>
                        <a href="{{  route('dresses.edit', $vestito['id'])  }}">Modifica</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('dresses.create') }}">Insert New Dress</a>
@endsection