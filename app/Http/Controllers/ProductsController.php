<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\products;

class ProductsController extends Controller
{
    public function index(){

    }

    public function create(){
        return view('products.create');
    }

    public function store(){
        $product = new products;
        $product->nama = request('namaproduk');
        $product->deskripsi = request('deskripsiproduk');
        $product->gambar = request()->file('gambar')->store('public/images');
        $product->save();

        // var_dump(Request('namaproduk'));
        // var_dump(Request('deskripsiproduk'));
        // var_dump(Request('formfile'));
    }
}
