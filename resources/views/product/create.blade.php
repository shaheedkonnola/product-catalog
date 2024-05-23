@extends('layouts.app')
@section('content')
<h1>Create New Product</h1>
    
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Create Product</button>
</form>

<a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to Product List</a>

@endsection