<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    function detail($id, $category = null)
    {

        if ($category != null) {
            return view('products.detail', [
                'id' => $id,
                'category' => $category
            ]);
        } else {
            $category = "";
            return view('products.detail', compact('id', 'category'));
        }
    }

    function create()
    {
        return "";
    }
}
