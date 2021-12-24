<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Str;

class TagController extends Controller
{   
    public function index(){
        $tags=Tag::orderBy('id','desc')->get();
        return view('admin.tags.index',compact('tags'));
    }
    public function addTag()
    {   
        return view('admin.tags.add');
    }
    public function storeTag(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100|unique:tags,title',
            'slug' => 'required|string|max:60|unique:tags,slug',
            'tag_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $tag = new Tag();
        $tag->title = $request->title;
        $tag->slug = $request->slug;
        $image = $request->file('tag_img'); 
        if($image != '') {
            $ext = pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
            $f_n = Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME),'-');
            $imagename = $f_n.'-'.time() . '.' .$ext;
            $image->move('uploads/tags/images', $imagename);
            $tag->img = $imagename;
        }
        $tag->save();
        return redirect()->route('tag.list')->with('success','Tag Added Successfully');
    }
    public function editTag(Tag $tag)
    {   
        return view('admin.tags.edit',compact('tag'));
    }
    public function updateTag(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|string|max:100|unique:tags,title,'.$id,
            'slug' => 'required|string|max:60|unique:tags,slug,'.$id,
            'tag_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $tag = Tag::findOrFail($id);
        $tag->title = $request->title;
        $tag->slug = $request->slug;
        $image = $request->file('tag_img'); 
        if($image != '') {
            $ext = pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
            $f_n = Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME),'-');
            $imagename = $f_n.'-'.time() . '.' .$ext;
            $image->move('uploads/tags/images', $imagename);
            $tag->img = $imagename;
        }else{
            $tag->img = $request->old_img;
        }
        $tag->update();
        return redirect()->route('tag.list')->with('success','Tag Updated Successfully');
    }
    public function deleteTag($id)
    {   
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect()->route('tag.list')->with('success','Tag Deleted Successfully');
    }
}
