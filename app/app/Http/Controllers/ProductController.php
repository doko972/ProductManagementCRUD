<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $content = [
            'name' => 'Nom',
            'title' => 'Liste des produits',
            'price' => 'Prix',
            'home' => 'Accueil',
            'description' => 'Description',
            'actions' => 'Actions',
            'modify' => 'Modifier',
            'delete' => 'Supprimer',
            'addproduct' => 'Ajouter un produit',
            'products' => Product::all()
        ];
        return view('productList', $content);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $content = [
            'name' => 'Nom:',
            'price' => 'Prix:',
            'description' => 'Description',
            'add'=> 'Ajouter'
        ];
        return view('createProduct', $content);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();
        return Redirect::route('product.index')->with('success', 'Produit ajouté avec succès!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('editProduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();
        return Redirect::route('product.index')->with('success', 'Produit mis à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return Redirect::route('product.index')->with('success', 'Produit supprimé avec succès!');
    }
}
