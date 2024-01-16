<header class="header_area">
  <div class="top_header_area">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-end">
        <div class="col-12 col-lg-8">
          <div class="top_single_area d-flex align-items-center">
            <div class="top_logo">
              <a href="#">
                <img src="../../img/core-img/logo.png" alt="logo" style="width: 500px">
              </a>
            </div>
            <div class="header-cart-menu d-flex align-items-center ml-auto">
              <div class="cart">
                <a href="#" id="header-cart-btn" target="_blank">
                  <span class="cart_quantity">{{$count_array}}</span>
                  <i class='bx bxs-shopping-bag-alt'></i> Your Bag</a>
                <ul class="cart-list">
                    @php $total = 0 @endphp
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                            <li>
                                <a href="#" class="image">
                                <img src="{{ $details['image'] }}" class="cart-thumb" alt>
                                </a>
                                <div class="cart-item-desc">
                                <h6>
                                    <a href="#">{{ $details['name'] }}</a>
                                </h6>
                                <p>{{ $details['quantity'] }}x - <span class="price">${{ $details['price'] }}</span>
                                </p>
                                </div>
                                <span class="dropdown-product-remove">
                                <i class="icon-cross"></i>
                                </span>
                            </li>
                        @endforeach
                    @endif
                    <li class="total">
                        <span class="pull-right">Total: ${{ $total }}</span>
                        <a href="{{ route('cart') }}" class="btn btn-sm btn-cart">Cart</a>
                        <a href="{{ route('checkout') }}" class="btn btn-sm btn-checkout">Checkout</a>
                    </li>
                </ul>
              </div>
              <div class="header-right-side-menu ml-15">
                <a href="#" id="sideMenuBtn">
                  <i class='bx bx-menu'></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main_header_area">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 d-md-flex justify-content-between">
          <div class="header-social-area">
            <a href="#">
              <span class="karl-level">Share</span>
              <i class='bx bxl-pinterest-alt' ></i>
            </a>
            <a href="#">
              <i class='bx bxl-facebook'></i>
            </a>
            <a href="#">
              <i class='bx bxl-twitter' ></i>
            </a>
            <a href="#">
              <i class='bx bxl-linkedin-square' ></i>
            </a>
          </div>
          <div class="main-menu-area">
            <nav class="navbar navbar-expand-lg align-items-start">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                  <i class="ti-menu"></i>
                </span>
              </button>
              <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                <ul class="navbar-nav animated" id="nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                  </li>
                  {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <div class="dropdown-menu" aria-labelledby="karlDropdown">
                      <a class="dropdown-item" href="{{ route('home') }}">Home</a>
                      <a class="dropdown-item" href="{{ route('shop') }}">Shop</a>
                      <a class="dropdown-item" href="{{ route('cart') }}">Cart</a>
                      <a class="dropdown-item" href="{{ route('checkout') }}">Checkout</a>
                    </div>
                  </li> --}}
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart') }}">Cart</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('checkout') }}">Checkout</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
          <div class="help-line">
            <a href="tel:+8550967660332"><i class='bx bx-phone' ></i> +8550967660332 </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>