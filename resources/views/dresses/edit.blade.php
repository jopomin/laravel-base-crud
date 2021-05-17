@extends('layouts.app')

@section('title', 'New Dress')

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
    
@section('content')
    <form action="{{ route('dresses.update', $vestiti->id) }}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="name">EDIT Name</label>
            <input type="text" name="name" id="name" value="{{ $vestiti['name']}}">
        </div>

        <div>
            <label for="brand">Brand</label>
            <input type="text" name="brand" id="brand" value="{{ $vestiti['brand'] }}">
        </div>

        <div>
            <label for="designer">Designer</label>
            <input type="text" name="designer" id="designer" value="{{ $vestiti['designer'] }}">
        </div>

        <div>
            <label for="color">Color</label>
            <input type="text" name="color" id="color" value="{{ $vestiti['color'] }}">
        </div>

        <div>
            <label for="size">Size</label>
            <input type="text" name="size" id="size" value="{{ $vestiti['size'] }}">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price" value="{{ $vestiti['price'] }}">
        </div>

        <button type="submit">Add Dress</button>
    </form>
@endsection