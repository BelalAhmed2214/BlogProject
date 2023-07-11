<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTagRequest;
use App\Http\Requests\Admin\UpdateTagRequest;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagRequest $request)
    {
        Tag::create($request->validated());
        return redirect()->route('admin.tags.index')->with('add','Tag Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view ('admin.tags.edit', compact('tag'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update($request->validated());
        return redirect()->route('admin.tags.index')->with('update','Tag Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //Retrieve all Post models that are linked to the Tag being deleted, using the posts() relationship method of the Tag model. This returns a collection of Post models.
        foreach ($tag->posts as $post) {
            //For each Post model in the collection, call the detach() method on its tags() relationship to remove the link to the Tag being deleted. This effectively removes the tag from the post's list of tags.
            $post->tags()->detach($tag);
        }

        if (!$tag->posts()->count()) {
            $tag->delete();
        }

        return redirect()->route('admin.tags.index')->with('delete','Tag Deleted Successfully');
    }
}
