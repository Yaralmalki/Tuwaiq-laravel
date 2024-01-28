@extends('layouts.app')
@section('content')
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
      @if(count($cartItems) > 0)
          @foreach($cartItems as $item)
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0"> Cart </h5>
          </div>
          <div class="card-body ">
            <div class="row">
              <div class="col">
                <!-- Image -->
                <img src="{{ asset('/images/' . $item->img) }}" alt="image">
                <!-- Image -->
              </div>

              <div class="col text-start">
              <h3 >{{$item->itemname}}</h3>
              <!-- Price -->
              <p ><strong>السعـر {{$item->price}}</strong></p>
                <!-- Price -->
                <br>
                <button type="button" class="btn btn-primary btn-sm me-5  " data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
            </div>
          </div>      
        </div>
          @endforeach
          @else
            <p>حقيبة التسوق فارغة</p>
           @endif
           <div class="col">
        <div class="card ">
          <div class="card-header ">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                </div>
                <span><strong>73</strong></span>
              </li>
            </ul>

            <button type="button" class="btn btn-primary btn-lg btn-block">
              Go to checkout
            </button>
          </div>
        </div>
      </div>
    </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>We accept</strong></p>
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
              alt="Visa" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard" />
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
