<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use DB;

class CustomerController extends Controller
{
    //
    public function index()
    {
        try {
            
            return view('customer.index');
    } catch (\Exception $e) {
        return $e->getMessage();
    }  
    }

    public function home()
    {
        try {
            $product=Product::get();
            return view('customer.home',['product' =>  $product]);
    } catch (\Exception $e) {
        return $e->getMessage();
    }  
    }



    public function store(Request $request)
    {
      
        $this->validate($request, [
        
            'name' => 'required',
            'email'=> 'required|email',
            'username'=> 'required',
            'password'=> 'required'
            
        ]);
        try {
            
            DB::transaction(function ()  use($request) {
                $customer = new Customer;
                $customer->name=$request->name;
                $customer->email=$request->email;
                $customer->username=$request->username;
                $customer->password=$request->password;

                $customer->save();
            });
            return redirect('home');

    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }


    public function loginindex()
    {
        try {
            
            return view('customer.login');
    } catch (\Exception $e) {
        return $e->getMessage();
    }  
    }


    public function login_customer(Request $request)
    {
    
    $this->validate($request, [
      'username'=>'required',
      'password'=>'required'
    ]);
      try{
      
      
          $username=$request->input('username');
          $pass=$request->input('password');
  
          $customer=Customer::where('username',$username)->first();
         
        
          if($customer)
          { 
            
              $password =$customer->password; 
              if($password==$pass)
              {       
                  $request->session()->put('user_id',$customer->id);
                  $request->session()->put('username',$username);
              return redirect('/home');
              }
              else{
                  $request->session()->flash('error_login','Invalid Password');
                  return back();
              }
          }
          else{
            
              $request->session()->flash('error_login','Invalid username/ Password');
              return back();
          }
  
          
            
           
      }catch(\Exception $e){
              return $e->getMessage();
          }
      }


      public function detail($id)
    {
        try {
            $product=Product::find($id);
            return view('customer.detail',['product'=>$product]);
    } catch (\Exception $e) {
        return $e->getMessage();
    }  
    }
}
