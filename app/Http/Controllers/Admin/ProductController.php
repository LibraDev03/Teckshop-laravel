<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = Category::orderBy('name','ASC')->select('id','name')->get();
        return view('admin.product.create' , compact('cats'));    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products,name',
            'price' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);
        
        $data = $request->only('name' , 'price' , 'description' , 'category_id');

        // dd( $data);
         
        $img_name = $request->image->hashName();
        
        $request->image->move(public_path('assets/img/product'), $img_name);
        $data['image'] = $img_name;

        // dd($data);

        if(Product::create($data)) {
            return redirect()->route('product.index')->with('suc', 'Added successful products');
        }
        return redirect()->back()->with('fail', 'Added fail products');
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
        $cats = Category::orderBy('name','ASC')->select('id','name')->get();
        $products = Product::find($id);
        return view('admin.product.edit' , compact('products','cats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = Product::find($id);
        $request->validate([
            'name' => 'required|unique:products,name,' . $products->id,
            'price' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        // dd($data1);

        $data = $request->only('name','price','description','category_id');

        // biến has kiểm tra có ảnh hay không
        if($request->has('image')){
            $img_name = $request->image->hashName();
            $request->image->move(public_path('assets/img/product'), $img_name);
            $data['image'] = $img_name;
        }

       if($products->update($data)) {
        return redirect()->route('product.index');
        }

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        
        // xóa ảnh đã ma hóa khi xóa sản phẩm
        if($product && $product->image){
            $image_path = public_path('assets/img/product/' . $product->image);
            if(file_exists($image_path)) {
                unlink($image_path);
            }
        }

        if($product->delete()){
            return redirect()->route('product.index');
        }
    }
}
