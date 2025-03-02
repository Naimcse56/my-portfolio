<aside class="sidebar-wrapper">
    <div class="iconmenu">
       <div class="nav-toggle-box">
          <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
       </div>
       <ul class="nav nav-pills flex-column">
          <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
             <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
          </li>
          <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Personal Information">
             <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-application" type="button"><i class="bi bi-grid-fill"></i></button>
          </li>
       </ul>
    </div>
    <div class="textmenu">
       <div class="brand-logo">
          <img src="{{asset('images/brand-logo-2.png')}}" width="140" alt=""/>
       </div>
       <div class="tab-content">
          <div class="tab-pane fade" id="pills-dashboards">
             <div class="list-group list-group-flush">
                <div class="list-group-item">
                   <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-0">Dashboards</h5>
                   </div>
                </div>
                <a href="{{route('home')}}" class="list-group-item"><i class="bi bi-archive"></i>Dashboard</a>
             </div>
          </div>
          <div class="tab-pane fade" id="pills-application">
             <div class="list-group list-group-flush">
                <div class="list-group-item">
                   <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-0">Personal</h5>
                   </div>
                </div>
                <a href="{{route('avatar_settings')}}" class="list-group-item"><i class="bi bi-person-square"></i>Update Avatar</a>
                <a href="{{route('contact_settings')}}" class="list-group-item"><i class="bi bi-person-square"></i>Contact Info</a>
                <a href="{{route('cv_settings')}}" class="list-group-item"><i class="bi bi-person-square"></i>CV</a>
                <a href="{{route('about_settings')}}" class="list-group-item"><i class="bi bi-person-square"></i>About</a>
                <a href="{{route('skills.index')}}" class="list-group-item"><i class="bi bi-person-square"></i>Skills</a>
                <a href="{{route('services.index')}}" class="list-group-item @if (Route::is('services.*')) active @endif"><i class="bi bi-person-square"></i>Services</a>
                <a href="{{route('education.index')}}" class="list-group-item @if (Route::is('education.*')) active @endif"><i class="bi bi-person-square"></i>Academic Qua.</a>
                <a href="{{route('experiences.index')}}" class="list-group-item @if (Route::is('experiences.*')) active @endif"><i class="bi bi-person-square"></i>Experiences</a>
             </div>
          </div>
       </div>
    </div>
 </aside>