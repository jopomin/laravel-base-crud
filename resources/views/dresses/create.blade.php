@extends('layouts.app')

@section('title', 'New Dress')
    
@section('content')
    <form action="{{ route('dresses.store') }}" method="post">
        @csrf
        @method('POST')

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="brand">Brand</label>
            <input type="text" name="brand" id="brand">
        </div>

        <div>
            <label for="designer">Designer</label>
            <input type="text" name="designer" id="designer">
        </div>

        <div>
            <label for="color">Color</label>
            <input type="text" name="color" id="color">
        </div>

        <div>
            <label for="size">Size</label>
            <input type="text" name="size" id="size">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price">
        </div>

        <button type="submit">Add Dress</button>
    </form>
@endsection