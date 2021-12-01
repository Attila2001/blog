<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index(){

        $posts = BlogPost::all();
        return $posts;
    }
    public function create(){

    }
    public function store(request $REQUEST){
        
        
    }
    public function show(blogPost $blogPost){
        return $blogPost;
    }
    public function edit(blogPost $blogPost){
        
    }
    public function update(request  $REQUEST, blogPost $blogPost){
        
    }
    public function remove(blogPost $blogPost){
        
    }
}
