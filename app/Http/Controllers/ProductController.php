<?php

namespace App\Http\Controllers;

use App\Models\FabricType;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->input('sort');
        $products = Product::query()->with('fabricType');


        if ($sort == 'fabricType') {
            // Join the fabric_types table to get the name for sorting
            $products = $products->join('fabric_types', 'products.fabric_type_id', '=', 'fabric_types.id')
                ->select('products.*')  // Avoid 'id' collision
                ->orderBy('fabric_types.name');
        } else {
            $products = $products->orderBy('id');
        }
        $products = $products->paginate(12);
        $fabricTypes = FabricType::all();
        return view('bukan_admin.product.index', compact('products', 'fabricTypes'));
    }
}
