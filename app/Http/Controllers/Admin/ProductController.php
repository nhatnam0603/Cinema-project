<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use App\Models\Movie;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(ProductFormRequest $request)
    {
        $validatedData = $request->validated();

        $product = new Movie;
        $product->name = $validatedData['name'];
        $product->type = $validatedData['type'];
        $product->description = $validatedData['description'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file = move('uploads/product/', $filename);

            $product->image = $filename;
        }

        $product->save();

        return redirect('/product')->with('message', 'Product added Successfully');
    }
}
