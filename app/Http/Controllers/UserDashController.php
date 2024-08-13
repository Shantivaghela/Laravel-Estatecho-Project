<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\property;
use App\Models\Cart;
//use App\Models\User3;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;
//use App\Http\Controllers\Reqeust;

class UserDashController extends Controller
{
    public function listdash(){
        $user= Auth::user();
        $propertys = property::where('user_id',$user->id)->Where('select','sell')->get();
        //
        //dd($property);
        return view('userdash.listeddash',compact('user','propertys'));

    
    }
    public function rentdash(){
        $user= Auth::user();
        $propertys = property::where('user_id',$user->id)->Where('select','rent')->get();
      
        return view('userdash.rentdash',compact('user','propertys'));
        
    }
    public function cartdash(){
        
            $user= Auth::user();
           // $property= property::all();
            $carts = Cart::where('user_id',$user->id)->get();
          
            return view('userdash.cartdash',compact('user','carts'));
            
        } 
     

     // edit functions

     public function edit(){
        $user= Auth::user();
        $propertys = property::where('user_id',$user->id)->get();
        //
        //dd($property);
        return view('userdash.profileedit',compact('user','propertys')); 
     }

     public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'image'=> 'nullable',
            'password'=>'required'
        ]);
         
        $user = User::where('id',$id)->first();
        $user->name=$request->name;
        $user->email=$request->email;

        if(isset($request->image)){

        $profilephoto = time().'.'.$request->image->extension();
        $request->image->move(public_path('profileimg'),$profilephoto);
        $user->image= $profilephoto;

        }
        
        $user->password=$request->password;
       $user->save();

        $propertys = property::where('user_id',$id)->get();
       foreach($propertys as $property){
        $property->name=$request->name;
        if(isset($request->image)){

        // $profilephoto = time().'.'.$request->image->extension();
         //$request->image->move(publiproperty_path('profileimg'),$profilephoto);
         $property->image= $profilephoto;
 
         }
         $property->save();
       }
         $carts = Cart::where('owner_id',$id)->get();
         foreach($carts as $cart){
     // if(isset($cart->name)){
         $cart->name=$request->name;
         if(isset($request->image)){

            //$profilephoto = time().'.'.$request->image->extension();
           //$request->image->move(public_path('profileimg'),$profilephoto);
            $cart->image= $profilephoto;
    
            }
            $cart->save();
         }
     //}
            //$user->$property->$cart->save();
        return redirect('dashboard')->with("success","Saved your data");
     }

     public function listedit($id){

       $propertys=property::find($id);  
       return view('userdash.listedit',compact('propertys')); 

     }
     public function listupdate(Request $request, $id){
        $request->validate([
            'property'=>'required',
            'location'=>'required',
            'price'=>'required',
            'contact'=>'required',
            'message'=>'required',
        ]);
         
        $property = property::where('id',$id)->first();
        $property->select=$request->select;
        $property->property=$request->property;
        $property->price=$request->price;
        $property->contact=$request->contact;
        $property->location=$request->location;

        if(isset($request->prophoto)){

         $properyphoto = time().'.'.$request->prophoto->extension();
         $request->prophoto->move(public_path('properyimg'),$properyphoto);
        $property->prophoto= $properyphoto;

        }
        
        $property->message=$request->message;
        $property->save();

        $propertys = Cart::where('property_id',$id)->get();
        foreach($propertys as $property){
        if(isset($property->select)){
         $property->select=$request->select;
         $property->property=$request->property;
         $property->price=$request->price;
         $property->contact=$request->contact;
         $property->location=$request->location;
 
         if(isset($request->prophoto)){
 
          //$properyphoto = time().'.'.$request->prophoto->extension();
         // $request->prophoto->move(public_path('properyimg'),$properyphoto);
         $property->prophoto= $properyphoto;
 
         }
         
         $property->message=$request->message;
         $property->save();
      }
      }
        return  redirect('listeddash')->with("success","Saved your data");
     }



     public function rentedit($id){

        $propertys=property::find($id);  
        return view('userdash.rentedit',compact('propertys')); 
 
      }
      public function rentupdate(Request $request, $id){
         $request->validate([
             'property'=>'required',
             'location'=>'required',
             'price'=>'required',
             'contact'=>'required',
             'message'=>'required',
         ]);
          
         $property = property::where('id',$id)->first();
         $property->select=$request->select;
         $property->property=$request->property;
         $property->price=$request->price;
         $property->contact=$request->contact;
         $property->location=$request->location;
 
         if(isset($request->prophoto)){
 
          $properyphoto = time().'.'.$request->prophoto->extension();
          $request->prophoto->move(public_path('properyimg'),$properyphoto);
         $property->prophoto= $properyphoto;
 
         }
         
         $property->message=$request->message;
         $property->save();


         $propertys = Cart::where('property_id',$id)->get();
         foreach($propertys as $property){
         if(isset($property->select)){
         $property->select=$request->select;
         $property->property=$request->property;
         $property->price=$request->price;
         $property->contact=$request->contact;
         $property->location=$request->location;
 
         if(isset($request->prophoto)){
 
          //$properyphoto = time().'.'.$request->prophoto->extension();
         // $request->prophoto->move(public_path('properyimg'),$properyphoto);
         $property->prophoto= $properyphoto;
 
         }
         
         $property->message=$request->message;
         $property->save();
         }
         }
         return  redirect('rentdash')->with("success","Saved your data");
      }

     public function delete($id){
        $user = User::where('id',$id)->first();       
        $user->delete();
        $propertys = property::where('user_id',$id)->delete();
        $cart = Cart::where('owner_id',$id)->delete(); 
        return redirect('index')->with("success","Data delet Successfully");
     }

     public function cart(Request $req,$id){
        if(Auth::check() && Auth::user()->role == '0')
            {
                
                //$cart = property::where('id',$id)->first();
                $pro= property::find($id);
                $cart= new Cart;
                $cart->property_id=$pro->id;
                $cart->user_id=Auth::user()->id;
                $cart->owner_id=$pro->user_id;
                $cart->name=$pro->name;
                $cart->select=$pro->select;
                $cart->image=$pro->image;
                $cart->property=$pro->property;
                $cart->location=$pro->location;
                $cart->price=$pro->price;
                $cart->contact=$pro->contact;
                $cart->prophoto=$pro->prophoto;
                $cart->message=$pro->message;
                $cart->save();
                return  redirect('index')->with("success","Saved your data");
            }
            else{
    
                return redirect('/login')->with("error","You are not logged in please login and try again");
            }
       
    }
       
    public function dcart($id){
        $cart = Cart::where('id',$id)->first();
        $cart->delete();
        return redirect('cartdash')->with("success","Data delet Successfully");

     }
     public function buydelete($id){
        Cart::where('property_id',$id)->delete();      
        
        property::where('id',$id)->delete();
        
        return redirect()->back()->with("success","Data delet Successfully");

     }
     public function rentdelete($id){
        Cart::where('property_id',$id)->delete();      
        
        property::where('id',$id)->delete();
        
        return redirect()->back()->with("success","Data delet Successfully");

     }
     public function more($id){
        $propertys = property::where('id',$id)->first();
        return view('more',compact('propertys'));
     }
}
