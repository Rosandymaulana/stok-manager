<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // $products = Product::paginate(5);
        // $products = Product::with('type_products')->get();

        return view('pages.dataBarang', [
            'products' => $products
        ]);
    }

    public function create()
    {
        $typeProducts = TypeProduct::all();
        return view('pages.createProducts', [
            'typeProducts' => $typeProducts,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'product_ID' => 'required',
            'product_name' => 'required',
            'buy_rate' => 'required',
            'type' => 'required',
            'initial_quantity' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png',
        ]);

        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        };

        Product::create([
            'product_ID' => $request->product_ID,
            'product_name' => $request->product_name,
            'buy_rate' => $request->buy_rate,
            'type' => $request->type,
            'initial_quantity' => $request->initial_quantity,
            'description' => $request->description,
            'image' => $image_name,
        ]);


        return redirect('/data_barang');
    }

    public function show(string $product_ID)
    {
        // $products = Product::find($product_ID);
        // return view('pages.show', [
        //     'products' => $products
        // ]);
    }

    public function edit(string $product_ID)
    {
        $products = Product::find($product_ID);
        $typeProducts = TypeProduct::all();

        return view('pages.edit', [
            'products' => $products,
            'typeProducts' => $typeProducts,
        ]);
    }

    public function update(Request $request, $product_ID)
    {
        $product = Product::find($product_ID);

        // $product->product_ID = $request->product_ID;
        $product->product_name = $request->product_name;
        $product->buy_rate = $request->buy_rate;
        $product->type = $request->type;
        $product->initial_quantity = $request->initial_quantity;
        $product->description = $request->description;

        if ($product->image && fileExists(storage_path('app/public/' . $product->image))) {
            Storage::delete('public' . $product->image);
        }

        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
            $product->image = $image_name;
        };

        // $image_name = $request->file('image')->store('images', 'public');
        // $product->image = $image_name;

        // $input = $request->all();
        $product->save();
        return redirect('data_barang');
    }

    public function destroy($product_ID)
    {
        Product::destroy($product_ID);
        return redirect('/data_barang');
    }
}
