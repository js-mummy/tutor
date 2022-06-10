<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        Tag::create([
            'title' => 'My Awesome Blog Пост',
        ]);


/*        $tag = new Tag();
        $tag->title = 'My Awesome Blog Пост';
        $tag->save();*/


        return view('admin.index');
    }
}
