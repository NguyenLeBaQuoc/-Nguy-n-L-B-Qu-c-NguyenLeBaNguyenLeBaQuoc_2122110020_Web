<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand; // Sử dụng model Brand

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Product::where('product.status','!=',0)
        ->join('category','product.category_id','=','category.id')
        ->join('brand','product.brand_id','=','brand.id')
        ->orderBy('product.created_at','desc')
        ->select("product.id","product.name","product.image","category.name as categoryname","brand.name as brandname")
        ->get();
        return view("backend.product.index",compact("list"));

    }

    /**
     * Show the form for creating a new resource.
     */
    private function getBrands()
    {
        return Brand::where('status', '!=', 0)->orderBy('name')->get();
    }
    public function create()
    {
        $list = Product::where('product.status','!=',0)
        ->join('category','product.category_id','=','category.id')
        ->join('brand','product.brand_id','=','brand.id')
        ->orderBy('product.created_at','DESC')
        ->select("product.id","product.name","product.image","category.name as categoryname","brand.name as brandname")
        ->get();
        $categories = Category::where('status', '!=', 0)->orderBy('name')->get();
        $brands = $this->getBrands();
        return view("backend.product.create",compact("list","categories", "brands"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product=new Product();
        $product->name=$request->name;
        $product->detail=$request->detail;
        $product->description=$request->description;
        $product->category_id=$request->category_id;
        $product->brand_id=$request->brand_id;
        $product->price=$request->price;
        $product->pricesale=$request->pricesale;
        // $product->image=$request->image;
        if ($request->image) {
            $fileName = date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('images/products/'), $fileName);
            $product->image = $fileName;
        }
        $product->slug=Str::of($request->name)->slug('-');
        $product->status=$request->status;
        $product->created_at=date('Y-m-d H:i:s');
        $product->created_by=Auth::id()??1;

        $product->save();
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
