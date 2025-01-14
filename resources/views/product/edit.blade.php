@extends('layouts.master')

@section('body')
<h3 class="text-gray-700 text-3xl font-semibold">Tambah Produk</h3>

<div class="mt-8">
    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-semibold capitalize">Form Tambah Produk</h2>

            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="product_name">Nama Produk</label>
                        <input name="product_name" id="product_name" class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text" placeholder="Masukkan nama produk">
                    </div>

                    <div>
                        <label class="text-gray-700" for="price">Harga</label>
                        <input name="price" id="price" class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="number" placeholder="Masukkan harga produk">
                    </div>

                    <div>
                        <label class="text-gray-700" for="stock">Stok</label>
                        <input name="stock" id="stock" class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="number" placeholder="Masukkan stok produk">
                    </div>

                    <div>
                        <label class="text-gray-700" for="product_image">Upload Gambar</label>
                        <input name="product_image" id="product_image" class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="file">
                    </div>
                </div>

                <div class="flex justify-end mt-4">
                    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500 focus:outline-none focus:bg-green-500">Simpan Produk</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
