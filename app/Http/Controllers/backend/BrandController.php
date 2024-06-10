<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBrandRequest;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function status($id)
    {
        $brand = Brand::find($id);
        if ($brand) {
            // Đảo ngược trạng thái từ 1 sang 2 và ngược lại
            $brand->status = $brand->status == 1 ? 2 : 1;
            $brand->save();
        }

        return redirect()->route('admin.brand.index');
    }
    public function index()
    {
        $list = Brand::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->select("id","image","name","slug","status")
        ->get();
        $htmlsortorder="";
        foreach($list as $row){
            $htmlsortorder.="<option value='".($row->sort_order+1)."'>sau: ".$row->name."</option>";
        }
        return view("backend.brand.index",compact("list","htmlsortorder"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        $brand=new Brand();
        $brand->name=$request->name;
        $brand->description=$request->description;
        $brand->sort_order=$request->sort_order;
        // $brand->image=$request->image;
        if ($request->image) {
            $fileName = date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('images/brands/'), $fileName);
            $brand->image = $fileName;
        }
        $brand->status=$request->status;
        $brand->slug=Str::of($request->name)->slug('-');
        $brand->created_at=date('Y-m-d H:i:s');
        $brand->created_by=Auth::id()??1;

        $brand->save();
        return redirect()->route('admin.brand.index');
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
