<section class="mh-home" id="mh-home">
    <div class="home-ovimg">
        <div class="container">
            <div class="row xs-column-reverse section-separator vertical-middle-content home-padding">
                <div class="col-sm-6">
                    <div class="mh-header-info">
                        <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                            <span>Hello I'm</span>
                        </div>
                        
                        <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->name }}</h2>
                        <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">{{ $user->self_identity_name }}</h4>
                        
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i class="fa fa-envelope"></i><a href="mailto:">{{ $user->email }}</a></li>
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i class="fa fa-phone"></i><a href="callto:">+{{ $user->phone }}</a></li>
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i class="fa fa-map-marker"></i><address>{{ $user->address }}</address></li>
                        </ul>
                        
                        <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                            <li><a href="{{ $user->facebook }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $user->whatsapp_phone }}"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="{{ $user->github }}"><i class="fa fa-github"></i></a></li>
                            <li><a href="{{ $user->linkd_in }}"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                        <div class="img-border">
                            <img src="{{$user->avatar ? asset($user->avatar) : asset('frontend/assets/images/hero.png')}}" alt="{{$user->name}}"  class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>