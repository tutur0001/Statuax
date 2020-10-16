<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\NavController;
use App\Models\Products;

class ActionController extends Controller
{
    // CRUD FUNCTION


    // Add product after on list page

    public function addProduct(Request $request) {
        Products::addProducts($request);
        return redirect('statuette');
    }


    // Delete product after return on list page
    public function deleteProduct(Request $request) {
        Products::deleteOneProduct($request);
        return redirect('statuette');
    }


    // Update One product after return on list page

    public function updateOneProduct(Request $request) {
        Products::updateProduct($request);
        return redirect('statuette');
    }
}
