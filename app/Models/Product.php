<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected static $product,$image,$imageName,$imageDir,$imageUrl;
    use HasFactory;

    public static function saveImage($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = 'product_'.time().'.'.self::$image->getClientOriginalExtension();
        self::$imageDir     = 'Upload/product/';
        self::$image->move(self::$imageDir,self::$imageName );
        self::$imageUrl = (self::$imageDir.self::$imageName);

        return self::$imageUrl;
    }

    public static function addProduct($request)
    {
        self::$product = new Product();

        self::$product->title       = $request->title;
        self::$product->product     = $request->product;
        self::$product->price       = $request->price;
        self::$product->image       = self::saveImage($request);

        self::$product->save();
    }
}
