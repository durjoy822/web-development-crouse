<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\POST_TABLE;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list= POST_TABLE::all();  
      return view('DATA_TABLE_CRUD.post_home')
            ->with('var',$list); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DATA_TABLE_CRUD.post_create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all()); 
        $info=new POST_TABLE(); 
        $info->title=$request->title; 
        $info->section=$request->section; 
        $info->content=$request->content; 
        $info->save(); 
        return redirect('post'); 

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
        //  dd($id); 
        $power=POST_TABLE::where('id', $id)->first(); 
        return view('DATA_TABLE_CRUD.post_edit') 
                ->with('power',$power); 
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
        $fax=POST_TABLE::where('id',$id)->first(); 
        $fax->title=$request->title; 
        $fax->section=$request->section; 
        $fax->content=$request->content; 
        $fax->save(); 
        // dd($request->all()); 
        return redirect('post');


        
        // $cool=texca::where('id', $id)->first(); 
        // $cool->story_title=$request->story_title;
        // $cool->story=$request->story; 
        // $cool->save(); 

        //  //chacking save working or not 
        //  if ($cool->id){
        //     session()->put('hellow', 'save successfull');
        //     return redirect('story');
        // }else{
        //     session()->put('hellow', 'Save faild');
        //     return redirect('story/create');  
        // }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        POST_TABLE::where('id',$id)->delete(); 
        return redirect('post'); 
    }
}
