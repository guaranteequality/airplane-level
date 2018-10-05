<header class="header mb-5 fixed-top" role="banner">
    <div class=" ">
        <section class="header__menu">


            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/">   
                    <img src="{{ asset('imgs/logo.png') }}" width="160" class="header__logo-pic header__logo-pic--png" alt="Logo">
                    <img src="{{ asset('imgs/logo-white.svg') }}" width="160" class="header__logo-pic header__logo-pic--svg" alt="Logo">
                </a>
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <div class="form-inline my-2 my-lg-0 searchForm bg-light border  ">
                        <input class="  mr-sm-2 header__searchBoxInput search-field ui-autocomplete-input" type="search" placeholder="Aircraft registration, photo location, photographer" aria-label="Search" id="quicksearch">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="button" id="btn-quicksearch-search"><span class="fa fa-search quicksearch-icon"></span></button>
                    </div>   
                    <ul class="navbar-nav ml-auto">
                        @if (Route::has('login'))
                        @if (!Auth::guest())                            

                        <li class="nav-item active dropdown">
                            <a href="#" class="dropdown-toggle waves-effect font-weight-bold" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user"></i>
                                {{ Auth::user()->name }} 
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">                                
                                @if(Auth::user()->type==1)

                                <li>
                                    <a href="/admin/index"    onclick="">
                                        <i class="fa fa-sign-out"></i>
                                        Dashboard
                                    </a>

                                </li>
                                @endif
                                <li>
                                    <a href="/profile"    onclick="">
                                        <i class="fa fa-sign-out"></i>Profile
                                    </a>

                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i>{{trans ('global.sign_out') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>                                                    
                            </ul>
                        </li>   
                        @else

                        <div id="header-logged-out" class="header__logged-out ">
                            <a href="#" id="openLogin" class="btn btn--inline btn--transparent btn--text-white" >
                                <span>Log in</span>
                            </a>

                            <a href="/register" class="btn btn--picton-blue btn--signup" role="button">
                                <span>Sign up</span>
                            </a>

                        </div>

                        @endif

                        @endif

                    </ul>
                </div>  
            </nav>

        </section>
    </div>
</header>

