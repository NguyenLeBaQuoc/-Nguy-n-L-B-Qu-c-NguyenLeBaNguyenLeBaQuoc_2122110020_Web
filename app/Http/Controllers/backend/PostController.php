<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Post::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select("id", "image", "title", "detail", "type")
            ->get();
        return view("backend.post.index", compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list = Post::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->select("id","image","title","detail","type")
        ->get();

        return view("backend.post.create",compact("list"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post=new Post();
        $post->title=$request->title;
        $post->detail=$request->detail;
        $post->description=$request->description;
        $post->topic_id=$request->topic_id;
        $post->type=$request->type;
        // $post->image=$request->image;
        if ($request->image) {
            $fileName = date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('images/posts/'), $fileName);
            $post->image = $fileName;
        }
        $post->status=$request->status;
        $post->slug=Str::of($request->name)->slug('-');
        $post->created_at=date('Y-m-d H:i:s');
        $post->created_by=Auth::id()??1;

        $post->save();
        return redirect()->route('admin.post.index');
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
