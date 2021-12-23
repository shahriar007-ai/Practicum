<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Str;

class TagController extends Controller
{
    public function addTag()
    {   
        $tags=Tag::where('status',1)->paginate(10);
        return view('admin.tags.add',compact('tags'));
    }
    public function storeTag(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100|unique:tags,title',
            'tag_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $tag = new Tag();
        $tag->title = $request->title;
        $tag->slug = Str::slug($request->title,'-');
        $image = $request->file('tag_img'); 
        if($image != '') {
            $ext = pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
            $f_n = Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME),'-');
            $imagename = $f_n.'-'.time() . '.' .$ext;
            $image->move('uploads/tags/images', $imagename);
            $tag->img = $imagename;
        }
        $tag->save();
        return redirect()->route('tag.add')->with('success','Tag Added Successfully');
    }
    public function editTag(Tag $tag)
    {   
        return view('admin.tags.edit',compact('tag'));
    }
    public function updateTag(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|string|max:100|unique:tags,title,'.$id,
            'tag_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $tag = Tag::findOrFail($id);
        $tag->title = $request->title;
        $tag->slug = Str::slug($request->title,'-');
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
        return redirect()->route('tag.add')->with('success','Tag Updated Successfully');
    }
    public function deleteTag($id)
    {   
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect()->route('tag.add')->with('success','Tag Deleted Successfully');
    }
}
