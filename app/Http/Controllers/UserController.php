<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //

    public function home(){
        return view('layouts.users.home');
    }


    public function product(){
        $id=Auth::id();
        $data=array();
        $filter=array(); //Helps filter products already selected
        $products=User::find($id)->products;
        $plan1=Plan::all();
        foreach($products as $product){
            $product_name=$product->name;
            $product_id=$product->id;
            $img=$product->image_path;
            $created=$product->created_at;
            $updated=$product->updated_at;
            $pid=$product->pivot->plan_id;
            $plan=Plan::find($pid)->name;
            array_push($data,['product_id'=>$product_id,'product_name'=>$product_name,'plan_name'=>$plan,'img'=>$img,'created_at'=>$created,'updated_at'=>$updated]);
            array_push($filter,$product_id);
        }
        $product1=Product::whereNotIn('id',$filter)->get();

        return view('layouts.users.product',compact('data','product1','plan1'));
    }


    public function profile(){
        return view('layouts.users.profile');
    }


    public function store(Request $request){
        $id=Auth::id();
        $product_id=$request->name;
        $plan_id=$request->plan;

          $user=User::findOrFail($id);
          $user->products()->attach($product_id); //Attaching user_id and product_id in Pivot table

        $user=User::find($id);
        $user->products()->updateExistingPivot($product_id,['plan_id'=>$plan_id]); //Inserting plan_id in pivot table. it uses product id as foreign key
        session()->flash('message','Added Succesfully');
         return back();
    }

}
