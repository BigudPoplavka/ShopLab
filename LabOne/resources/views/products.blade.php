@extends('layouts.app')

@section('sub-content')
<div class="sub-content">
    <h6><u><a href="/products">Главная</a></u></h6>
    <div class="filters">
        <div class="filter_titles">
            <h4 class="filters-title">
                Общие
            </h4>
        </div>

        <div class="filter-fields">
            <form action="" method="post">
                <div class="input-line">
                    <input type="text" placeholder="Фирма" class="filter-input" name="firm">
                    <input type="text" placeholder="Размер" class="filter-input" name="size">
                    <input type="text" placeholder="Цена от" class="filter-input" name="start_price">
                    <input type="text" placeholder="до" class="filter-input" name="max_price">
                    <button class="go"><a href="" class="filter_go">Применить</a></button>
                </div>
            </form>
        </div>
    </div>
    
 
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
                    <form method="post" 
                    action="{{ route('addToCard', [$item['title'],$item['category'],$item['price']] ) }}">
                        @csrf
                        @if($item["is_existing"] == 1)
                            <button class="add-to-card">В корзину</button>
                        @endif
                    </form>                
                </div>
                @if($item["is_existing"] == 1)
                    <h6 class="existing">В наличии</h6>
                @else
                    <h6 class="existing">Нет в наличии</h6>
                @endif
            </div>  
        </div>       
           @endforeach
       </div>
    </div>
   @endforeach

  

    <div class="prod-container">     
      
        <div class="pagination">
        </div>
    </div>
    <button class="go" id="next">
        Далее
    </button>
</div>
@endsection('sub-content')