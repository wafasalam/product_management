
<h1>hai..{{session('username')}}</h1>

<a href="create" class="btn btnsmall  btn-outline-secondary btn-icon-text">
                       ADD PRODUCT
                          <i class="ti-file btn-icon-append"></i>                          
                        </a>
                       
 <table class="table table-hover" id="value-table">
                      <thead>
                        <tr>
                          <th>Product Name</th>&nbsp;&nbsp;
                          <th>Mrp</th>&nbsp;&nbsp;
                          <th>Sale Price</th>&nbsp;&nbsp;
                           <th>Stock</th>&nbsp;&nbsp;
                          <th>Image</th>&nbsp;&nbsp;
                        </tr>
                      </thead>
                      <tbody> 
                           
                         {{-- @if(count($product)) --}}
                        @foreach($product as $prd)
                        <tr>
                                                               
                           <td>{{$prd->product_name}}</td>&nbsp;&nbsp;
                           <td>{{$prd->price}}</td>&nbsp;&nbsp;
                           <td>{{$prd->sale_price}}</td>&nbsp;&nbsp;
                           <td>{{$prd->stock}}</td>&nbsp;&nbsp;
                           
                           <td><img src="{{url('product/'.$prd->product_image)}}" width="150" height="100"></td> 

                                

                              {{-- <td>
                        <a href="{{url('edit/'.$user->id)}}" class="btn btnsmall  btn-outline-secondary btn-icon-text">
                          EDIT
                          <i class="ti-file btn-icon-append"></i>                          
                        </a>
                        </td>         
                         <td>
                        <a href="{{url('delete/'.$user->id)}}" class="btn btnsmall  btn-outline-danger btn-icon-text">
                          DELETE
                          <i class="ti-file btn-icon-append"></i>                          
                        </a>
                        </td>                    
                          <td> 
                          </td>
                          </tr> --}}
                            @endforeach
                            {{-- @endif                                         --}}
                      </tbody>
                    </table> 