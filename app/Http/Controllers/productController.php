<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;
use App\Models\supplierModel;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = productModel::select('products.*','suppliers.supplier_name')
      ->join('suppliers','products.supplier_id','=','suppliers.supplier_id')
      ->get();

      return view("admin.pages.forms.product.index", ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = supplierModel::get(); 
        return view("admin.pages.forms.product.productForm", ["data" => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            "supplier_id" => "required",
            "product_name" => "required", 
            "product_price" => "required", 
            "product_condition" => "required", 
            "product_image" => "required|mimes:jpg,bmp,png,jpeg"
            
        ]);

        $finalName = time().rand().'.'.$request->product_image->extension();

        $request->product_image->move(public_path('product_images'), $finalName);

        $data['product_image'] = $finalName;


        $op = productModel::create($data); 

        if($op){
            return back();
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product_supplier = supplierModel::get();
        $product = productModel::where("id", $id)->get(); 

        return view("admin.pages.forms.product.editProduct", ["product_supplier" => $product_supplier, "product" => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $data = $this->validate($request, [
           "supplier_id" => "required",
           "product_name" => "required",
           "product_price" => "required",
           "product_condition" => "required",
           "product_image" => "required|mimes:png,jpg,jpeg", 
       ]);


        $finalName = time().rand().'.'.$request->product_image->extension();

        $request->product_image->move(public_path('product_images'), $finalName);

        $data['product_image'] = $finalName;

       $op = productModel::where("id", $id)->update($data);

       if($op){
           return redirect(url("admin/product")); 
       }else{
           return back();
       }


    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}