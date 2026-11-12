<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function productos(){

        $products=Product::all();


        return view('productos',[
            'products'=>$products
        ]);

    }

    public function view(int $id){

    return view('detalle',[
        'product' => Product::findOrFail($id)

    ]);

    }
}
