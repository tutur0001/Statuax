<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class NavController extends Controller
{


    // Menu navigation routing function


    public function home() {
        return view('home');
    }

    public function statuette() {
        return view('statuette');
    }

    public function service() {
        return view('service');
    }

    public function contact() {
        return view('contact');
    }

    // End of Menu navigation routing function

    // Display products on list page

    public function displayProducts() {
        $products = Products::getAllProducts();
        return view('statuette',['products' => $products]);
    }

    // End of Display products 


    // function get one product for edit after return on update page

    public function getOneProductForEdit(Request $request) {
        $product = Products::getOneProduct($request);
        return view('update', ['product' => $product]);
    }
}
