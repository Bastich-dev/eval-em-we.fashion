<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function index(){
        return view('admin.index');
    } 

    public function soldes(){
    } 


    public function show($id){
        $productData = [
            'id'=>$id,
            'title'=> 'title',
            'description'=> 'description',
        ];
        return view('product.index', [
            'productData'=> $productData
        ]);
    }
}
