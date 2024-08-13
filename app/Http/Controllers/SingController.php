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
//use App\Http\Controllers\Reqeust;



class SingController extends Controller
{
    public function index(){
        $dealers= Dealer::all();
        $propertys =property::latest('id')->limit(6)->get();
        return view('index',compact('dealers','propertys'));
       //dd($propertys);
    }
    public function contact(){

        return view('contact');
    }
    
    public function messages(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'reason'=> 'required',
            'message'=>'required'
        ]);
         
        
        $message=new Message;
        $message->name=$request->name;
        $message->email=$request->email;
        $message->reason= $request->reason;
        $message->message=$request->message;
        $message->save();
        return back()->with("success","You data has been saved");
    }

    public function login_view(){
    
        return view('auth.login');
    }

   public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

       $user= User::where('email','=',$request->email)->first();
        if ($user && $request->password == $user->password){
            Auth::login($user);
            if (auth()->user()->role == 0){
                return redirect()->intended('/index')->with("success","Login successfull now you can continue...");
            }
            else{
                return redirect('login')->with("error","You are Admin you can ont login user dashboard");
            }
        }else{
           return redirect('login')->with("error","Some thing wrong");
        }
       
      
    }

    public function singup_view(){

        return view('auth.singup');
    }
    public function singupd(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'image'=> 'required',
            'password'=>'required'
        ]);
         
        $profilephoto = time().'.'.$request->image->extension();
        $request->image->move(public_path('profileimg'),$profilephoto);


        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->image= $profilephoto;
        $user->password=$request->password;
        $user->save();
        return redirect('login')->with("success","Singin successfull now you can login...");
    }

    public function list_view(){

        $user = Auth::user();
        if(Auth::check() && auth()->user()->role == 0)
        {
            return view('auth.listing',compact('user'));
        }
        else{

            return redirect('index')->with("error","User is not logged in please login and try again");
        }
    }

    public function list(Request $request){
        


        $request->validate([
            
            'property'=>'required',
            'location'=>'required',
            'price'=>'required',
            'contact'=>'required',
            'message'=>'required',
          
        ]);
       
        $properyphoto = time().'.'.$request->prophoto->extension();
        $request->prophoto->move(public_path('properyimg'),$properyphoto);


        $list=new property;
        $list->user_id=Auth::user()->id;
        $list->select=$request->select;
        $list->name=Auth::user()->name;
        $list->image=Auth::user()->image;
        $list->property=$request->property;
        $list->location=$request->location;
        $list->price=$request->price;
        $list->contact=$request->contact;
      
        $list->prophoto=$properyphoto;
        $list->message=$request->message;
        $list->save();
        return back()->with("success","You data has been saved");
    }
     

    public function dash(Request $reqs){
      // $reqs= Auth::user()->id;
       // dd('$user');
       //$prop = property::where('user_id',$reqs)->get();

       // return view('userdash.dashboard');
        //return view('userdash.dashboard',['propertys'=>$prop]);
        $user= Auth::user();
        $propertys = property::where('user_id',$user->id)->get();
       // dd($property);
        return view('userdash.dashboard',compact('user','propertys'));
    }

    public function layout(){
      
        return view('userdash.dashboard');
    }

    
    public function logout(){

        \Session::flush();
        \Auth::logout();
        return redirect('/index');
    }

    public function buy_view(){
        $reqs = property::where('select','sell')->get();
        return view('/buy',['propertys'=> $reqs]);
       
    }
    public function rent_view(){
        $reqs = property::where('select','rent')->get();
        return view('/rent',['propertys'=> $reqs]);
    }
    
}
