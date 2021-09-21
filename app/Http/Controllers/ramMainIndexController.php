<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ramProductModel;
use App\Models\productModel;
use App\Models\checkoutModel;
use App\Models\customerAddressModel;
use App\Models\orderModel;




class ramMainIndexController extends Controller
{
    
    public function sliderView(){

       $data = productModel::select('products.*','suppliers.supplier_name')
      ->join('suppliers','products.supplier_id','=','suppliers.supplier_id')
      ->get();
        return view("user.index", ["data" => $data]);
    }

    public function slider($id){

        $data = productModel::select("products.*", 'suppliers.supplier_name')
        ->join('suppliers', 'products.supplier_id', '=', 'suppliers.supplier_id')
        ->where("products.id", $id)
        ->get();     
        
        return view("user.single-product", ["data" => $data]);
    }

    
    
    public function cartPostOperation(Request $request){
        
        $quantity = $request->quantity;
        $product_id = $request->product_id;
        
        session()->put("quantity", $quantity);
        session()->put("product_id", $product_id);
        
        return back();
        
    }
    
    public function cart(){

        $id = session()->get("product_id");
        $data = productModel::where("id", $id)->get();

        session()->put("order_price", $data[0]->product_price);

        return view("user.shopping-cart", ["data" => $data]);
    }

    public function checkout(){

        $id = session()->get("product_id"); 
        $data = productModel::where("id", $id)->get();
        
        return view("user.checkout", ["data" => $data]);
    }

    public function checkoutPost(Request $request){
        
        $data = $this->validate($request, [
            "customer_first_name" => "required", 
            "customer_last_name" => "required", 
            "customer_city" => "required", 
            "customer_county" => "required", 
            "customer_street" => "required", 
            "customer_building" => "required", 
            "customer_phone" => "required", 
        ]);

        $op = checkoutModel::create($data); 

       
    }

    public function customerAddress(Request $request){

        $data = checkoutModel::get();

        $user = auth("registerUserModel")->user()->id; 

        $data_address = customerAddressModel::create(["user_id" => $user, "address_id" => $data[0]->id ]);
    }

    public function order(Request $request){
        
        $user_data = auth("registerUserModel")->user()->id;
        $product_id = session()->get("product_id"); 
        $quantity = session()->get("quantity"); 
        $order_price = session()->get("order_price") * $quantity; 

        $op = orderModel::create(["customer_id" => $user_data, "product_id" => $product_id, "quantity" => $quantity, "order_price" => $order_price]);

        return back(); 
    }


 

}