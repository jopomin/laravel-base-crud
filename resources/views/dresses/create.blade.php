@extends('layouts.app')

@section('title', 'New Dress')
    
@section('content')
    <form action="{{ route('dresses.store') }}" method="post">
        @csrf
        @method('POST')

        <div>
            <label for="name">Name</label>
            <input type="text" id="name">
        </div>

        <div>
            <label for="brand">Brand</label>
            <input type="text" id="brand">
        </div>

        <div>
            <label for="designer">Designer</label>
            <input type="text" id="designer">
        </div>

        <div>
            <label for="color">Name</label>
            <input type="text" id="color">
        </div>

        <div>
            <label for="size">Brand</label>
            <input type="text" id="size">
        </div>

        <button type="submit">Add Dress</button>
    </form>
@endsection