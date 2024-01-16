@extends('layouts.web-app.app')
@section('title') {{'Shop'}} @endsection
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
                            <i class="fa fa-minus" aria-hidden="true"></i>
                          </span>
                          <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                          <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                          </span>
                        </div>
                        <button type="submit" name="addtocart" value="5" class="cart-submit">Add to cart</button>
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
    <section class="shop_grid_area section_padding_100">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
              <div class="shop_sidebar_area">
                <div class="widget catagory mb-50">
                  <div class="nav-side-menu">
                    <h6 class="mb-0">Catagories</h6>
                    <div class="menu-list">
                      <ul id="menu-content2" class="menu-content collapse out">
                        <li data-toggle="collapse" data-target="#women2">
                          <a href="/shop">All</a>
                        </li>
                        @foreach($categories as $category)
                          <li data-toggle="collapse" data-target="#women2">
                            <a href="/shop?categoryId={{$category->id}}">{{$category->name}}</a>
                          </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="widget price mb-50">
                  <h6 class="widget-title mb-30">Filter by Price</h6>
                  <div class="widget-desc">
                    <div class="slider-range">
                      <div data-min="0" data-max="3000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="1350" data-label-result="Price:">
                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                      </div>
                      <div class="range-price">Price: 0 - 1350</div>
                    </div>
                  </div>
                </div>
                <div class="widget color mb-70">
                  <h6 class="widget-title mb-30">Filter by Color</h6>
                  <div class="widget-desc">
                    <ul class="d-flex justify-content-between">
                      <li class="gray">
                        <a href="#">
                          <span>(3)</span>
                        </a>
                      </li>
                      <li class="red">
                        <a href="#">
                          <span>(25)</span>
                        </a>
                      </li>
                      <li class="yellow">
                        <a href="#">
                          <span>(112)</span>
                        </a>
                      </li>
                      <li class="green">
                        <a href="#">
                          <span>(72)</span>
                        </a>
                      </li>
                      <li class="teal">
                        <a href="#">
                          <span>(9)</span>
                        </a>
                      </li>
                      <li class="cyan">
                        <a href="#">
                          <span>(29)</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="widget size mb-50">
                  <h6 class="widget-title mb-30">Filter by Size</h6>
                  <div class="widget-desc">
                    <ul class="d-flex justify-content-between">
                      <li>
                        <a href="#">XS</a>
                      </li>
                      <li>
                        <a href="#">S</a>
                      </li>
                      <li>
                        <a href="#">M</a>
                      </li>
                      <li>
                        <a href="#">L</a>
                      </li>
                      <li>
                        <a href="#">XL</a>
                      </li>
                      <li>
                        <a href="#">XXL</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="widget recommended">
                  <h6 class="widget-title mb-30">Recommended</h6>
                  <div class="widget-desc">
                    <div class="single-recommended-product d-flex mb-30">
                      <div class="single-recommended-thumb mr-3">
                        <img src="img/product-img/product-10.jpg" alt>
                      </div>
                      <div class="single-recommended-desc">
                        <h6>Men’s T-shirt</h6>
                        <p>$ 39.99</p>
                      </div>
                    </div>
                    <div class="single-recommended-product d-flex mb-30">
                      <div class="single-recommended-thumb mr-3">
                        <img src="img/product-img/product-11.jpg" alt>
                      </div>
                      <div class="single-recommended-desc">
                        <h6>Blue mini top</h6>
                        <p>$ 19.99</p>
                      </div>
                    </div>
                    <div class="single-recommended-product d-flex">
                      <div class="single-recommended-thumb mr-3">
                        <img src="img/product-img/product-12.jpg" alt>
                      </div>
                      <div class="single-recommended-desc">
                        <h6>Women’s T-shirt</h6>
                        <p>$ 39.99</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-8 col-lg-9">
              <div class="shop_grid_product_area">
                <div class="row">
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
              <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-sm">
                    <li class="page-item active">
                      <a class="page-link" href="#">01</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">02</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">03</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection