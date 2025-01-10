<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('Admin.product', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('Admin.new_product', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'string|max:255',
            'product_price' => 'required|numeric|min:0',
            'product_photo_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_photo_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_photo_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_photo_4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_photo_5' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'availability' => 'required|in:in stock,out of stock',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'brand' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:255',
            'product_dimensions' => 'nullable|string',
            'vehicle_type' => 'nullable|string',
            'warranty' => 'nullable|string|max:255',
            'car_model' => 'nullable|string|max:255',
            'status' => 'nullable|in:best seller,trending product,popular product',
            'category_id' => 'required|exists:product_categories,category_id',
        ]);

        // Store each photo and save the path in a variable
        $productPhoto1Path = $request->hasFile('product_photo_1') ? Storage::put('public/product_images', $request->file('product_photo_1')) : null;
        $productPhoto2Path = $request->hasFile('product_photo_2') ? Storage::put('public/product_images', $request->file('product_photo_2')) : null;
        $productPhoto3Path = $request->hasFile('product_photo_3') ? Storage::put('public/product_images', $request->file('product_photo_3')) : null;
        $productPhoto4Path = $request->hasFile('product_photo_4') ? Storage::put('public/product_images', $request->file('product_photo_4')) : null;
        $productPhoto5Path = $request->hasFile('product_photo_5') ? Storage::put('public/product_images', $request->file('product_photo_5')) : null;

        // Create the product and store in the database
        $product = Product::create([
            'product_name' => $request->input('product_name'),
            'product_price' => $request->input('product_price'),
            'product_photo_1' => $productPhoto1Path ? Storage::url($productPhoto1Path) : null,
            'product_photo_2' => $productPhoto2Path ? Storage::url($productPhoto2Path) : null,
            'product_photo_3' => $productPhoto3Path ? Storage::url($productPhoto3Path) : null,
            'product_photo_4' => $productPhoto4Path ? Storage::url($productPhoto4Path) : null,
            'product_photo_5' => $productPhoto5Path ? Storage::url($productPhoto5Path) : null,
            'availability' => $request->input('availability'),
            'short_description' => $request->input('short_description'),
            'description' => $request->input('description'),
            'brand' => $request->input('brand'),
            'color' => $request->input('color'),
            'product_dimensions' => $request->input('product_dimensions'),
            'vehicle_type' => $request->input('vehicle_type'),
            'warranty' => $request->input('warranty'),
            'car_model' => $request->input('car_model'),
            'status' => $request->input('status'),
            'category_id' => $request->input('category_id'),
        ]);

        return redirect()->route('admin.products')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('Admin.product_edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'product_name' => 'string|max:255',
            'product_price' => 'required|numeric|min:0',
            'product_photo_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_photo_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_photo_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_photo_4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_photo_5' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'availability' => 'required|in:in stock,out of stock',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'brand' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:255',
            'product_dimensions' => 'nullable|string',
            'vehicle_type' => 'nullable|string',
            'warranty' => 'nullable|string|max:255',
            'car_model' => 'nullable|string|max:255',
            'status' => 'nullable|in:best seller,trending product,popular product',
            'category_id' => 'required|exists:product_categories,category_id',
        ]);

        // Handle image uploads and store the paths using Storage::put
        $productPhoto1Path = $request->hasFile('product_photo_1') ? Storage::put('public/product_images', $request->file('product_photo_1')) : $product->product_photo_1;
        $productPhoto2Path = $request->hasFile('product_photo_2') ? Storage::put('public/product_images', $request->file('product_photo_2')) : $product->product_photo_2;
        $productPhoto3Path = $request->hasFile('product_photo_3') ? Storage::put('public/product_images', $request->file('product_photo_3')) : $product->product_photo_3;
        $productPhoto4Path = $request->hasFile('product_photo_4') ? Storage::put('public/product_images', $request->file('product_photo_4')) : $product->product_photo_4;
        $productPhoto5Path = $request->hasFile('product_photo_5') ? Storage::put('public/product_images', $request->file('product_photo_5')) : $product->product_photo_5;

        // Update product in the database
        $product->update([
            'product_name' => $request->input('product_name'),
            'product_price' => $request->input('product_price'),
            'product_photo_1' => $productPhoto1Path ? Storage::url($productPhoto1Path) : $product->product_photo_1,
            'product_photo_2' => $productPhoto2Path ? Storage::url($productPhoto2Path) : $product->product_photo_2,
            'product_photo_3' => $productPhoto3Path ? Storage::url($productPhoto3Path) : $product->product_photo_3,
            'product_photo_4' => $productPhoto4Path ? Storage::url($productPhoto4Path) : $product->product_photo_4,
            'product_photo_5' => $productPhoto5Path ? Storage::url($productPhoto5Path) : $product->product_photo_5,
            'availability' => $request->input('availability'),
            'short_description' => $request->input('short_description'),
            'description' => $request->input('description'),
            'brand' => $request->input('brand'),
            'color' => $request->input('color'),
            'product_dimensions' => $request->input('product_dimensions'),
            'vehicle_type' => $request->input('vehicle_type'),
            'warranty' => $request->input('warranty'),
            'car_model' => $request->input('car_model'),
            'status' => $request->input('status'),
            'category_id' => $request->input('category_id'),
        ]);

        return redirect()->route('admin.products')->with('success', 'Product updated successfully.');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete each photo if it exists
        foreach (['product_photo_1', 'product_photo_2', 'product_photo_3', 'product_photo_4', 'product_photo_5'] as $photoField) {
            if ($product->$photoField) {
                Storage::disk('public')->delete($product->$photoField);
            }
        }

        $product->delete();

        return redirect()->route('admin.products')->with('success', 'Product deleted successfully!');
    }

    public function view($id)
    {
        $product = Product::find($id);

        if ($product) {
            return view("Admin.admin_product_view", compact('product'));
        } else {
            return redirect()->back()->with('error', 'Product not found.');
        }
    }


}
