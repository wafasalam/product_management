
<html>
<head>
<Link rel="stylesheet" href="{{url('assets/css/style1.css')}}">
</head>
<form action="{{url('store')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
<h1 id="title"><strong>Add a New Product</strong></h1>
<div class="container">
 
    <div class="row">
      <div class="col-25">
        <label for="pname">Product Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="pname" name="productname">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="mrp">Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="mrp" name="price" >
      </div>
    </div>

<div class="row">
      <div class="col-25">
        <label for="sprice">Sale Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="sprice" name="saleprice" >
      </div>
    </div>

<div class="row">
      <div class="col-25">
        <label for="stock">Stock</label>
      </div>
      <div class="col-75">
        <input type="text" id="stock" name="stock" >
      </div>
    </div>

<div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Image:</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" id="image" name="image">
               
                          </div>
                        </div>
    
    
    <div class="row">
      <input type="submit" value="Submit" >
    </div>
  </form>
</div>


</html>