<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;  


class Products extends Model
{

    // Add Product in database

    public static function addProducts($request) {
        $product = new Products;
        $product->name = $request->name;
        $product->date = $request->date;
        $product->origin = $request->origin;
        $product->price = $request->price;
        $product->artistname = $request->artistname;
        $product->save();
    }



    // get all products 

    public static function getAllProducts() {
        return Products::All();
    }

    // get One product 

    public static function getOneProduct($request) {
        return Products::find($request->id);
    }
    

    // Delete product by id 

    public static function deleteOneProduct($request) {
        Products::destroy($request->id);
        return; 
    }

    // Update product by id 


    public static function updateProduct($request) {
        $product = Products::find($request->id);
        $product->name = $request->name;
        $product->date = $request->date;
        $product->origin = $request->origin;
        $product->price = $request->price;
        $product->artistname = $request->artistname;
        $product->save();
        return;
    }

}
