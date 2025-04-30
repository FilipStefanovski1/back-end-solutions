@extends('layout')

@section('content')
    <h2>Product List</h2>
    <a href="{{ route('products.create') }}">Create New Product</a>

    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif

    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Detail</th>
            <th>Actions</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <a href="{{ route('products.show', $product->id) }}">Show</a>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $products->links() }}
@endsection
