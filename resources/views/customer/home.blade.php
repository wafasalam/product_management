<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Product 4 Grid - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{margin-top:20px;}
.product-rating {
    line-height: 22px;
}
.product-rating i {
    color: #fc0;
    display: inline-block;
    margin-right: 2px;
    font-size: 14px;
}
@media screen and (max-width: 1199px) {
    .product-rating {
        margin-bottom: 5px;
        font-size: 15px;
    }
}
@media screen and (max-width: 767px) {
    .product-rating i {
        font-size: 13px;
    }
}
.text-secondary {
    color: #004975 !important;
}
.card-wrapper {
    position: relative;
    overflow: hidden;
}
.card-wrapper .card-img {
    text-align: center;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease-out;
}
.card-wrapper .card-img img {
    transition: all 0.3s ease-in-out;
    border-radius: 0.25rem;
    border-radius: 0.25rem;
}
.card-wrapper .card-body {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    visibility: hidden;
    padding: 30px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 0.25rem;
    transform: translateX(-100%);
    transition: 0.8s;
    z-index: 11;
}
.card-wrapper:before {
    content: "";
    width: 100%;
    position: absolute;
    height: 100%;
    top: 0;
    right: 100%;
    z-index: 9;
    transition: 0.8s;
    background: rgba(0, 186, 238, 0.82);
    border-radius: 0.25rem;
}
.card-wrapper:hover:before {
    right: 0;
}
.card-wrapper h3,
.card-wrapper p {
    color: #fff;
}
.card-wrapper .read-more {
    color: #fff;
}
.card-wrapper .read-more:after {
    color: #fff;
}
.card-wrapper:hover .card-body {
    visibility: visible;
    transform: translateX(0px);
}
.card-wrapper:hover .backgound-color {
    right: 0;
}
.ti-shopping-cart:before {
    content: "\e60d";
}
.mb-2-6, .my-2-6 {
    margin-bottom: 2.6rem;
}
.text-primary {
    color: #00baee !important;
}
    </style>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<section>

    

<div class="container">
<div class="row">
@foreach ($product as $pd )
<div class="col-sm-6 col-lg-3 mb-2-6">
<div class="card-wrapper mb-4">
<div class="card-img"><img src="{{url('product/'.$pd->product_image)}}" width="240" height="240"></div>
<div class="card-body">
<div>
<a href="{{url('/detail/'.$pd->id)}}"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
</div>
</div>
</div>
 <div class="text-center">
<h4 class="h5 mb-2"><a href="#" class="text-secondary">{{$pd->product_name}}</a></h4>
<div class="product-rating mb-2">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star mr-0"></i>
</div>
<h5 class="mb-0 text-primary">
<h5>₹{{$pd->sale_price}}</h5>
<h6 class="text-muted ml-2"><del>₹{{$pd->price}}</del></h6></h5>
</div>
</div>
@endforeach
{{-- <div class="col-sm-6 col-lg-3 mb-2-6">
<div class="card-wrapper mb-4">
<div class="card-img"><img src="" alt="..."></div>
<div class="card-body">
 <div>
<a href="#"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
</div>
</div>
</div> --}}


{{-- <div class="text-center">
<h4 class="h5 mb-2"><a href="#" class="text-secondary">Products Bag</a></h4>
<div class="product-rating mb-2">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star mr-0"></i>
</div>
<h5 class="mb-0 text-primary">$79.00</h5>
</div>
</div>
<div class="col-sm-6 col-lg-3 mb-2-6">
<div class="card-wrapper mb-4">
<div class="card-img"><img src="https://www.bootdey.com/image/240x240/FFB6C1/000000" alt="..."></div>
<div class="card-body">
<div>
<a href="#"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
</div>
</div>
</div>
<div class="text-center">
<h4 class="h5 mb-2"><a href="#" class="text-secondary">Cleaning Equipment</a></h4>
<div class="product-rating mb-2">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star mr-0"></i>
</div>
<h5 class="mb-0 text-primary">$19.22</h5>
</div>
</div>
<div class="col-sm-6 col-lg-3 mb-2-6">
<div class="card-wrapper mb-4">
<div class="card-img"><img src="https://www.bootdey.com/image/240x240/87CEFA/000000" alt="..."></div>
<div class="card-body">
<div>
<a href="#"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
</div>
</div>
</div>
<div class="text-center">
<h4 class="h5 mb-2"><a href="#" class="text-secondary">Washing Liquids</a></h4>
<div class="product-rating mb-2">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star mr-0"></i>
</div>
<h5 class="mb-0 text-primary">$28.25</h5>
</div>
</div>
<div class="col-sm-6 col-lg-3 mb-2-6 mb-lg-0">
<div class="card-wrapper mb-4">
<div class="card-img"><img src="https://www.bootdey.com/image/240x240/7B68EE/000000" alt="..."></div>
<div class="card-body">
<div>
<a href="#"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
</div>
</div>
</div> 
@foreach ($product as $pd )
    

<div class="text-center">
<h4 class="h5 mb-2"><a href="#" class="text-secondary">{{$pd->product_name}}</a></h4>
<div class="product-rating mb-2">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star mr-0"></i>
</div>
<h5 class="mb-0 text-primary"></h5>
</div>
</div>
<div class="col-sm-6 col-lg-3 mb-2-6 mb-lg-0">
<div class="card-wrapper mb-4">
<div class="card-img"><img src="" alt="..."></div>
<div class="card-body">
<div>
<a href="#"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
@endforeach
</div>
</div>
</div> --}}
{{-- <div class="text-center">
<h4 class="h5 mb-2"><a href="#" class="text-secondary">Rubber Gloves</a></h4>
<div class="product-rating mb-2">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star mr-0"></i>
</div>
<h5 class="mb-0 text-primary">$44.42</h5>
</div>
</div>
<div class="col-sm-6 col-lg-3 mb-2-6 mb-sm-0">
<div class="card-wrapper mb-4">
<div class="card-img"><img src="https://www.bootdey.com/image/240x240/48D1CC/000000" alt="..."></div>
<div class="card-body">
<div>
<a href="#"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
</div>
</div>
</div>
<div class="text-center">
<h4 class="h5 mb-2"><a href="#" class="text-secondary">Rubber Gloves</a></h4>
<div class="product-rating mb-2">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star mr-0"></i>
</div>
<h5 class="mb-0 text-primary">$24.69</h5>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="card-wrapper mb-4">
<div class="card-img"><img src="https://www.bootdey.com/image/240x240/000080/000000" alt="..."></div>
<div class="card-body">
<div>
<a href="#"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
</div>
</div>
</div>
<div class="text-center">
<h4 class="h5 mb-2"><a href="#" class="text-secondary">Cleaning Supplies</a></h4>
<div class="product-rating mb-2">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star mr-0"></i>
</div>
<h5 class="mb-0 text-primary">$79.79</h5>
</div>
</div>
</div>
</div> --}}

</section>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>