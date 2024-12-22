<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function store(CategoryRequest $request)
    {
        $categories = $request->only(['category_id', 'content']);
        Contact::create($categories);
        
    }
    //
    public function index()
    {
        $categories = $request->only(['content']);
        return view('confirm', compact('categories'));
    }
}
