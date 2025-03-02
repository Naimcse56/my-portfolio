<section class="mh-about" id="mh-about">
    <div class="container">
        <div class="row section-separator">
            <div class="col-sm-12 col-md-6">
                <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <img src="{{asset('frontend/assets/images/ab-img.png')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mh-about-inner">
                    <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">About Me</h2>
                    <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->about_self }}</p>
                    <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <ul>
                            @forelse ($user->skills->where('is_focusable',1) as $skill)
                                <li><span>{{$skill->name}}</span></li>
                            @empty
                                <li><span>Not Added Yet</span></li>
                            @endforelse
                        </ul>
                    </div>
                    <a href="{{asset($user->cv_path)}}" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s" target="_blank">Downlaod CV <i class="fa fa-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mh-service">
    <div class="container">
        <div class="row section-separator">
            <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <h3>What I do</h3>
            </div>
            @forelse ($user->services->where('is_active',1) as $service)
                <div class="col-sm-4">
                    <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <i class="{{$service->icon ? $service->icon : 'fa fa-desktop'}}"></i>
                        <h3>{{$service->name}}</h3>
                        <p>{{$service->short_details}}</p>
                    </div>
                </div>
            @empty
                <div class="col-sm-4">
                    <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <i class="fa fa-desktop"></i>
                        <h3>Not Added Yet</h3>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>