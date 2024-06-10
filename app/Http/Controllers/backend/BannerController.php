<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBannerRequest;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function status($id)
    {
        $banner = Banner::find($id);
        if ($banner) {
            // Đảo ngược trạng thái từ 1 sang 2 và ngược lại
            $banner->status = $banner->status == 1 ? 2 : 1;
            $banner->save();
        }

        return redirect()->route('admin.banner.index');
    }
    public function index()
    {
        $list = Banner::where('status', '!=', '0')
            ->orderBy('created_at', 'DESC')
            ->select('id', 'image', 'name', 'link', 'position')
            ->get();
        
        return view("backend.banner.index", compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $list = Banner::where('status', '!=', 0)
    //         ->orderBy('created_at', 'DESC')
    //         ->select('id', 'image', 'name', 'link', 'position')
    //         ->get();

    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {
        $banner = new Banner();
        $banner->name = $request->name;
        $banner->link = $request->link;
        $banner->position = $request->position;
        $banner->description = $request->description;
         // Corrected typo here
        // $banner->image = $request->image;
        if ($request->image) {
            $fileName = date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('images/banners/'), $fileName);
            $banner->image = $fileName;
        }
        $banner->status = $request->status;
        $banner->created_at = date('Y-m-d H:i:s');
        $banner->created_by = Auth::id() ?? 1;

        $banner->save();
        return redirect()->route('admin.banner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $list = Banner::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select("banner.*")
            ->get();

        return view('backend.banner.show', compact('list'));
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
