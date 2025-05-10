<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function createproducts(){
        return view("products.create", ['products'=> Product::all()], ['types'=> Type::all()]);
    }
    public function storeproducts(Request $request){
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price'=> $request->price,
            'quantity'=> $request->quantity,
            'type_id'=> $request->type_id,
        ]);
        return redirect()->back();
    }
    public function createtypes(){
        return view("types.create");
    }
    public function storetypes(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        try {
            Type::create(['name' => $request->name]);
            return redirect()->back()->with('success', 'Tipo salvo com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao salvar o tipo.');
        }
    }
    
    public function showlist(Request $request) {
        $products = Product::with('type')->get(); // carrega os produtos e seus tipos relacionados
        return view('products/listProducts', compact('products'));
    }
    
    
}