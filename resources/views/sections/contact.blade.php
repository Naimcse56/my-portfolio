<footer class="mh-footer" id="mh-contact">
    <div class="map-image image-bg">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <h3>Contact Me</h3>
                </div>
                <div class="col-sm-12 mh-footer-address">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <div class="each-icon">
                                    <i class="fa fa-location-arrow"></i>
                                </div>
                                <div class="each-info">
                                    <h4>Address</h4>
                                    <address>{{ $user->address }}</address>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                <div class="each-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="each-info">
                                    <h4>Email</h4>
                                    <a href="mailto:yourmail@email.com">{{ $user->email }}</a><br>
                                    <a href="mailto:yourmail@email.com">{{ $user->email }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                <div class="each-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="each-info">
                                    <h4>Phone</h4>
                                    <a href="callto:{{ $user->phone }}">{{ $user->phone }}</a><br>
                                    <a href="https://wa.me/+88{{ $user->phone }}" target="_blank">{{ $user->phone }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mh-copyright wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-left text-xs-center">
                                <p>All right reserved Naimul Islam @ {{date('Y')}}</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <ul class="social-icon">
                                <li><a href="{{ $user->facebook }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ $user->whatsapp_phone }}"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="{{ $user->github }}"><i class="fa fa-github"></i></a></li>
                                <li><a href="{{ $user->linkd_in }}"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <form id="contactForm" action="{{route('email.subscribe_now')}}" class="single-form quate-form wow fadeInUp">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input name="email" class="contact-subject form-control" id="email" type="email" placeholder="Your Email" required>
                                    </div>
                                    <!-- Subject Button -->
                                    <div class="btn-form col-sm-12">
                                        <button type="submit" class="btn btn-fill" id="form-submit">Subscribe Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>