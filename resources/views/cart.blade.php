@extends('welcome')

@section('content')
    <!-- Shopping cart section  -->
    <section id="cart" class="py-3">
        <div class="container-fluid w-75">
            <h5 class="font-baloo font-size-20">Shopping Cart</h5>

            <!--  shopping cart items   -->
                <div class="row">
                    <div class="col-sm-9">
                        <!-- cart item -->
                            <?php 
                              $val=0;
                            ?>
                            @foreach ($carts as $cart)
                                
                            <div class="row border-top py-3 mt-3">
                                <div class="col-sm-2">
                                    <img src="{{$cart->item_image}}" style="height: 120px;" alt="cart1" class="img-fluid">
                                </div>
                                <div class="col-sm-8">
                                    <h5 class="font-baloo font-size-20">{{$cart->item_name}}</h5>
                                    <small>by {{$cart->item_brand}}</small>
                                    <!-- product rating -->
                                    <div class="d-flex">
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                          </div>
                                          <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                    </div>
                                    <!--  !product rating-->

                                    <!-- product qty -->
                                        <div class="qty d-flex pt-2">
                                            <div class="d-flex font-rale w-25">
                                                <button class="qty-up border bg-light" data-id="{{$cart->item_id}}"><i class="fas fa-angle-up"></i></button>
                                                <input type="text" data-id="{{$cart->item_id}}" class="qty_input border px-2 w-100 bg-light" disabled value="1">
                                                <button data-id="{{$cart->item_id}}" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                            </div>
                                            <form action="{{route('DeleteCart', $cart)}}" method="POST">
                                              @method('DELETE') 
                                              @csrf
                                               <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                            </form>
                                            <button type="submit" class="btn font-baloo text-danger">Save for Later</button>
                                        </div>
                                    <!-- !product qty -->

                                </div>
                                <div class="col-sm-2 text-right">
                                    <div class="font-size-20 text-danger font-baloo">
                                        $<span class="product_price" data-id="{{$cart->item_id}}" data-price="{{$cart->item_price}}">{{$cart->item_price}}</span>
                                    </div>
                                </div>
                            </div>
                            <?php $val+=$cart->item_price?>
                            @endforeach
                        <!-- !cart item -->
                    </div>
                    <!-- subtotal section-->
                    <div class="col-sm-3">
                        <div class="sub-total border text-center mt-2">
                            <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                            <div class="border-top py-4">
                                <h5 class="font-baloo font-size-20">Subtotal <span id="subtotal">{{count(auth()->user()->carts()->get())}}</span> items <span class="text-danger">$<span class="text-danger" id="deal-price" data-price="{{$val}}">{{$val}}</span> </span> </h5>
                                <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                            </div>
                        </div>
                    </div>
                    <!-- !subtotal section-->
                </div>
            <!--  !shopping cart items   -->
        </div>
    </section>
<!-- !Shopping cart section  -->

<section class="new_phones">
    <h5>New Phones</h5><hr>
    <div class="owl-carousel owl-theme" id="new_phones">
      <div class="item">
      <img src="{{asset('/image/products/1.png')}}" alt="">
      <div class="text-center">
        <h6>iphone</h6>
        <div class="rating text-warning font-size-12 mb-2">
          <span><i class="fas fa-star"></i></span>
          <span><i class="fas fa-star"></i></span>
          <span><i class="fas fa-star"></i></span>
          <span><i class="fas fa-star"></i></span>
          <span><i class="far fa-star"></i></span>
        </div>
        <p>152.00</p>
        <button class="btn btn-warning btn-sm">add to cart</button>
      </div>
      
      </div>
      <div class="item">
        <img src="{{asset('/image/products/2.png')}}" alt="">
        <div class="text-center">
          <h6>iphone</h6>
          <div class="rating text-warning font-size-12 mb-2">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <p>152.00</p>
          <button class="btn btn-warning btn-sm">add to cart</button>
        </div>  
      </div>
      <div class="item">
        <img src="{{asset('/image/products/3.png')}}" alt="">
        <div class="text-center">
          <h6>iphone</h6>
          <div class="rating text-warning font-size-12 mb-2">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <p>152.00</p>
          <button class="btn btn-warning btn-sm">add to cart</button>
        </div>  
      </div>
      <div class="item">
        <img src="{{asset('/image/products/4.png')}}" alt="">
        <div class="text-center">
          <h6>iphone</h6>
          <div class="rating text-warning font-size-12 mb-2">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <p>152.00</p>
          <button class="btn btn-warning btn-sm">add to cart</button>
        </div>  
      </div>
      <div class="item">
        <img src="{{asset('/image/products/5.png')}}" alt="">
        <div class="text-center">
          <h6>iphone</h6>
          <div class="rating text-warning font-size-12 mb-2">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <p>152.00</p>
          <button class="btn btn-warning btn-sm">add to cart</button>
        </div>  
      </div>
      <div class="item">
        <img src="{{asset('/image/products/6.png')}}" alt="">
        <div class="text-center">
          <h6>iphone</h6>
          <div class="rating text-warning font-size-12 mb-2">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <p>152.00</p>
          <button class="btn btn-warning btn-sm">add to cart</button>
        </div>  
      </div>
      <div class="item">
        <img src="{{asset('/image/products/8.png')}}" alt="">
        <div class="text-center">
          <h6>iphone</h6>
          <div class="rating text-warning font-size-12 mb-2">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <p>152.00</p>
          <button class="btn btn-warning btn-sm">add to cart</button>
        </div>  
      </div>
      <div class="item">
        <img src="{{asset('/image/products/10.png')}}" alt="">
        <div class="text-center">
          <h6>iphone</h6>
          <div class="rating text-warning font-size-12 mb-2">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <p>152.00</p>
          <button class="btn btn-warning btn-sm">add to cart</button>
        </div>  
      </div>
      <div class="item">
        <img src="{{asset('/image/products/11.png')}}" alt="">
        <div class="text-center">
          <h6>iphone</h6>
          <div class="rating text-warning font-size-12 mb-2">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <p>152.00</p>
          <button class="btn btn-warning btn-sm">add to cart</button>
        </div>  
      </div>
      <div class="item">
        <img src="{{asset('/image/products/12.png')}}" alt="">
        <div class="text-center">
          <h6>iphone</h6>
          <div class="rating text-warning font-size-12 mb-2">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <p>152.00</p>
          <button class="btn btn-warning btn-sm">add to cart</button>
        </div>  
      </div>
      <div class="item">
        <img src="{{asset('/image/products/13.png')}}" alt="">
        <div class="text-center">
          <h6>iphone</h6>
          <div class="rating text-warning font-size-12 mb-2">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <p>152.00</p>
          <button class="btn btn-warning btn-sm">add to cart</button>
        </div>  
      </div>
      <div class="item">
        <img src="{{asset('/image/products/14.png')}}" alt="">
        <div class="text-center">
          <h6>iphone</h6>
          <div class="rating text-warning font-size-12 mb-2">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <p>152.00</p>
          <button class="btn btn-warning btn-sm">add to cart</button>
        </div>  
      </div>
      <div class="item">
        <img src="{{asset('/image/products/15.png')}}" alt="">
        <div class="text-center">
          <h6>iphone</h6>
          <div class="rating text-warning font-size-12 mb-2">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <p>152.00</p>
          <button class="btn btn-warning btn-sm">add to cart</button>
        </div>  
      </div>
  </div>
  </section>
@endsection