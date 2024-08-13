<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\property;
use App\Models\Cart;
use App\Models\Dealer;
use App\Models\Message;
//use App\Models\User3;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;



class AdminConrtoller extends Controller
{
    public function admin(){
        $user = Auth::user();
        $users =User::where('role','0')->get();
        $proprtys = property::all();
        $dealers = Dealer::all();
        return view('admindash.admin',compact('user','users','proprtys','dealers'));
    }

    public function adminviewlogin(){
        return view('admindash.adminlogin');
    }
    public function adminlayout(){
        $user = Auth::user();
        return view('admindash.admin',compact('user'));
    }
    public function adminlogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

       $user= User::where('email','=',$request->email)->first();
       if ($user && $request->password == $user->password){
        Auth::login($user);
        if (auth()->user()->role == 1){
            return redirect()->intended('/admin')->with("success","Login successfull now you can continue...");
        }
        else{
            return redirect('adminlogin')->with("error","You are user you can not access admin panel");
        }
    }else{
       return redirect('adminlogin')->with("error","Some thing wrong");
    }
}

//edit profile
public function Admineditview(){
    $user = Auth::user();
    return view('admindash.editadmin',compact('user'));
}
public function Admiupdate(Request $request, $id){
   
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
       return redirect('admin')->with("success","Saved your data");
}

public function viewdealers(){
    $user = Auth::user();
    $dealers= Dealer::all();
    return view('admindash.viewdealers',compact('user','dealers'));
}

public function dupdate(Request $request, $id){
    $user = Auth::user();
    $dealer= Dealer::where('id',$id)->first();
    return view('admindash.Dealeredit',compact('user','dealer'));
}
public function Dealersave(Request $request, $id){
    $request->validate([
        'DealerPhoto'=>'nullable',
        'name'=>'required',
        'contact'=>'required',
        
    ]);
     
    $dealer = Dealer::where('id',$id)->first();
    if(isset($request->DealerPhoto)){

    $DealerPhoto = time().'.'.$request->DealerPhoto->extension();
    $request->DealerPhoto->move(public_path('Dealers'),$DealerPhoto);
    $dealer->DealerPhoto= $DealerPhoto;

    }
    $dealer->name=$request->name;
    $dealer->contact=$request->contact;

    
   
   $dealer->save();

   return redirect('viewdealers')->with("success","Saved your data");
}

public function Dealerdelete(Request $request, $id){
    $dealers = Dealer::where('id',$id)->first();       
    $dealers->delete();
    return redirect()->back()->with("success","Data delete Successfully");
}


public function promanage(){
    $user = Auth::user();
    $propertys = property::where('select','sell')->get();
    $property = property::where('select','rent')->get();
    //$carts = Cart::all();
    return view('admindash.promanage',compact('user','propertys','property'));
}


public function usermanage(){
    $user = Auth::user();
    $users =User::where('role','0')->get();
    return view('admindash.usermanage',compact('user','users'));
}


public function userview($id){
    $user = Auth::user();
    $users = User::where('id',$id)->first();
    $listeduser = property::where('user_id',$id)->where('select','sell')->get();
    $rentuser = property::where('user_id',$id)->where('select','rent')->get();
    $carts = Cart::where('user_id',$id)->get();
    return view('admindash.userview',compact('users','user','listeduser','rentuser','carts'));
}

public function userupdate($id){
    $user = Auth::user();
    $users = User::where('id',$id)->first();
    return view('admindash.userupdate',compact('users','user'));
}

public function Uupdate(Request $request, $id){
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
    return redirect('usermanage')->with("success","Saved your data");
 }

 public function Udelete($id){
    $user = User::where('id',$id)->first();       
    $user->delete();
    $propertys = property::where('user_id',$id)->delete();
    $cart = Cart::where('owner_id',$id)->delete(); 
    return redirect('usermanage')->with("success","Data delete Successfully");
 }
 
 public function save_dealers(Request $request){
     
     
     
    $request->validate([
        
        'DealerPhoto'=>'required',
        'name'=>'required',
        'contact'=>'required',
        
    ]);
    
    $DealerPhoto = time().'.'.$request->DealerPhoto->extension();
    $request->DealerPhoto->move(public_path('Dealers'),$DealerPhoto);
    
    
    $save=new Dealer;
    $save->DealerPhoto= $DealerPhoto;
    $save->name=$request->name;
    $save->contact=$request->contact;
    
    $save->save();
    return back()->with("success","You data has been saved");
}


public function AdminConrtoller(){
  
   return redirect('usermanage')->with("success","Data delete Successfully");
}

public function sms(){
    $user = Auth::user();
    $messages = message::all();
    return view('admindash.message',compact('user','messages'));
}

public function messdelete($id){
    $messages = message::where('id',$id)->delete(); 
    return redirect('message')->with("success","Data delete Successfully");
}
}
