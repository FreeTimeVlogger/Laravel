<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Http\Request;

class cart_controller extends Controller
{
    //
    public function cart($id, $qt)
    {
        $User_id = session('id');
        $product = product::where('id', $id)->first();
       
        if ($product) {
            if ($product['Quantity'] >= 0) {
                cart::insert([
                    'Product_ID' => $id,
                    'User_id' => $User_id,
                    'Quantity' => $qt,
                    'Price' => $product['Price'],
                ]);
                
                 session()->flash('success', 'Product Successfully Added to Cart');
            } else {
                session()->flash('error', 'Product is out of Stock, please wait till the new stock of this product arrive');
            }
        } else {
            return redirect('after_product');
        }
        return redirect('after_product');
    }
    public function cart_list()
    {
        $User_id = session('id');
        $cart = cart::where('User_id', $User_id)->get();
        $Product_id = [];
        foreach ($cart as $cart1) {
            $Product_id[] = $cart1['Product_ID'];
        }

        $product_detail = Product::whereIn('id', $Product_id)->get();
        return view('cart_list', compact('cart', 'product_detail'));

    }
    // public function fetchstore()
    // {
    //     $User_id = session('id');
    //     $cart = cart::where('User_id', $User_id)->get();
    //     $Product_id = [];
    //     foreach ($cart as $cart1) {
    //         $Product_id[] = $cart1['id'];
    //     }

    //     $product_detail = Product::whereIn('id', $Product_id)->get();
    //     return view('Admin/cart', compact('cart', 'product_detail'));

    // }
    public function remove_from_cart($id)
    {
        $check = cart::where('id', $id)->delete();

        return redirect('cart_list');
    }
//     public function place_cart_order()
//     {    
//         $User_id = session('user_id');
//         $cart = cart::where('User_id', $User_id)->get();
//         foreach($cart as $cart1){
//             $qt = $cart1['Quantity'];
//             $product = franchise_model::where('Product_id', $cart1['Product_id'])->first(); 
//         if ($product) {
//             if ($product['Quantity'] > 0) {
//                 order::insert([
//                     'Product_id' => $cart1['Product_id'],
//                     'User_id' => $User_id,
//                     'Quantity' => $qt,
//                     'Price' => $cart1['Price'],
//                     'Discount_Amount' => $cart1['Discount_Amount'],   
//                     'Delivery_status' => 'Pending',
//                 ]);
//                 cart::where('cart_id', $cart1['cart_id'])->delete();
//                 franchise_model::where('Product_id', $product['Product_id'])->update([
//                     'Quantity' => $product['Quantity'] - $qt,
//                 ]);
//             } else {
//                 session()->flash('error', 'Product is out of Stock, please wait till the new stock of this product arrive');
//             }
//         } else {
//             return redirect('After_Franchise');
//         }
//     }
//         session()->flash('succ', 'Products Ordered Successfully');
//         return redirect('After_Franchise');
//     }
}
