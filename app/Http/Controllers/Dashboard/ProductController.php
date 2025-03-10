<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Unit;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('dashboard.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();
        $units = Unit::where('status', 1)->get();
        return view('dashboard.products.create', compact('categories', 'brands', 'units'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|exists:categories,id',
            'brand' => 'required|exists:brands,id',
            'unit' => 'required|exists:units,id',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0|max:100',
            'visibility' => 'nullable|string|in:Visible,Hidden',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tags' => 'nullable|array',
            'tags.*' => 'nullable|string|max:255',
        ]);

        dd($request->toArray());

        // Handle product image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/products/'), $imageName);
            $imagePath = 'uploads/products/' . $imageName;
        }

        // Store product
        $product = Product::create([
            'user_id' => auth()->id(), // Assuming user is logged in
            'name' => $request->name,
            'category_id' => $request->category,
            'brand_id' => $request->brand,
            'unit_id' => $request->unit,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'discount' => $request->discount ?? 0,
            'visibility' => 1,
            'image' => $imagePath,
            'status' => 1, // Default active
            'refundable' => $request->has('refundable') ? 1 : 0,
        ]);

        // Store gallery images
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $galleryName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/product_gallery/'), $galleryName);
                $galleryPath = 'uploads/product_gallery/' . $galleryName;
                $product->gallery()->create(['image' => $galleryPath]);
            }
        }

        // Store tags
        if ($request->tags) {
            foreach ($request->tags as $tag) {
                $product->tags()->create(['name' => $tag]);
            }
        }

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();
        $units = Unit::where('status', 1)->get();
        return view('dashboard.products.edit', compact('product', 'categories', 'brands', 'units'));
    }

    public function update(Request $request, Product $product)
    {
        dd($request->toArray());
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|exists:categories,id',
            'brand' => 'required|exists:brands,id',
            'unit' => 'required|exists:units,id',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0|max:100',
            'visibility' => 'required|string|in:Visible,Hidden',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tags' => 'nullable|array',
            'tags.*' => 'nullable|string|max:255',
        ]);

        // Handle product image update
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/products/'), $imageName);
            $product->image = 'uploads/products/' . $imageName;
        }

        // Update product details
        $product->update([
            'name' => $request->name,
            'category_id' => $request->category,
            'brand_id' => $request->brand,
            'unit_id' => $request->unit,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'discount' => $request->discount ?? 0,
            'visibility' => $request->visibility,
            'status' => 1,
            'refundable' => $request->has('refundable') ? 1 : 0,
        ]);

        // Handle gallery image updates
        if ($request->hasFile('gallery')) {
            // Delete old gallery images
            foreach ($product->gallery as $galleryImage) {
                if (file_exists(public_path($galleryImage->image))) {
                    unlink(public_path($galleryImage->image));
                }
                $galleryImage->delete();
            }

            // Store new gallery images
            foreach ($request->file('gallery') as $image) {
                $galleryName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/product_gallery/'), $galleryName);
                $galleryPath = 'uploads/product_gallery/' . $galleryName;
                $product->gallery()->create(['image' => $galleryPath]);
            }
        }

        // Update tags
        $product->tags()->delete();
        if ($request->tags) {
            foreach ($request->tags as $tag) {
                $product->tags()->create(['name' => $tag]);
            }
        }

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
