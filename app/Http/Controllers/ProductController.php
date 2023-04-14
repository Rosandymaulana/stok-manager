<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

        // $file = $request->file('image');
        // $nama_file = time() . "_" . $file->getClientOriginalName();
        // // $file->getClientOriginalName();
        // // $file->getClientOriginalExtension();
        // // $file->getRealPath();
        // // $file->getSize();
        // // $file->getMimeType();

        // $tujuan_upload = 'product_img';
        // $file->move($tujuan_upload, $nama_file);
        if ($file = $request->file('image')) {
            $filename = $file->getClientOriginalName();
            $image_name = $request->file('image')->storeAs('images', $filename, 'public');
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
        $file = $request->file('image');

        if ($file != '') {
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'storage/images';
            $file->move($tujuan_upload, $nama_file);
            $data['image'] = $nama_file;
            File::delete('storage/images/' . $product->image);
            // unlink('storage/images/' . $product->image);
        }

        // if ($request->hasFile('image')) {
        //     // unlink('public/' . $product->image);
        //     File::delete('public' . $product->image);
        //     $filename = $file->getClientOriginalName();
        //     $image_name = $request->file('image')->storeAs('images', $filename, 'public');
        //     // $file->move('images', 'public', $file->getClientOriginalName());
        //     $product->image = $image_name;
        // }

        // $destination = '/app/public/images/1.jpg' . $product->image;


        // if ($product->image && fileExists(public_path('images' . $product->image))) {
        //     // unlink('public' . $product->image);
        //     // unlink(public_path($product->image));
        //     // Storage::delete('public/images/' . $product->image);
        //     // File::delete('public' . $product->image);
        // }

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
