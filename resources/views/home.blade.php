@extends('layouts.web-app.app')
@section('title') {{'Home'}} @endsection
@section('content')
    <section class="top-discount-area d-md-flex align-items-center">
        <div class="single-discount-area">
          <h5>Free Shipping &amp; Returns</h5>
          <h6>
            <a href="#">BUY NOW</a>
          </h6>
        </div>
        <div class="single-discount-area">
          <h5>20% Discount for all dresses</h5>
          <h6>USE CODE: Colorlib</h6>
        </div>
        <div class="single-discount-area">
          <h5>20% Discount for students</h5>
          <h6>USE CODE: Colorlib</h6>
        </div>
    </section>
    <section class="welcome_area">
        <div class="welcome_slides owl-carousel">
          @foreach($slide_banners as $slide_banner)
            <div class="single_slide height-800 bg-img background-overlay" style="background-image: url({{$slide_banner->image}});">
              <div class="container h-100">
                <div class="row h-100 align-items-center">
                  <div class="col-12">
                    <div class="welcome_slide_text">
                      <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* {{$slide_banner->widget}}</h6>
                      <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">{{$slide_banner->title}}</h2>
                      <a href="{{ route('shop') }}" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Shop Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          
        </div>
    </section>
    
    <section class="top_catagory_area d-md-flex clearfix">
      @foreach($banners as $banner)
        <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url({{$banner->image}});">
          <div class="catagory-content">
            <h6>{{$banner->widget}}</h6>
            <h2>{{$banner->title}}</h2>
            <a href="{{ route('shop') }}" class="btn karl-btn">SHOP NOW</a>
          </div>
        </div>
      @endforeach
    </section>

    <section class="new_arrivals_area section_padding_100_0 clearfix">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section_heading text-center">
                <h2>New Arrivals</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="karl-projects-menu mb-100">
          <div class="text-center portfolio-menu">
            <button class="btn active" data-filter="*">ALL</button>
            @foreach($categories as $category)
              <button class="btn" data-filter=".{{$category->id}}">{{$category->name}}</button>
            @endforeach
            
          </div>
        </div>
        <div class="container">
          <div class="row karl-new-arrivals">
            @foreach($products as $key => $product)
              <div class="col-12 col-sm-6 col-md-4 single_gallery_item {{$product->category_id}} wow fadeInUpBig" data-wow-delay="0.{{$key + 1}}s">
                <div class="product-img">
                  <img src="{{$product->image}}" alt>
                  <div class="product-quicview">
                    <a href="{{ route('detail.product', $product->id) }}" title="detail-product">
                      <i class="bx bx-plus"></i>
                    </a>
                  </div>
                </div>
                <div class="product-description">
                  <h4 class="product-price">${{$product->price}}</h4>
                  <p>{{$product->name}}</p>
                  <a href="{{ route('add.to.cart', $product->id)  }}" class="add-to-cart-btn">ADD TO CART</a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
    </section>

    <section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url({{$product_offer->image}});">
        <div class="container h-100">
          <div class="row h-100 align-items-end justify-content-end">
            <div class="col-12 col-md-8 col-lg-6">
              <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                <h2>{{$product_offer->name}} <span class="karl-level">Hot</span>
                </h2>
                <p>* Free shipping until 25 Dec 2017</p>
                <div class="offer-product-price">
                  <h3>
                    <span class="regular-price">$25.90</span> ${{$product_offer->price}}
                  </h3>
                </div>
                <a href="{{ route('shop') }}" class="btn karl-btn mt-30">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="karl-testimonials-area section_padding_100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section_heading text-center">
                <h2>Testimonials</h2>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 col-md-8">
              <div class="karl-testimonials-slides owl-carousel">
                <div class="single-testimonial-area text-center">
                  <span class="quote">"</span>
                  <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                  <div class="testimonial-info d-flex align-items-center justify-content-center">
                    <div class="tes-thumbnail">
                      <img src="img/bg-img/tes-1.jpg" alt>
                    </div>
                    <div class="testi-data">
                      <p>Michelle Williams</p>
                      <span>Client, Los Angeles</span>
                    </div>
                  </div>
                </div>
                <div class="single-testimonial-area text-center">
                  <span class="quote">"</span>
                  <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                  <div class="testimonial-info d-flex align-items-center justify-content-center">
                    <div class="tes-thumbnail">
                      <img src="img/bg-img/tes-1.jpg" alt>
                    </div>
                    <div class="testi-data">
                      <p>Michelle Williams</p>
                      <span>Client, Los Angeles</span>
                    </div>
                  </div>
                </div>
                <div class="single-testimonial-area text-center">
                  <span class="quote">"</span>
                  <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                  <div class="testimonial-info d-flex align-items-center justify-content-center">
                    <div class="tes-thumbnail">
                      <img src="img/bg-img/tes-1.jpg" alt>
                    </div>
                    <div class="testi-data">
                      <p>Michelle Williams</p>
                      <span>Client, Los Angeles</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection
