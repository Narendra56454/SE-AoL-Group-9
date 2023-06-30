<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class CategoryController extends Controller
{
    public function category($category)
    {
        $vendors = Vendor::where('category', $category)->get();

        return view('category', compact('category', 'vendors'));
    }
}
