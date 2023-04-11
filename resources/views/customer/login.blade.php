<!DOCTYPE html>
<html lang="en">
  <head>
   
    <Link rel="stylesheet" href="{{url('assets/css/style2.css')}}">
  </head>
  <form action="{{url('log/store')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
  <body>
  <form>
   <div class="container">
   <h1>Login</h1>
       
       
        
         <label for="username"><b>Username</b></label>
        <input type="text" placeholder="enter usename." name="username" id="username" required/>

         <label for="email"><b>Password</b></label>
        <input type="password" placeholder="enter password." name="password" id="password" required/>
        
         <button type="submit">login</button>
  </div>
  {{-- <div>
        <p>Already have an account? <a href="#">Log in</a>.</p>
</div> --}}
  </form>
  </body>
</html>