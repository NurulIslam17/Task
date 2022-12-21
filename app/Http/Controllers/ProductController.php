<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function storeProduct(Request $request)
    {
        Product::addProduct($request);
        return redirect('/manage')->with('success','Product Added');

    }

    public function manage()
    {
        $product = Product::latest()->get();
//        return $product;
        return view('crud.manage',[
            'products'=>$product
        ]);
    }

}
