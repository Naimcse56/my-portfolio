<!-- Start Loader -->
<div class="section-loader">
    <div class="loader">
        <div></div>
        <div></div> 
    </div>
</div>
<!-- End Loader -->

<!--
===================
   NAVIGATION
===================
-->
<header class="black-bg mh-header mh-fixed-nav nav-scroll mh-xs-mobile-nav wow fadeInUp" id="mh-header">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg mh-nav nav-btn">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-0 ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#mh-home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#mh-about">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#mh-skills">Skills</a>
                        </li>                                
                        <li class="nav-item">
                           <a class="nav-link" href="#mh-experience">Experiences</a>
                        </li>                                
                        <li class="nav-item">
                            <a class="nav-link" href="#mh-portfolio">Portfolio</a>
                        </li>                               
                        <li class="nav-item">
                            <a class="nav-link" href="#mh-pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#mh-blog">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#mh-contact">Contact</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" style="color: #ffa500" href="{{ route('home') }}">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" style="color: #ffa500" href="{{ route('login') }}">Login</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>