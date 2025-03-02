<section class="mh-skills" id="mh-skills">
    <div class="container">
        <div class="row section-separator">
            <div class="col-sm-12 col-md-6">
                <div class="mh-skills-inner">
                    <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <h3>Technical Skills</h3>
                        <div class="each-skills">
                            <div class="candidatos">
                                <div class="parcial">
                                    @forelse ($user->skills->where('type', 'Technical') as $skill)
                                        <div class="info">
                                            <div class="nome">{{$skill->name}}</div>
                                            <div class="percentagem-num">{{$skill->percentage > 0 ? $skill->percentage : 100}} %</div>
                                        </div>
                                        <div class="progressBar">
                                            <div class="percentagem" style="width: {{$skill->percentage > 0 ? $skill->percentage : 100}}%;"></div>
                                        </div>
                                    @empty
                                        
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                    <h3>Professional Skills</h3>
                    <ul class="mh-professional-progress" >
                        @foreach ($user->skills->where('type', 'Professional') as $skill)
                            <li>
                                <div class="mh-progress mh-progress-circle" data-progress="{{$skill->percentage > 0 ? $skill->percentage : 100}}"></div>
                                <div class="pr-skill-name">{{$skill->name}}</div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>