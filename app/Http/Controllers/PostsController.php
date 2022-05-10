<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use File;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "Creation";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validating Info
        $this->validate($request,[
            'name'=>'required|max:20',
            'file'=>'required|mimes:jpg,jpeg,png'
        ]);
        $input=$request->all();
        if($file=$request->file('file')){
            $fileName=time()."_".$file->getClientOriginalName();
            $file->move('images/products',$fileName);
            $input['image_path']=$fileName;
        }

        Product::create($input);
        session()->flash('message','Succesfully Added');
        return back();

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
        $input=$request->all();
      $file= $request->file("file".$id); //Handler to be used in file operations
      if($file){
    //Delete Old Image 

        $get_file=Product::findOrFail($id)->image_path;
        $url='images/products/'.$get_file;
        if(file_exists($url)){
            @unlink($url); //Removes the file
        }
    //Add New File image
        $fileName=time()."_".$file->getClientOriginalName();
        $file->move('images/products',$fileName);
        $input['image_path']=$fileName;

    //Put Updated data to Database
    $name=$input['name'];
    $path=$input['image_path'];
    Product::where('id',$id)->update(['name'=>$name,'image_path'=>$path]);
    session()->flash('message','Records Updated Succesfully');
    return back();
    }else{ //When there is no image
    //Put Updated data to Database
    $name=$input['name'];
    //$path=$input['image_path'];
    Product::where('id',$id)->update(['name'=>$name]);
    session()->flash('message','Records Updated Succesfully');
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
        Product::where('id',$id)->delete();
        session()->flash('message','Succesfully Deleted');
        return back();
    }
}
