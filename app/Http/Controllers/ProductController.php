<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return ('products');
    }

    function detail($id, $category = null)
    {
        if ($category != null) {
            return 'Details products: ' . $id . ' Category: ' . $category;
        } else {
            return 'Details products: ' . $id;
        }
    }

    function create()
    {
        return "FORM FOR CREATE PRODUCTS";
    }
}
