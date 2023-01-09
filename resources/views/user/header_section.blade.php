<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="{{url('index')}}">
                        <img src="user/img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{url('home')}}">Homepage</a></li>
                            <li><a href="{{url('category')}}">Categories <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="{{url('category')}}">Categories</a></li>
                                    <li><a href="{{url('anime_details')}}">Anime Details</a></li>
                                    <li><a href="{{url('anime_watching')}}">Anime Watching</a></li>
                                    <li><a href="{{url('blog_details')}}">Blog Details</a></li>
                                    <li><a href="{{url('signup')}}">Sign Up</a></li>
                                    <li><a href="{{url('index')}}">Login</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('blog')}}">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right">
                    <a href="#" class="search-switch"><span class="icon_search"></span></a>
                    <a href="{{url('index')}}"><span class="icon_profile"></span></a>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>