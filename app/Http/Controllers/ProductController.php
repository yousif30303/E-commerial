<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Show()
    {
       $products = Product::get();
       

       return view('home',[
        'products'=>$products
    ]);

    }
    
    public function ShowHome()
    {
        $products = Product::get();



        $carts = auth()->user()->carts()->get();

        return view('body',[
            'products'=>$products,
            'carts'=>$carts
        ]);


    }

    public function product(Product $product)
    {
        return view('products',[
            'product'=>$product
        ]);
    }


    public function ShowCreateProduct()
    {
        return view('create_product');
    }


    public function CreateProduct(Request $request,Product $product)
    {
        $request->validate([
            'file'=>'required|image'
        ]);

        $file = $request->file('file');

        $originalFile = $file->getClientOriginalName();

        $destinationPath = 'image/products';

        $file->move($destinationPath, $originalFile);

        Product::create([
            'item_brand' => $request->item_brand,
            'item_name' => $request->item_name,
            'item_price' => $request->item_price,
            'item_image' => '/image/products/'.$originalFile
        ]);

        return redirect()->route('ShowHome');
        
    }

}
