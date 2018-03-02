<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function category($slag)
    {
        $category = Category::where('slug',$slag)
            ->first();

        return view('blog.category', [
            'category' => $category,
            'articles' => $category->articles()->where('published',1)->paginate(5)
        ]);
    }

    public function article($slag)
    {

    }
}
