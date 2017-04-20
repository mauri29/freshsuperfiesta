<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getResults(Request $request)
    {
    	$query = $request->input('query');
    	//dd($query);
    	if(!$query){
    		return redirect()->route('product.index');
    	}
        $products = Product::where(DB::raw("CONCAT(title, ' ', country)"), 'LIKE', "%{$query}%")->get();
        return view('search.results', ['products' => $products]);
    	//return view('search.results')->with('products', $products);
    }
}
