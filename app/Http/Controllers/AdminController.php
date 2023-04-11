<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function index()
    {
        try {
            $admin=Admin::get();
           
        return view('admin.index', ['admin' =>  $admin]);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }

    public function dash()
    {
        try {
           $product=Product::get();
           return view('admin.dash', ['product' =>  $product]);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }


    public function create()
    {
        try {
          
        return view('admin.create');
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }


    public function login(Request $request)
    {
    
    $this->validate($request, [
      'username'=>'required',
      'password'=>'required'
    ]);
      try{
      
      
          $username=$request->input('username');
          $pass=$request->input('password');
  
          $admin=Admin::where('username',$username)->first();
         
        
          if($admin)
          { 
            
              $password =$admin->password; 
              if($password==$pass)
              {       
                  $request->session()->put('user_id',$admin->id);
                  $request->session()->put('username',$username);
              return redirect('dash');
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


      public function store(Request $request)
      {
          // return $request->all(); 
          $this->validate($request, [
          
              'productname' => 'required|unique:product,product_name',
              'price'       => 'required|numeric|gt:0',
              'saleprice'   => 'required|numeric|gt:0',
              'stock'       => 'required|numeric|gt:0'
              
          ]);
          try {
              if($request->image)
      {
      $file=$request->image;
      $randomId       =   rand(1000,9000);
      $storyimagename = time().$randomId.'.'.$file->getClientOriginalExtension();
  
      $destinationPath = 'product';
      $thumb_img = Image::make($file->getRealPath())->resize(20,30);
      $thumb_img->save($destinationPath.'/'.$storyimagename,30);
     
  }
  else{
      $storyimagename="null"; 
  }
  
  
  
  
              
              DB::transaction(function ()  use($request,$storyimagename) {
                  $product = new Product;
                  $product->product_name=$request->productname;
                  $product->price=$request->price;
                  $product->sale_price=$request->saleprice;
                  $product->stock=$request->stock;
                  $product->product_image=$storyimagename;
                  
                  $product->save();
              });
              return redirect('dash');
  
      } catch (\Exception $e) {
          return $e->getMessage();
      }
      }
  


}
