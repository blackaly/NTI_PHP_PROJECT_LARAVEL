<?php

namespace App\Http\Controllers;

use App\Models\registerUserModel;
use Illuminate\Http\Request;


class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * 
     * 
     */

    public function __construct(){
        
        $this->middleware('userAuth',['except' => [url('index'), url('register'),url('doRegister')]]);
    }



    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getUserLogAndRegister(Request $request)
    {
        if($request->has("form_1")){

            $data = $this->validate($request, [
                "user_email" => "required", 
                "password" => "required"
            ]); 



        $status = false;
        if($request->has('remember_me')){
            $status = true;
        }
   
        if(auth()->guard("registerUserModel")->attempt($data, $status)){


            return redirect(url('/index'));

        }else{

            session()->flash('Message','Invalid Credentials try again');
            return redirect(url('/register'));

        }
        }elseif($request->has("form_2")) {

            $data = $this->validate($request, [
                "user_name" => "required", 
                "user_email" => "required|email", 
                "user_password" => "required|min:6",
            ]);

            $data['user_password'] = bcrypt($data['user_password']);

            $op = registerUserModel::create($data); 

            if($op){
                return redirect(url("/index"));
            }else {
                return redirect(url("/register"));
            }
        }
        
    }

    public function logout(){

        auth()->logout();

        return redirect(url('/register'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}