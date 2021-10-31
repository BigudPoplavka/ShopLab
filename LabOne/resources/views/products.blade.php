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
            <div class="input-line">
                <input type="text" placeholder="Фирма" class="filter-input" name="firm">
                <input type="text" placeholder="Размер" class="filter-input" name="size">
                <input type="text" placeholder="Цена от" class="filter-input" name="start_price">
                <input type="text" placeholder="до" class="filter-input" name="max_price">
                <button class="go">Применить</button>
            </div>
        </div>
    </div>
    
 
    <div class="prod-container">
        
        @foreach($items as $item)
            <p>$item[0]</p>
        @endforeach

        <!-- @foreach($products_ as $product)
            <div class="prod-img-block">
                <img src="{{ $product->image }}" alt="" class="prod-img">
            </div>
            <div>
                <h4 class="prod-title"><b>
                    {{ $product->title }}
                </b></h4>
                    <div class="flexed space">
                        <h3 class="price">{{ $product->price }}</h3>
                        <button class="add-to-card">В корзину</button>
                    </div>
                    <h6 class="existing">{{ $product->is_existing }}</h6>
                </div>
            </div>
        @endforeach    -->
    </div>

    <div class="prod-container">     
      
        <div class="pagination">
        </div>
    </div>
    <button class="go" id="next">
        Далее
    </button>
</div>
@endsection('sub-content')