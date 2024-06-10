<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Topic;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Menu::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->select("id","name","link","position")
        ->get();
        $categories= Category::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->select("id","name")
        ->get();
        $brands= Brand::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->select("id","name")
        ->get();
        $topics= Topic::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->select("id","name")
        ->get();
        $pages= Post::where([['id','!=',0],['type','=','page']])
        ->orderBy('created_at','DESC')
        ->select("id","title")
        ->get();
        return view("backend.menu.index",compact("list","categories","brands","topics","pages"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list = Menu::where('menu.status','!=',0)
        ->orderBy('menu.created_at','DESC')
        ->select("menu.id","menu.name","menu.link")
        ->get();
        return view("backend.menu.create",compact("list"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(isset($request->createCategory)){
            $listid = $request->categoryid;
            if($listid){
                foreach($listid as $id){
                    $category = Category::find($id);
                    if($category != null){
                        $menu = new Menu();
                        $menu->name = $category->name;
                        $menu->link = 'categorys/' . $category->slug;
                        $menu->sort_order = '0';
                        $menu->parent_id = '0';
                        $menu->type = 'category';
                        $menu->position = $request->position;
                        $menu->table_id = $id;
                        $menu->created_at = date('Y-m-d H:i:s');
                        $menu->created_by = Auth::id()??1;
                        $menu->status = $request->status;
                        $menu->save();
                    }
                }
                return redirect()->route('admin.menu.index');
            }else{
                echo "Không có";
            }
        }

        if(isset($request->createBrand)){
            if(isset($request->createBrand)){
                $listid = $request->brandid;
                if($listid){
                    foreach($listid as $id){
                        $brand = Brand::find($id);
                        if($brand != null){
                            $menu = new Menu();
                            $menu->name = $brand->name;
                            $menu->link = 'brands/' . $brand->slug;
                            $menu->sort_order = '0';
                            $menu->parent_id = '0';
                            $menu->type = 'brand';
                            $menu->position = $request->position;
                            $menu->table_id = $id;
                            $menu->created_at = date('Y-m-d H:i:s');
                            $menu->created_by = Auth::id()??1;
                            $menu->status = $request->status;
                            $menu->save();
                        }
                    }
                    return redirect()->route('admin.menu.index');
                }else{
                    echo "Không có";
                }
            }
        }

        if(isset($request->createTopic)){
            if(isset($request->createTopic)){
                $listid = $request->topicid;
                if($listid){
                    foreach($listid as $id){
                        $topic = Topic::find($id);
                        if($topic != null){
                            $menu = new Menu();
                            $menu->name = $topic->name;
                            $menu->link = 'topics/' . $topic->slug;
                            $menu->sort_order = '0';
                            $menu->parent_id = '0';
                            $menu->type = 'topic';
                            $menu->position = $request->position;
                            $menu->table_id = $id;
                            $menu->created_at = date('Y-m-d H:i:s');
                            $menu->created_by = Auth::id()??1;
                            $menu->status = $request->status;
                            $menu->save();
                        }
                    }
                    return redirect()->route('admin.menu.index');
                }else{
                    echo "Không có";
                }
            }
        }

        if(isset($request->createPage)){
            if(isset($request->createPage)){
                $listid = $request->pageid;
                if($listid){
                    foreach($listid as $id){
                        $page = Post::where([['id','=',$id],['type','=','page']])->first();
                        if($page != null){
                            $menu = new Menu();
                            $menu->name = $page->title;
                            $menu->link = 'pages/' . $page->slug;
                            $menu->sort_order = '0';
                            $menu->parent_id = '0';
                            $menu->type = 'page';
                            $menu->position = $request->position;
                            $menu->table_id = $id;
                            $menu->created_at = date('Y-m-d H:i:s');
                            $menu->created_by = Auth::id()??1;
                            $menu->status = $request->status;
                            $menu->save();
                        }
                    }
                    return redirect()->route('admin.menu.index');
                }else{
                    echo "Không có";
                }
            }
        }

        if(isset($request->createCustom)){
            if(isset($request->name, $request->link)){
                $menu = new Menu();
                $menu->name = $request->name;
                $menu->link = $request->link;
                $menu->sort_order = '0';
                $menu->parent_id = '0';
                $menu->type = 'custom';
                $menu->position = $request->position;
                $menu->created_at = date('Y-m-d H:i:s');
                $menu->created_by = Auth::id()??1;
                $menu->status = $request->status;
                $menu->save();
                return redirect()->route('admin.menu.index');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view("backend.menu.create");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("backend.menu.create");
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
