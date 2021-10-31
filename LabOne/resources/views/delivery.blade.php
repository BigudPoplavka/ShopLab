@extends('layouts.app')

@section('sub-content')
<div class="sub-content">
    <h6><u><a href="/">Главная</a></u>
        >
        <a href="#" class="sub_links">Доставка и самовывоз</a>
    </h6>
    <h3 class="sub-content-title">Доставка и самовывоз</h3>
    <div>
    <br>
    <h2 class="sub-content-text">Доставка</h2>
    <br>
        <h4 class="sub-content-text">Токио:</h4>
        <ul class="info">
            <li class="sub-cont-li">Самовывоз из <a href="{{ route('delivery') }}">нашего магазина</a>  - Токио, Акихабара</li>
            <li class="sub-cont-li">
                <div><ins>Курьерская доставка Dostavista.</ins>
                Возможна доставка курьером по Токио день в день, стоимость доставки от 600 йен. (точную сумму озвучит менеджер при подтверждении вашего заказа по телефону или email), предоплата заказа производится любой банковской картой через надежную и безопасную платежную систему CloudPayments.
                Оформление заказа в интернет магазине обязательно.
                При оформлении заказа в комментариях укажите - "Доставка курьером"
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection('sub-content')