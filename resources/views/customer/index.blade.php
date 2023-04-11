<!DOCTYPE html>
<html lang="en">
  <head>
   
    <Link rel="stylesheet" href="{{url('assets/css/style2.css')}}">
  </head>
  <form action="{{url('customer/store')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
  <body>
  <form>
   <div class="container">
   <h1>User Registration</h1>
        <p>Kindly fill in this form to register.</p>
       
        <label for="name"><b>Name</b></label> 
        <input type="text" placeholder="Enter name." name="name" id="name"required/>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="enter email." name="email" id="email" required/>

         <label for="username"><b>Username</b></label>
        <input type="text" placeholder="enter usename." name="username" id="username" required/>

         <label for="email"><b>Password</b></label>
        <input type="password" placeholder="enter password." name="password" id="password" required/>
        
         <button type="submit">Register</button>
  </div>
  <div>
        <p>Already have an account? <a href="{{url('login/index')}}">Log in</a>.</p>
</div>
  </form>
  </body>
</html>