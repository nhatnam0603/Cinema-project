<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use App\Models\Movie;
use App\Http\Controllers\Admin\AdminController;
use App\Models\MoviesTypes;
use App\Models\TypeScreens;
use DateTime;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index()
    {
        $prods = Movie::all();
        return view('admin.product.index', compact('prods'));
    }

    public function create()
    {
        $screenType = TypeScreens::all();
        return view('admin.product.create',compact('screenType'));
    }

    public function store(ProductFormRequest $request)
    {
        $validatedData = $request->validated();
        $began_at = new DateTime($request->input('began_at'));
        $end_at = new DateTime($request->input('end_at'));
        DB::beginTransaction();
        try {
            $product = new Movie;
            $product->began_at = $began_at;
            $product->end_at = $end_at;
            $product->name = $validatedData['name'];
            $product->description = $validatedData['description'];

            if($request->hasFile('image')){
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;

                $file->move(public_path('uploads/product'), $filename);

                $product->image = $filename;
            }

            $product->save();

            $productType = new MoviesTypes();
            $productType->type_id= $validatedData['type'];
            $productType->movie_id= $product->id;
            $productType->save();

            DB::commit();
        } catch (\Throwable $th) {
           DB::rollBack();
           dd( $th);
        }
    
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
