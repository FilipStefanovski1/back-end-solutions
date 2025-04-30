@extends('layout')

@section('content')
    <h2>Show Product</h2>

    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Detail:</strong> {{ $product->detail }}</p>

    <a href="{{ route('products.index') }}">Back</a>
@endsection
