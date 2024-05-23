@extends('layouts.app')
@section('content')
<h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT') 

        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>

    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to Product List</a>
</div>

@endsection