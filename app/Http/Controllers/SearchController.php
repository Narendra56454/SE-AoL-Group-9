<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $priceFilters = $request->input('price', []);
        $ratingFilters = $request->input('rating', []);
        
        $queryBuilder = Vendor::query();
        
        // Apply price filters
        if (in_array('harga-maksimum', $priceFilters)) {
            $queryBuilder->where('price', '<=', $request->input('harga-maksimum-value', 0));
        }
        
        if (in_array('harga-minimum', $priceFilters)) {
            $queryBuilder->where('price', '>=', $request->input('harga-minimum-value', 0));
        }
        
        if (in_array('10.000-30.000', $priceFilters)) {
            $queryBuilder->whereBetween('price', [10000, 30000]);
        }
        
        if (in_array('30.000-70.000', $priceFilters)) {
            $queryBuilder->whereBetween('price', [30000, 70000]);
        }
        
        if (in_array('70.000+', $priceFilters)) {
            $queryBuilder->where('price', '>=', 70000);
        }
        
        // Apply rating filters
        if (in_array('semua-rating', $ratingFilters)) {
            // Do nothing, retrieve all ratings
        }
        
        if (in_array('rating-4', $ratingFilters)) {
            $queryBuilder->where('rating', '=', 4);
        }
        
        if (in_array('rating-5', $ratingFilters)) {
            $queryBuilder->where('rating', '=', 5);
        }
        
        // Perform the search
        $results = $queryBuilder->where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'like', '%' . $query . '%')
                ->orWhere('category', 'like', '%' . $query . '%')
                ->orWhere('location', 'like', '%' . $query . '%')
                ->orWhere('description', 'like', '%' . $query . '%');
        })->get();
        
        // Return the view with the search results
        return view('search')->with('results', $results);
    }
}
