@extends('layout')

@section('content')
    <h2>Edit Product</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}">
            @error('name') <p>{{ $message }}</p> @enderror
        </div>
        <div>
            <label>Detail:</label>
            <textarea name="detail">{{ old('detail', $product->detail) }}</textarea>
            @error('detail') <p>{{ $message }}</p> @enderror
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
