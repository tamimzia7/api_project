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
        $addinfo = new addinfo();
        $addinfo->id=$request->id;
        $addinfo->name=$request->name;
        $addinfo->email=$request->email;
        $addinfo->batch=$request->batch;
        if($addinfo->save()) {
            return response()->json(['message' => 'Data added successfully'], 200);
        } else {
            return response()->json(['message' => 'Failed to add data'], 500);
        }
        $addinfo->save();
     
    }

    function update(Request $request, $id){
        $info=new info();
        $info->name=$request->name;
        $info->email=$request->email;
        $info->batch=$request->batch;
        if($info->save()) {
            return response()->json(['message' => 'Data updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Failed to update data'], 500);
        }
    }
    function updateinfo(Request $request, $id){
        $addinfo = Addinfo::findorFail($id);
        // $addinfo=new Addinfo();
        $addinfo->name=$request->name;
        $addinfo->email=$request->email;
        $addinfo->batch=$request->batch;
        $addinfo->save();
         
            return response()->json(['message' => 'Data updated successfully'], 200);
        
    }

}