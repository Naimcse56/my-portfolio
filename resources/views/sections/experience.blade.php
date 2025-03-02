<section class="mh-experince" id="mh-experience">
    <div class="bolor-overlay">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 col-md-6">
                    <div class="mh-education">
                         <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Education</h3>
                        <div class="mh-education-deatils">
                            <!-- Education Institutes-->
                            @forelse ($user->educations as $education)
                                <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                    <h4 class="educationyear">{{$education->title}}</h4>
                                    <h6>{{$education->department}}</h6>
                                    <h6 class="educationyear">{{$education->institute_name}}</h6>
                                    <h6>Passing Year : {{$education->passing_year}}</h6>
                                    <h6 class="educationyear">Board : {{$education->board}}</h6>
                                </div>
                            @empty
                                <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                    <h4 class="educationyear">No Information Available</h4>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-work">
                         <h3>Work Experience</h3>
                        <div class="mh-experience-deatils">
                            @forelse ($user->experiences as $experience)
                                <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                    <h4 class="educationyear">{{$experience->designation}}</h4>
                                    <h6>{{$experience->company_name}}</h6>
                                    <h6 class="educationyear">{{$experience->company_address}}</h6>
                                    <h6 class="educationyear">{{date('d M, Y', strtotime($experience->start_date))}}</h6>
                                    <h6 class="educationyear">{{$experience->currently_working ? date('d M, Y', strtotime($experience->end_date)) : "Currently Working"}}</h6>
                                    <h6>{{$experience->responsibility}}</h6>
                                </div>
                            @empty
                                <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                    <h4 class="educationyear">No Information Available</h4>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>