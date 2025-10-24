<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function show($id){
        $viewData= [];
        $viewData['title'] = "Product Details" ;
        $viewData['content'] = "Detailed information about the selected product.";
        $viewData['footer'] = "© 2024 LaptopShop. All rights reserved.";
        $viewData['products'] = Product::findOrFail($id);
        return view('products.show') ->with("viewData", $viewData);
    }
}
