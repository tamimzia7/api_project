<?php

namespace App\Http\Controllers;

use App\Models\info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Addinfo;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    function list(){
        return info::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $info = new info();
        $info->id=$request->id;
        $info->name=$request->name;
        $info->email=$request->email;
        $info->batch=$request->batch;
        $info->save();
        return "added successfully";
    }

   
    function addinfo(Request $request){
        $addinfo = new Addinfo();
        $addinfo->id=$request->id;
        $addinfo->name=$request->name;
        $addinfo->email=$request->email;
        $addinfo->batch=$request->batch;
        if($addinfo->save()) {
            return "KEK";
        } else {
            return "HFJHFDGJB";
        }
        $addinfo->save();
     
    }
    

    /**
     * Display the specified resource.
     */
    public function show(info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(info $info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, info $info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(info $info)
    {
        //
    }
}
