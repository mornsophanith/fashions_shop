@extends('layouts.web-app.app')
@section('title') {{'Detail Product'}} @endsection
@section('content')
    <div class="breadcumb_area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <ol class="breadcrumb d-flex align-items-center">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Dresses</a>
              </li>
              <li class="breadcrumb-item active">Long Dress</li>
            </ol>
            <a href="{{ route('home') }}" class="backToHome d-block"><i class='bx bx-chevrons-left' ></i> Back to Category </a>
          </div>
        </div>
      </div>
    </div>
    <section class="single_product_details_area section_padding_0_100">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="single_product_thumb">
              <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url({{$product->image}});"></li>
                  @foreach($features_img as $feature_img)
                    <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url({{$feature_img->image}});"></li>
                  @endforeach
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a class="gallery_img" href="{{$product->image}}">
                      <img class="d-block w-100" src="{{$product->image}}" alt="First slide">
                    </a>
                  </div>
                  @foreach($features_img as $feature_img)
                  <div class="carousel-item">
                    <a class="gallery_img" href="img/product-img/product-2.jpg">
                      <img class="d-block w-100" src="{{$feature_img->image}}" alt="Second slide">
                    </a>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="single_product_desc">
              <h4 class="title">
                <a href="#">{{$product->name}}</a>
              </h4>
              <h4 class="price">$ {{$product->price}}</h4>
              <p class="available">Available: <span class="text-muted">In Stock</span>
              </p>
              <div class="single_product_ratings mb-15">
                <i class="bx bx-star" aria-hidden="true"></i>
                <i class="bx bx-star" aria-hidden="true"></i>
                <i class="bx bx-star" aria-hidden="true"></i>
                <i class="bx bx-star" aria-hidden="true"></i>
                <i class="bx bx-star" aria-hidden="true"></i>
              </div>
              <div class="widget size mb-50">
                <h6 class="widget-title">Size</h6>
                <div class="widget-desc">
                  <ul>
                    @foreach($features_size as $feature_size)
                      <li>
                        <a href="#">{{$feature_size->size}}</a>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <form action="{{ route('detail.product', $product->id) }}" class="cart clearfix mb-50 d-flex" method="post">
                @method('POST')
                @csrf
                <div class="quantity">
                  <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;">
                    <i class="bx bx-minus" aria-hidden="true"></i>
                  </span>
                  <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                  <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;">
                    <i class="bx bx-plus" aria-hidden="true"></i>
                  </span>
                </div>
                <!-- <button type="submit" name="addtocart" value="5" class="btn cart-submit d-block">Add to cart</button> -->
                <a href="{{ route('add.to.cart', $product->id)  }}" class="btn cart-submit" style="display: flex;align-items: center;justify-content: center;">Add to cart</a>
              </form>
              <div id="accordion" role="tablist">
                <div class="card">
                  <div class="card-header" role="tab" id="headingOne">
                    <h6 class="mb-0">
                      <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Information</a>
                    </h6>
                  </div>
                  <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
                      <p>Approx length 66cm/26" (Based on a UK size 8 sample) Mixed fibres</p>
                      <p>The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 5'8"</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" role="tab" id="headingTwo">
                    <h6 class="mb-0">
                      <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Cart Details</a>
                    </h6>
                  </div>
                  <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quis in veritatis officia inventore, tempore provident dignissimos nemo, nulla quaerat. Quibusdam non, eos, voluptatem reprehenderit hic nam! Laboriosam, sapiente! Praesentium.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magnam laborum eaque.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" role="tab" id="headingThree">
                    <h6 class="mb-0">
                      <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">shipping &amp; Returns</a>
                    </h6>
                  </div>
                  <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quo sint repudiandae suscipit ab soluta delectus voluptate, vero vitae, tempore maxime rerum iste dolorem mollitia perferendis distinctio. Quibusdam laboriosam rerum distinctio. Repudiandae fugit odit, sequi id!</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae qui maxime consequatur laudantium temporibus ad et. A optio inventore deleniti ipsa.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-body">
            <div class="quickview_body">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-5">
                    <div class="quickview_pro_img">
                      <img src="img/product-img/product-1.jpg" alt>
                    </div>
                  </div>
                  <div class="col-12 col-lg-7">
                    <div class="quickview_pro_des">
                      <h4 class="title">Boutique Silk Dress</h4>
                      <div class="top_seller_product_rating mb-15">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <h5 class="price">$120.99 <span>$130</span>
                      </h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                      <a href="#">View Full Product Details</a>
                    </div>
                    <form class="cart" method="post">
                      <div class="quantity">
                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;">
                          <i class="bx bx-minus" aria-hidden="true"></i>
                        </span>
                        <input type="number" class="qty-text" id="qty2" step="1" min="1" max="12" name="quantity" value="1">
                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;">
                          <i class="bx bx-plus" aria-hidden="true"></i>
                        </span>
                      </div>
                      <a href="{{ route('add.to.cart', $product->id)  }}" class="cart-submit">ADD TO CART</a>
                      <div class="modal_pro_wishlist">
                        <a href="wishlist.html" target="_blank">
                          <i class="ti-heart"></i>
                        </a>
                      </div>
                      <div class="modal_pro_compare">
                        <a href="compare.html" target="_blank">
                          <i class="ti-stats-up"></i>
                        </a>
                      </div>
                    </form>
                    <div class="share_wf mt-30">
                      <p>Share With Friend</p>
                      <div class="_icon">
                        <a href="#">
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                          <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                          <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="you_may_like_area clearfix">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section_heading text-center">
              <h2>related Products</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="you_make_like_slider owl-carousel">
              @foreach($products as $product)
              <div class="single_gallery_item">
                <div class="product-img">
                  <img src="{{$product->image}}" alt>
                  <div class="product-quicview">
                    <a href="{{ route('detail.product', $product->id)}}">
                      <i class="bx bx-plus"></i>
                    </a>
                  </div>
                </div>
                <div class="product-description">
                  <h4 class="product-price">${{$product->price}}</h4>
                  <p>{{$product->name}}</p>
                  <a href="{{ route('add.to.cart', $product->id)}}" class="add-to-cart-btn">ADD TO CART</a>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection