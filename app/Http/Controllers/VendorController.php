<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function vendor($vendor)
    {
        $vendor = Vendor::where('name', $vendor)->firstOrFail();
        
        return view('vendorDetail', compact('vendor'));
    }
}
