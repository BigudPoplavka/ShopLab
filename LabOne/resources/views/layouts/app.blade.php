<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a href="{{ url('/products') }}">
                    <img src="{{ asset('img/logo_small.png') }}" alt="" id="top-logo">
                </a>
                <a class="navbar-brand" href="{{ url('/products') }}" id="logo">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <u id="navbar-phone">+ X (XXX) XXX-XX-XX</u>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Shop menu -->
        <div class="shop-menu">
            <div class="links-block"> 
                <div class="link-area">
                    <a href="{{ route('products') }}" class="top-menu-links">
                        Магазин</a>
                </div>
                <div class="link-area">
                    <a href="{{ route('delivery') }}" class="top-menu-links">
                        Доставка и самовывоз</a>
                </div>
                <div class="link-area">
                    <a href="{{ route('guarantee') }}" class="top-menu-links">
                        Гарантия и возврат</a>
                </div>
                <div class="link-area">
                    <a href="{{ route('contacts') }}" class="top-menu-links">
                        Контакты</a>
                </div>
            </div>
        </div>

        <main class="" style="margin-bottom: 0px;">
            @yield('content')
        </main> 
        <!-- Main content -->
        <div class="main-content">
            <div class="left-menu">
                <ul id="non-mark" class="menu-ul">
                    <li class="menu-li">
                        <button class="menu-button">    
                        <a href="" class="left-menu-links">Аксессуары</a>
                        </button>
                    </li>
                    <li class="menu-li">
                        <button class="menu-button">    
                        <a href="" class="left-menu-links">Барабанные установки</a>
                        </button>
                    </li>
                    <li class="menu-li">
                        <button class="menu-button">    
                        <a href="" class="left-menu-links">Барабанные палочки</a>
                        </button>
                    </li>
                    <li class="menu-li">
                        <button class="menu-button">    
                        <a href="" class="left-menu-links">Тарелки</a>
                        </button>
                    </li>
                    <li class="menu-li">
                        <button class="menu-button">    
                        <a href="" class="left-menu-links">Педали</a>
                        </button>
                    </li>
                    <li class="menu-li">
                        <button class="menu-button">    
                        <a href="" class="left-menu-links">Карданы</a>
                        </button>
                    </li>
                    <li class="menu-li">
                        <button class="menu-button">    
                        <a href="" class="left-menu-links">Отдельные барабаны</a>
                        </button>
                    </li>
                    <li class="menu-li">
                        <button class="menu-button">    
                        <a href="" class="left-menu-links">Стойки и крепления</a>
                        </button>
                    </li>
                    <li class="menu-li">
                    <button class="menu-button">    
                    <a href="" class="left-menu-links">Чехлы</a>
                    </button>
                    </li>
                </ul>
            </div>
            <div class="content-view">
               @yield('sub-content')
            </div>
        </div>
    </div>

    <div class="news">
        <h4 class="footer-h news-title" >
            Новости
        </h4>
      
    </div>

    <!-- Footer -->
    <footer>
           <div id="footer-content">
               <h6 class="footer-h">
                   КОНТАКТЫ
               </h6>
               <div>
                   <table cellpadding="10px">
                       <tr>
                           <td class="footer-text t-end">Телефон:</td>
                           <td class="footer-text t-start"><u>+ X (XXX) XXX-XX-XX</u></td>
                       </tr>
                       <tr>
                           <td class="footer-text t-end">E-mail:</td>
                           <td class="footer-text t-start"><u>DrumShop@mail.ru</u></td>
                       </tr>
                       <tr>
                           <td class="footer-text t-end">Адрес:</td>
                           <td class="footer-text t-start"><u>Токио, Акихабара, ストライク</u></td>
                       </tr>
                       <br>
                   </table>
               </div>
               <hr>
               <br>
               <h6 class="footer-h">
                   ПАРТНЕРЫ
               </h6>
               <div class="partners">
                    <div class="flexed">
                        <img src="{{ asset('img/partners_1.png') }}" class="partners" alt="">
                        <img src="{{ asset('img/partners_2.png') }}" class="partners" alt="" style="height: 70px;padding-top: 25%;">
                        <img src="{{ asset('img/partners_3.png') }}" class="partners" alt="">
                    </div>
               </div>
           </div>
           <div>
               <img src="{{ asset('img/logo_footer.png') }}" alt="" id="footer-logo">
           </div>
           <div id="footer-content">
               <h6 class="footer-h">
                   ИНФОРМАЦИЯ
               </h6>
           </div>
       </footer>
</body>
<script>
var logo = document.getElementById("top-logo");
var opacity = 100;

  


</script>
</html>
