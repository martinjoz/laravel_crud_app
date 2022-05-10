<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function dashboard(){
        return view('layouts.admin.dashboard');
    }


    public function products(){
        $products=Product::all();
        return view('layouts.admin.products',compact('products'));
    }


    public function subscribers(){
$subscriber=array();
$count=0;

// $a=array(['id'=>'1','name'=>'Martin']);
// foreach($a as $b){
// echo $b['id'];
// }
        $users=User::all();
foreach($users as $user){
$id=$user->id;
$name=$user->name;
$email=$user->email;
$created=$user->created_at;
$updated=$user->updated_at;
$products=User::find($id)->products;
//Add id,name,email, createdat,updatedat in the array;
array_push($subscriber,['id'=>$id,'name'=>$name,'email'=>$email,'created_at'=>$created,'updated_at'=>$updated]);

foreach($products as $product){
$pname=$product->name;
$planId=$product->pivot->plan_id;
$planName=Plan::find($planId)->name;

}
//Add Remaining to the original array
array_push($subscriber[$count],['product_name'=>$pname,'plan_name'=>$planName]);
$count+=1;
}

//Print out test array to help in blade 

// foreach($subscriber as $s){
// $product_name= $s[0]['product_name'];
// $plan_name=$s[0]['plan_name'];

// }
return view('layouts.admin.subscribers',compact('subscriber'));
    }

    public function approve(){
        return view('layouts.admin.approve');
    }

    public function profile(){
        return view('layouts.admin.profile');
    }
}
