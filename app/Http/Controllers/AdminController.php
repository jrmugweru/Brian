<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\goods;
use App\Models\order;

class AdminController extends Controller
{
   public function view_category()
   {
      $data=category::all();
    return view ('admin.category',compact('data'));

   }
   public function add_category(request $request)
   {
    $data=new category;
    $data->category_name=$request->category;
    $data->save();

    return redirect()->back()->with('message','Category Added Successfully');
   }

   public function delete_category($id)
   {
      $data=category::find($id);
      $data->delete();

      return redirect()->back()->with('message','category deleted succesfully');

   }
   
   public function view_product()
   {
      $category= category::all();
      return view ('admin.product',compact('category'));
   }
   public function add_goods(Request $request)
   {
   $goods=new goods;


   $goods->title=$request->title;
   $goods->description=$request->description;
   $goods->price=$request->price;
   $goods->quantity=$request->quantity;
   $goods->discount_price=$request->dis_price;
   $goods->category=$request->category;

   $image= $request->image;

   $imagename=time().'.'.$image->getClientOriginalExtension();
   $request->image->move('product',$imagename);

   $goods->image=$imagename;

   $goods->save();
   return redirect()->back()->with('message','product added succesfully');



   }
   
   public function show_goods()
   {
      $goods=goods::all();
      return view ('admin.view_goods',compact('goods'));
   }

   public function delete_goods($id)
   {
      $goods=goods::find($id);
      $goods->delete();

      return redirect()->back()->with('message','Product succesfully Deleted');


   }

   public function update_goods($id)
   {
      $goods=goods::find($id);
      $category=category::all();
      
      return view('admin.update_goods',compact('goods','category'));
   }
   public function update_goods_confirm(Request $request,$id)
   {
      $goods=goods::find($id);

      $goods->title=$request->title;
      $goods->description=$request->description;
      $goods->price=$request->price;
      $goods->discount_price=$request->dis_price;
      $goods->category=$request->category;
      $goods->quantity=$request->quantity;

      $image=$request->image;
      if($image)

      {
         $imagename=time().'.'.$image->getClientOriginalExtension();
         $request->image->move('product', $imagename);
         $goods->image=$imagename;

      }

     
      $goods->save();
      return redirect()->back()->with('message','Product succesfully Updated');


   }

   public function view_order()
   {
      $order=order::all();


      return view('admin.view_order',compact('order'));
   }
}
