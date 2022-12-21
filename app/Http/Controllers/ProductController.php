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

    public function deleteProduct(Request $request)
    {
        $product = Product::find($request->deleteProduct);

        if ($product->image)
        {
            unlink($product->image);
        }
        $product->delete();
        return back()->with('msg','Product Deleted');
    }

}
