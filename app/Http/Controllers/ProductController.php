<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $searchQuery = $request->input('search');
        $searchTerms = explode(' ', $request->input('search'));

        $products = Product::when($searchQuery, function ($query) use ($searchTerms) {
            foreach ($searchTerms as $term) {
                $query->where('name', 'LIKE', "%{$term}%");
            }
        })->get();
    
        return view('product.index', compact('products', 'searchQuery'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        Product::create($request->validated());

        return redirect('/products')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()->view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return response()->view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        Product::where('id', $id)->update($request->validated());

        return response()->redirectTo('products')->with('message', 'Product Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::where('id', $id)->delete();
        return response()->redirectTo('products')->with('message', 'Product Deleted Successfully.');
    }

    public function testFuction(){
        return [
            'app_url' => env('APP_URL'),
            'asset_url' => env('ASSET_URL'),
        ];
    }
}
