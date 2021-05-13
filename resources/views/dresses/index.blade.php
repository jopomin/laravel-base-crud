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
                    <td>
                        <a href="{{  route('dresses.show', ['dress' => $vestito['id']])  }}">Price</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection