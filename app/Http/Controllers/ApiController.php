<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;

class ApiController extends Controller
{
    public function productDetail($id){
        $product = Product::find($id);
        if(isset($product)){
        	$product->product_gif = asset('storage/'.$product->product_gif);
            return response()->json(['status' => 1, 'message'=> 'Product Found', 'data' => $product ]);
        }
        
        return response()->json(['status' => 0, 'message' => 'No Such Product Found'  ]);
    }

    public function products(){
        $products = Product::all();
        foreach ($products as $key => $value) {
        	$value->banner_image = asset('storage/'.$value->banner_image);
        }
        if(isset($products)){
            return response()->json(['status' => 1, 'message'=> 'Products Found', 'data' => $products ]);
        }
        
        return response()->json(['status' => 0, 'message' => 'No Products Found'  ]);
    }
}
