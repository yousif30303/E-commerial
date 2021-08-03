@extends('welcome')

@section('content')
<section  class="banner_top">
  <div class="owl-carousel owl-theme" id="banner_top">
    <div class="item">
    <img src="{{asset('/image/Banner1.png')}}" alt="">  
    </div>
    <div class="item">
      <img src="{{asset('/image/Banner2.png')}}" alt="">  
    </div>
    <div class="item">
      <img src="{{asset('/image/Banner1.png')}}" alt="">  
    </div>
    
</div>

</section>
<section class="top_sales">
  <h5>Top Sales</h5><hr>
      
  <div class="owl-carousel owl-theme" id="Top_sales">
      
    @foreach ($products as $product)
    <div class="item">
      <a href="{{route('product', $product)}}">
        <img src="{{asset(''.$product->item_image.'')}}" alt="">
      </a>
    <div class="text-center">
      <h6>{{$product->item_name}}</h6>
      <div class="rating text-warning font-size-12 mb-2">
        <span><i class="fas fa-star"></i></span>
        <span><i class="fas fa-star"></i></span>
        <span><i class="fas fa-star"></i></span>
        <span><i class="fas fa-star"></i></span>
        <span><i class="far fa-star"></i></span>
      </div>
      <p class="text-primary font-weight-bold">${{$product->item_price}}</p>
        <form action="{{route('AddToCart', $product)}}" method="post">
          @csrf
        <button class="btn btn-warning btn-sm">Add to Cart</button>
        </form>
    </div>
    
    </div>
    @endforeach
</div>
</section>  
<section class="Special_Price">
  <h5>Special Price</h5>
  <div id="filters" class="button-group text-right font-baloo font-size-16">
    <button class="btn is-checked" data-filter="*">All Brand</button>
    <button class="btn" data-filter=".Apple">Apple</button>
    <button class="btn" data-filter=".Samsung">Samsung</button>
    <button class="btn" data-filter=".Redmi">Redmi</button>
  </div>
  <div class="grid row mb-4">

  @foreach ($products as $product) 
  <div class="grid-item {{$product->item_brand}} border">
    <div class="item py-2" style="width: 200px;">
     <div class="product font-rale">
       <a href="{{route('product', $product)}}"><img src="{{asset(''.$product->item_image.'')}}" alt="product1" class="img-fluid"></a>
       <div class="text-center">
         <h6>{{$product->item_name}}</h6>
         <div class="rating text-warning font-size-12">
           <span><i class="fas fa-star"></i></span>
           <span><i class="fas fa-star"></i></span>
           <span><i class="fas fa-star"></i></span>
           <span><i class="fas fa-star"></i></span>
           <span><i class="far fa-star"></i></span>
         </div>
         <div class="price py-2">
           <span class="text-primary font-weight-bold">${{$product->item_price}}</span>
         </div>
         <form action="{{route('AddToCart', $product)}}" method="post">
          @csrf
         <button type="submit" class="btn btn-warning btn-sm">Add to Cart</button>
         </form>
        </div>
     </div>
   </div>
   </div>
   @endforeach
  </div>
</section>

<!-- Banner Ads  -->
<section id="banner_adds">
  <div class="container py-5 text-center">
    <img src="{{asset('/image/banner1-cr-500x150.jpg')}}" alt="banner1" class="img-fluid" style="width: 500px;height:200px">
    <img src="{{asset('/image/banner2-cr-500x150.jpg')}}" alt="banner1" class="img-fluid" style="width: 500px;height:200px">
  </div>
</section>
<!-- !Banner Ads  -->

<section class="new_phones">
  <h5>New Phones</h5><hr>
  <div class="owl-carousel owl-theme" id="new_phones">

    @foreach ($products as $product)
    <div class="item">
    <a href="{{route('product', $product)}}">
      <img src="{{asset(''.$product->item_image.'')}}" alt="">
    </a>
    <div class="text-center">
      <h6>{{$product->item_name}}</h6>
      <div class="rating text-warning font-size-12 mb-2">
        <span><i class="fas fa-star"></i></span>
        <span><i class="fas fa-star"></i></span>
        <span><i class="fas fa-star"></i></span>
        <span><i class="fas fa-star"></i></span>
        <span><i class="far fa-star"></i></span>
      </div>
      <p class="text-primary font-weight-bold">${{$product->item_price}}</p>
      <form action="{{route('AddToCart', $product)}}" method="post">
        @csrf
        <button type="submit" class="btn btn-warning btn-sm">Add to Cart</button>
      </form>
    </div>
    
    </div>
    @endforeach

</div>
</section>  

<!-- Blogs -->
<section id="blogs">
  <div class="container py-4">
    <h4 class="font-rubik font-size-20">Latest Blogs</h4>
    <hr>

    <div class="owl-carousel owl-theme blogs">
      <div class="item">
        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
          <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
          <img src="{{asset('/image/blog/blog1.jpg')}}" alt="cart image" class="card-img-top">
          <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
          <a href="#" class="color-second text-left">Go somewhere</a>
        </div>
      </div>
      <div class="item">
        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
          <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
          <img src="{{asset('/image/blog/blog2.jpg')}}" alt="cart image" class="card-img-top">
          <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
          <a href="#" class="color-second text-left">Go somewhere</a>
        </div>
      </div>
      <div class="item">
        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
          <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
          <img src="{{asset('/image/blog/blog3.jpg')}}" alt="cart image" class="card-img-top">
          <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
          <a href="#" class="color-second text-left">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- !Blogs -->
@endsection