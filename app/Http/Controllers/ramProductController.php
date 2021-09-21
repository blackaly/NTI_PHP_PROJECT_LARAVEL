<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ramProductModel; 
use App\Models\productModel;

class ramProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $data = ramProductModel::select('ram.*','products.product_name')
      ->join('products','products.id','=','ram.product_id')
      ->get();

      return view("admin.pages.forms.ram.index", ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = productModel::get(); 

        return view("admin.pages.forms.ram.ramProductForm", ["data" => $data]);
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
            "product_id" => "required",
            "model_number" => "required", 
            "memory_size" => "required", 
            "memory_speed" => "required", 
            "type_of_ram" => "required", 
            "compatible_with" => "required", 
            "number_of_pins" => "required", 
            "kit_includes" => "required"
            
        ]);

        $op = ramProductModel::create($data); 

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
        $product = productModel::get(); 
        $ram = ramProductModel::where("id", $id)->get(); 

        return view("admin.pages.forms.ram.editRam", ["product" => $product, "ram" => $ram]);
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
            "product_id" => "required",
            "model_number" => "", 
            "memory_size" => "required", 
            "memory_speed" => "required", 
            "type_of_ram" => "required", 
            "compatible_with" => "required", 
            "number_of_pins" => "required", 
            "kit_includes" => "required"
            
        ]);

        $op = ramProductModel::where("id", $id)->update($data);

        $op = ramProductModel::create($data); 

        if($op){
            return redirect(url("admin/ram-product"));
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
         $op = ramProductModel::where('id',$id)->delete();

        if($op){
            return redirect(url('/admin/ram-product'));

        }else{
            return back(); 
        }
        


    }
}