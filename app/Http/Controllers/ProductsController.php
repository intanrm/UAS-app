<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $Products = Product::paginate(20);

        return view('dashboard.Product.index')->with('Products', $Products);
    }

    public function create() {
        return view('dashboard.Product.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'thumbnail' => 'required|file',
            'description' => 'required'
        ]);
        
        $file= $request->file('thumbnail');
        $fileName = $file->hashName();
        $file->storeAs('/public/Products', $fileName);
        $fileDir = "/Products/{$fileName}";

        Product::create(array_merge(
            $request->all(), 
            [
                'thumbnail' => $fileDir
            ]
        ));
        return redirect()->route('dashboard.Product.index')->withSuccess('Source created');
    }

    public function edit($id) {
        $Product = Product::findOrFail($id);
        return view('dashboard.Product.edit')->with('Product', $Product);
    }

    public function update($id, Request $request) {
        $Product = Product::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $thumbnail = $Product->thumbnail;
        
        if($request->hasFile('thumbnail')) {
            $file= $request->file('thumbnail');
            $fileName = $file->hashName();
            $file->storeAs('/public/Products', $fileName);
            $thumbnail = "/Products/{$fileName}";
        }

        $Product->update(array_merge(
            $request->all(), 
            [
                'thumbnail' => $thumbnail
            ]
        ));
        return redirect()->route('dashboard.Product.index')->withSuccess('Source updated');
    }

    public function destroy($id) {
        Product::findOrFail($id)->delete();
        return redirect()->route('dashboard.Product.index')->withSuccess('Source deleted');
    }
}
