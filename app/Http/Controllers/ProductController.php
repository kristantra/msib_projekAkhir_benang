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
        $fabricTypeId = $request->input('fabric_type_id');
        $products = Product::query()->with('fabricType');

        if ($sort == 'fabricType' && $fabricTypeId) {
            $products = $products->where('fabric_type_id', $fabricTypeId);
        }

        $products = $products->orderBy('id')->paginate(12);
        $fabricTypes = FabricType::all();
        return view('bukan_admin.product.index', compact('products', 'fabricTypes'));
    }
}
