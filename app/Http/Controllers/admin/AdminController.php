<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    //
    public function index(){
        $viewData= [];
        $viewData['title'] = "Admin Dashboard" ;
        return view('admin.main') ->with("viewData", $viewData);
    }
 


    ########################function dung de them san pham moi ##########################
   public function store(Request $request){
    // 1 . Validate dữ liệu đầu vào
    $request->validate([
            'name'             => 'required|max:225',
            'description'      => 'required',
            'price'            => 'required|numeric|gt:0',
            'discounted_price' => 'nullable|numeric|lt:price',
            'stock'            => 'nullable|integer|min:0',
            'category_id'      => 'nullable|exists:categories,id',
            'status'           => 'nullable|in:active,inactive',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
     $baseSlug = Str::slug($request->input('name'));
    // 2️ . Tạo sản phẩm mới, trước mắt chưa có hình
     $product = Product::create([
            'name'             => $request->input('name'),
            'slug'             => $baseSlug,
            'description'      => $request->input('description'),
            'price'            => $request->input('price'),
            'discounted_price' => $request->input('discounted_price', null),
            'stock'            => $request->input('stock', 0),
            'category_id'      => $request->input('category_id', null),
            'status'           => $request->input('status', 'active'),
            'image'            => null, // xử lý sau nếu có hình
        ]);

    // 3️ . Nếu có hình thì xử lý upload
    if ($request->hasFile('image')) {
            $imageName = $product->slug . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('products', $imageName, 'public');
            $product->update(['image' => $imageName]);
        }
    

    // 4️ . Quay lại trang trước và báo thành công
    return back()->with('success', 'Thêm sản phẩm thành công!');
}

#####################function dung de xoa san pham ##########################
    public function delete($id){
        Product::destroy($id);
        return back();
    }

   

}
