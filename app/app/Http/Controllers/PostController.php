<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class PostController extends BaseController
{
    /**
     * show list of blog posts
     * 
     * @return \Illuminate\View\View
     */
    public function index() {
        return view('post.index');
    }

    /**
     * show the form to create a blog post
     * 
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('post.create');
    }

    /**
     * 
     */
    public function confirm(Request $request) {
        $validated = $request->validate([
            'title' => ['bail', 'required', 'unique:posts', 'max:255'],
            'description' => ['bail', 'required'],
        ]);

        $inputs = $request->all();

        return view('post.confirm', [
            'inputs' => $inputs
        ]);
    }

    /**
     * Store a new blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'description' => 'required',
        ]);

        $action = $request->input('action');
        $inputs = $request->except('action');

        if ($action !== 'submit') {
            return redirect()
                ->route('post.create')
                ->withInput($inputs);
        } else {
            // process your data
            // $post = new Post;
            // $post->title = $request->title;
            // $post->description = $request->description;
            // $post->save();
            return $validated;
        }
    }
}
