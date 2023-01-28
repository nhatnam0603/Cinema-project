<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use App\Models\Movie;
use App\Http\Controllers\Admin\AdminController;

class ProductController extends Controller
{
    public function index()
    {
        $prods = Movie::all();
        return view('admin.product.index', compact('prods'));
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

            $file->move(public_path('uploads/product'), $filename);

            $product->image = $filename;
        }

        $product->save();

        return redirect('/product')->with('message', 'Product added Successfully');
    }

    public function show($id)
    {
    }

    public function destroy(Movie $id){
        $product = Movie::find($id);
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
