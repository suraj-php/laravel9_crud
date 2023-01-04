<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
    	$categories = Category::all();

    	return view('categories.list', ['categories' => $categories]);
    }

    public function add() {
    	return view('categories.new');
    }

    public function store(Request $req) {
    	$category = new Category;
    	$category->title = $req->title;
    	$category->save();
    	return redirect('/');
    }

}
