@section('product')
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
@endsection('product')

