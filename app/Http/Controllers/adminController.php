<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminModel;
use App\Models\roleModel;



class adminController extends Controller
{

    public function __construct(){
        // $this->middleware("adminAuth", ["expect" => "admin/doLogin"]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = adminModel::select('special_users.*','special_users_types.type')
      ->join('special_users_types','special_users.special_users_types','=','special_users_types.id')
      ->get();
      

      return view("admin.pages.forms.adminForm.index", ["data" => $data]);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data =  roleModel::get(); 
        return view("admin.pages.forms.adminForm.adminForm", ["data" => $data]);
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
           "user_name" => "required", 
           "user_email" => "required|email", 
           "user_password" => "required|min:6",
           "special_users_types" => "required"
       ]);


       $data["user_password"] = bcrypt($data["user_password"]);

       $op = adminModel::create($data); 
       
       if($op){
           return back(); 
       }else {
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
        
       $user_data = adminModel::where("id", $id)->get();
       $role_data = roleModel::get(); 


       return view("admin.pages.forms.adminForm.editAdmin", ["role" => $role_data, "data" => $user_data]);


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
           "user_name" => "required", 
           "user_email" => "required|email", 
           "special_users_types" => "required"
       ]);

       $op = adminModel::where("id", $id)->update($data);

       if($op){
           return back(); 
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

    public function login(){
        return view("admin.pages.examples.login");
    }

    public function doLogin(Request $request){
        
    $data = $this->validate($request,[
        
        "user_email" => "required|email",
        "password" => "required|min:6"
    ]);

    $status = false;
    if($request->has('remember_me')){
     $status = true;
    }

   

      if(auth()->guard('admin')->attempt($data, $status)){

        return redirect(url('/admin/product'));

      }else{

        session()->flash('Message','Invalid Credentials try again');
        return redirect(url('/admin/login'));

      }
    }
}