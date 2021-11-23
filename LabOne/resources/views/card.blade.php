@extends('layouts.app')

@section('sub-content')
<div class="sub-content">
    <h3 class="sub-content-title">Корзина</h3>
    <div class="flexed">     
      <div class="card-content">
      @foreach($arr as $row)
   <div class="prod-container">
       <div class="prod-container">
           @foreach($row as $item)
           <div class="product">
            <div class="prod-img-block">
                <img src="{{ $item['image'] }}" alt="" class="prod-img">
            </div>
            <div>
                <h4 class="prod-title"><b>
                    {{ $item["title"] }}
                </b></h4>
                <div class="flexed space">
                    <h3 class="price">{{ $item["price"] }}</h3>
                      
                </div>              
            </div>  
        </div>       
           @endforeach
       </div>
    </div>
   @endforeach
      </div>
      <div class="shopping-panel">
          <h3>Ваша покупка</h3>
          <hr>
          <h3>Товаров: {{ count($arr) }}</h3>
          <div>
          <h3>На сумму: {{ $sum }}</h3>
          <br>
                <button class="confirm-offer"> 
                    <a href="" class="offer-link">Оформить заказ</a>
                </button>
          </div>
      </div>
    </div>
</div>
@endsection('sub-content')