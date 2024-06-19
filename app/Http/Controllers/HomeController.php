<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\goods;

use App\Models\Cart;

use App\Models\order;

use Stripe;

class HomeController extends Controller
{


    public function index()
    {
        $goods=goods::all();
        return view('home.userpage',compact('goods'));
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }


        else
        {
            $goods=goods::paginate(1000);
            return view('home.userpage',compact('goods'));

        }
    }

    public function product_details($id)
    {
        
        $goods=goods::find($id);
        return view('home.product_details',compact('goods'));
    }
    public function add_cart(Request $request,$id)
    {
        if(auth::id())
        {
            $user=Auth::user();
            $goods=goods::find($id);
            $cart=new Cart;
            $cart->name= $user->name;

            $cart->phone= $user->phone;
            $cart->email= $user->email;
            $cart->address= $user->address;
            $cart->user_id= $user->id;

            $cart->product_title= $goods->title;
            if($goods->discount_price!=null)
            {
                $cart->price= $goods->discount_price *$request->quantity;

            }
            else
            {
                $cart->price= $goods->price *$request->quantity;
            }
            
            $cart->product_id= $goods->id;
            $cart->image= $goods->image;
            $cart->quantity= $request->quantity;

            $cart->save();
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }

    public function show_cart()
    {
        if(auth::id())
        {
            $id=auth::user()->id;
        $cart=cart::where('user_id','=',$id)->get();
        return view('home.show_cart',compact('cart'));


        }
        else
        {
            return redirect ('login');
        }
            }

     public function remove_cart($id)
     {
        $cart=cart::find($id);

        $cart->delete();

        return redirect()->back();
     }       

     Public function cash_order()
     {
        $user=Auth::user();

        $userid=$user->id;

        $data=cart::where('user_id','=',$userid)->get();

        foreach($data as $data)
        {
            $order=new order;

            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;
            $order->product_title=$data->product_title;
            $order->price=$data->price;
            $order->quantity=$data->quantity;

            $order->image=$data->image;
            $order->product_id=$data->product_id;

            $order->payment_status='cash on delivery';
            $order->payment_status='processing';

            $order->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();
        
        }
        return redirect()->back()->with('message','we received Your Order...');
     }

     public function stripe($totalprice)
     {
        return view('home.stripe', compact('totalprice'));
     }

     public function stripePost(Request $request,$totalprice): RedirectResponse
     {
         Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
       
         Stripe\Charge::create ([
                 "amount" => $totalprice * 100,
                 "currency" => "usd",
                 "source" => $request->stripeToken,
                 "description" => "Test payment from itsolutionstuff.com." 
         ]);

         $user=Auth::user();

         $userid=$user->id;
 
         $data=cart::where('user_id','=',$userid)->get();
 
         foreach($data as $data)
         {
             $order=new order;
 
             $order->name=$data->name;
             $order->email=$data->email;
             $order->phone=$data->phone;
             $order->address=$data->address;
             $order->user_id=$data->user_id;
             $order->product_title=$data->product_title;
             $order->price=$data->price;
             $order->quantity=$data->quantity;
 
             $order->image=$data->image;
             $order->product_id=$data->product_id;
 
             $order->payment_status='paid';
             $order->payment_status='processing';
 
             $order->save();
 
             $cart_id=$data->id;
             $cart=cart::find($cart_id);
             $cart->delete();
         
         }
                 
         return back()
                 ->with('success', 'Payment successful!');
     }

}
