@extends('layout')

@section('content')
    <h2>Create Product</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <p>{{ $message }}</p> @enderror
        </div>
        <div>
            <label>Detail:</label>
            <textarea name="detail">{{ old('detail') }}</textarea>
            @error('detail') <p>{{ $message }}</p> @enderror
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
