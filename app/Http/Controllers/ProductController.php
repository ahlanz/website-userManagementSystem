<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);

        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama'   => 'required|min:5',
            'harga'  => 'required|numeric',
            'stock'  => 'required|numeric',
     ]);

        try {
        // Handle image upload
        $image = $request->file('gambar');
        $imageName = $image->hashName();
        $image->storeAs('public/products', $imageName);

        // Create product
        Product::create([
            'gambar' => $imageName,
            'nama'   => $request->nama,
            'harga'  => $request->harga,
            'stock'  => $request->stock,
        ]);

        
        return redirect()->route('product.index')->with('success', 'Data Berhasil Disimpan!');

        } catch (\Exception $e) {

        return back()->with('error', 'Terjadi kesalahan, coba lagi!');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('product.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
