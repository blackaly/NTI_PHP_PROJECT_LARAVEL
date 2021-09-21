<?php

namespace App\Http\Controllers;

use App\Models\roleModel;
use Illuminate\Http\Request;


class roleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = roleModel::get();

        return view("admin.pages.forms.adminRole.index", ["data" => $data]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("admin.pages.forms.adminRole.adminRoleForm");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, ["type" => "required"]);
        $op = roleModel::create($data); 

        if($op){
            $message = "Done"; 
            return back();
        }else{
            $message = "Does not work";
        }

        session()->flash('message', $message);
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
        $data = roleModel::where("id", $id)->get(); 

        return view("admin.pages.forms.adminRole.editRole", ["data" => $data]); 

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
        $data = $this->validate($request, ["type" => "required"]);
        
        $op = roleModel::where("id", $id)->update($data); 

        if($op){
            return back(); 
        }else {
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
        //
    }
}