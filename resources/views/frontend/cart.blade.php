@extends('layouts.web-app.app')
@section('title') {{'Product Cart'}} @endsection
@section('content')
  <div class="cart_area section_padding_100 clearfix">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="cart-table clearfix">
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php $total = 0 @endphp
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        <tr data-id="{{ $id }}">
                            <td data-th="Product" class="cart_product_img d-flex align-items-center">
                              <a href="#">
                                <img src="{{ $details['image'] }}" alt="Product">
                              </a>
                              <h6>{{ $details['name'] }}</h6>
                            </td>
                            <td data-th="Price">${{ $details['price'] }}</td>
                            <td class="qty" data-th="quantity">
                              <input type="number" class="qty-text quantity cart_update" id="qty{{$id}}" step="1" min="1" max="99" name="quantity" value="{{ $details['quantity'] }}">
                              <!-- <div class="quantity">
                                <span class="qty-minus cart_update" onclick="var effect = document.getElementById('qty{{$id}}'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;">
                                  <i class="bx bx-minus" aria-hidden="true"></i>
                                </span>
                                <input type="number" class="qty-text qty" id="qty{{$id}}" step="1" min="1" max="99" name="quantity" value="{{ $details['quantity'] }}">
                                <span class="qty-plus cart_update" onclick="var effect = document.getElementById('qty{{$id}}'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;">
                                  <i class="bx bx-plus" aria-hidden="true"></i>
                                </span>
                              </div> -->
                            </td>
                            <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm remove-from-cart remove_cart"><i class="bx bx-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                @endif
              </tbody>
            </table>
          </div>
          <div class="cart-footer d-flex mt-30">
            <div class="back-to-shop w-50">
              <a href="{{ route('home') }}">Continue shooping</a>
            </div>
            <div class="update-checkout w-50 text-right">
              <a href="#">clear cart</a>
              <!-- <a href="#" class="cart_update">Update cart</a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="coupon-code-area mt-70">
            <div class="cart-page-heading">
              <h5>Cupon code</h5>
              <p>Enter your cupone code</p>
            </div>
            <form action="#">
              <input type="search" name="search" placeholder="#569ab15">
              <button type="submit">Apply</button>
            </form>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="shipping-method-area mt-70">
            <div class="cart-page-heading">
              <h5>Shipping method</h5>
              <p>Select the one you want</p>
            </div>
            <div class="custom-control custom-radio mb-30">
              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
              <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio1">
                <span>Next day delivery</span>
                <span>$4.99</span>
              </label>
            </div>
            <div class="custom-control custom-radio mb-30">
              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
              <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio2">
                <span>Standard delivery</span>
                <span>$1.99</span>
              </label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
              <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio3">
                <span>Personal Pickup</span>
                <span>Free</span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <div class="cart-total-area mt-70">
            <div class="cart-page-heading">
              <h5>Cart total</h5>
              <p>Final info</p>
            </div>
            <ul class="cart-total-chart">
              <li>
                <span>Subtotal</span>
                <span>${{ $total }}</span>
              </li>
              <li>
                <span>Shipping</span>
                <span>Free</span>
              </li>
              <li>
                <span>
                  <strong>Total</strong>
                </span>
                <span>
                  <strong>${{ $total }}</strong>
                </span>
              </li>
            </ul>
            <a href="{{ route('checkout') }}" class="btn karl-checkout-btn">Proceed to checkout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection
@section('scripts')
  <script type="text/javascript">
    $(".cart_update").change(function(e){
      e.preventDefault();

      var ele = $(this);

      $.ajax({
        url: '{{ route('update_cart') }}',
        method: 'patch',
        data: {
          _token: '{{ csrf_token() }}',
          id: ele.parents("tr").attr("data-id"),
          quantity: ele.parents("tr").find(".quantity").val(),
        },
        success: function(response) {
          window.location.reload();
        }
      })

    })


    $(".remove_cart").click(function(e){
      e.preventDefault();

      var ele = $(this);

      if(confirm("Do you really want to remove?")) {
        $.ajax({
          url: '{{ route('remove_from_cart') }}',
          method: 'DELETE',
          data: {
            _token: '{{ csrf_token() }}',
            id: ele.parents("tr").attr("data-id")
          },
          success: function(response) {
            window.location.reload();
          }
        })
      }
    })
  </script>
@endsection