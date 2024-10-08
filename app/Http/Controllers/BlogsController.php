<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs=Blogs::all();
        return view("dashboard.blogs.blogs",compact('blogs'));
    }

   
    public function create()
    {
        $action='Ajouter';
        return view ("dashboard.blogs.ajout_edit_blog" , compact('action'));
    }

    public function store(Request $request)
    {
        $image='';
        //enregistrer img dans le dossier public/images
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image= time().'.'.$request->image->extension();
            $request->image->move(public_path('images'),$image);
        }
        $request = array_merge($request->except('image'),['image'=>$image]);
        Blogs::create($request); 
 
        return redirect()->route('blogs.index'); 
    }

    

    
    public function edit($id)
    {
        $blog=Blogs::find($id);
        $action='Modifier';
        return view ("dashboard.blogs.ajout_edit_blog" , compact('blog','action'));
    }

   
    public function update(Request $request, $id)
    {
        $blog=Blogs::find($id);
        $image="";
        if($file = $request->hasFile('image')){
          $image= time().'.'.$request->image->extension();
          $request->image->move(public_path('images'),$image);
          $request = array_merge($request->except('image'),['image'=>$image]);
          $blog->update($request);
        }else{
            $blog->update($request->except('image'));
        }
        return redirect()->route('blogs.index'); 
    }

    
    public function destroy($id)
    {
        $blog=Blogs::find($id);
        $blog->delete();
        return redirect()->route('blogs.index');
    }
}
