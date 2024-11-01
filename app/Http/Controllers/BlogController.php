<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    

//  public function __construct(){
//     $this->middleware('auth')->only(['create']);
//  }


    public function index()
    {
        //
    }
// public function __construct()
//     {
//         $this->middleware('auth')->only(["create"]);
//     }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {          
// 
        if(Auth::check()){

            $categories=Category::get();
            return view('theme.blogs.create',compact('categories'));
        }
        abort(403);
        //   $categories=Category::get();
        //     return view('theme.blogs.create',compact('categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest  $request)
    {
        $data= $request->validated();
     
         //to save image (uploading image)
        //1-we get the image
        $image=$request->image;
        //2-change its current name
        $newImageName = time().'-'.$image->getClientOriginalName();
        // dd($newImageName);
        //3-move image to my project with the new name(storge\public)
        $image->storeAs('blogs',$newImageName,'public');
        $data['user_id']=Auth::user()->id;
        //4-save new name to database
        $data['image']=$newImageName;

      Blog::create($data);
      
      return back()->with('status-blog','your blog added succefully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
