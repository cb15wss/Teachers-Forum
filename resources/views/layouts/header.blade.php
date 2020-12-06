<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{ url('/') }}" class="navbar pull-left"><img src="{{ asset('images/magister_150.png')}}" alt="logo image"></a></div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">


                            @if(Auth::check())
                                <li><a href="{{ route('home', Auth::user()) }}"><i class="fa fa-user"></i> My Profile</a></li>
                                <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                </li>
                            @else
                                <li><a href="/register"><i class="fa fa-user"></i>Register</a></li>
                                <li><a href="/login"><i class="fa fa-lock"></i> Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
    <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">

                            @if(Auth::check())

                                <li><a href="{{url('/')}}" class="active">Home</a></li>
                                <li><a href="{{url('/videos')}}">Forum</a></li>
                                <li><a href="{{url('/about')}}">About</a></li>
                                <li><a href="{{url('/faq')}}">FAQ's</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>

                            @else
                            <li><a href="{{url('/')}}" class="active">Home</a></li>
                                <li><a href="{{url('/faq')}}">FAQ's</a></li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                            @endif
                        </ul>
                    </div>
            </div>
            </div>
        </div>
    </div>
</header><!--/header-->
<body>
<div>
    <div class="container">

        <div><img class="banner" src="{{ asset('images/banner.png')}}" alt="Magister logo image"></div>

    </div>
</div>
</body>
