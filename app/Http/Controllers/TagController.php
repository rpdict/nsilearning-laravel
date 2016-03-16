<?php

namespace Demo\Http\Controllers;

use Illuminate\Http\Request;

use Demo\Http\Controllers\Controller;
use Demo\Tag;

class TagController extends Controller
{
    public function showAllTags()
    {
        return view('tag.tags', [
            'tags' => Tag::getAllTags()
        ]);
    }

    public function showTag($tagId)
    {
        $tag = Tag::findOrFail($tagId);
        return view('tag.tag', [
            'tag' => $tag
        ]);
    }

    public function showCreateTag()
    {
        return view('tag.create');
    }

    public function create(Request $request)
    {
        $tag = Tag::createTag($request->only('name', 'description'));
        return redirect("/tags/{$tag->id}");
    }
}
