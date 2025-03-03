@extends('layouts.admin')

@section('content')
    <div class="row">
       <div class="col-12 col-lg-8 col-xl-8">
          <div class="card radius-10">
             <div class="card-body">
                <div class="row row-cols-1 row-cols-lg-2 g-3 align-items-center">
                   <div class="col">
                      <h5 class="mb-0">Daily Time Log Activity</h5>
                   </div>
                   <div class="col">
                      <div class="d-flex align-items-center justify-content-sm-end gap-3 cursor-pointer">
                         <div class="font-13"><i class="bi bi-circle-fill text-primary"></i><span class="ms-2">Today</span></div>
                         <div class="font-13"><i class="bi bi-circle-fill text-success"></i><span class="ms-2">Yestreday</span></div>
                      </div>
                   </div>
                </div>
                <div id="chart1"></div>
             </div>
          </div>
       </div>
       <div class="col-12 col-lg-4 col-xl-4">
          <div class="card radius-10">
             <div class="card-body">
                <div class="row g-3 align-items-center">
                   <div class="col">
                      <h5 class="mb-0">Weekly Invoices</h5>
                   </div>
                </div>
                <div id="chart2"></div>
             </div>
          </div>
       </div>
    </div>
    <!--end row-->
    <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-3 row-cols-xxl-6">
       <div class="col">
          <div class="card radius-10">
             <div class="card-body text-center">
                <div class="widget-icon mx-auto mb-3 bg-light-primary text-primary">
                   <i class="bi bi-chat-left-fill"></i>
                </div>
                <p class="mb-0">Task Completed</p>
                <h3 class="mt-4 mb-0">27</h3>
                <small class="text-danger">-12%</small>
             </div>
          </div>
       </div>
       <div class="col">
          <div class="card radius-10">
             <div class="card-body text-center">
                <div class="widget-icon mx-auto mb-3 bg-light-danger text-danger">
                   <i class="bi bi-hdd-fill"></i>
                </div>
                <p class="mb-0">New Task</p>
                <h3 class="mt-4 mb-0">45</h3>
                <small class="text-success">+8%</small>
             </div>
          </div>
       </div>
       <div class="col">
          <div class="card radius-10">
             <div class="card-body text-center">
                <div class="widget-icon mx-auto mb-3 bg-light-success text-success">
                   <i class="bi bi-people-fill"></i>
                </div>
                <p class="mb-0">New Members</p>
                <h3 class="mt-4 mb-0">38</h3>
                <small class="text-danger">-6.2%</small>
             </div>
          </div>
       </div>
       <div class="col">
          <div class="card radius-10">
             <div class="card-body text-center">
                <div class="widget-icon mx-auto mb-3 bg-light-info text-info">
                   <i class="bi bi-archive-fill"></i>
                </div>
                <p class="mb-0">Project Completed</p>
                <h3 class="mt-4 mb-0">61</h3>
                <small class="text-success">+9%</small>
             </div>
          </div>
       </div>
       <div class="col">
          <div class="card radius-10">
             <div class="card-body text-center">
                <div class="widget-icon mx-auto mb-3 bg-light-purple text-purple">
                   <i class="bi bi-flag-fill"></i>
                </div>
                <p class="mb-0">Total Files</p>
                <h3 class="mt-4 mb-0">29</h3>
                <small class="text-success">+6%</small>
             </div>
          </div>
       </div>
       <div class="col">
          <div class="card radius-10">
             <div class="card-body text-center">
                <div class="widget-icon mx-auto mb-3 bg-light-orange text-orange">
                   <i class="bi bi-pie-chart-fill"></i>
                </div>
                <p class="mb-0">Objectives</p>
                <h3 class="mt-4 mb-0">32</h3>
                <small class="text-success">+12%</small>
             </div>
          </div>
       </div>
    </div>
    <div class="row">
       <div class="col-12 col-lg-7 col-xl-7">
          <div class="card radius-10">
             <div class="card-body">
                <div class="row row-cols-1 row-cols-lg-2 g-3 align-items-center">
                   <div class="col">
                      <h5 class="mb-0">My Projects</h5>
                   </div>
                   <div class="col">
                      <div class="d-flex align-items-center justify-content-sm-end gap-3 cursor-pointer">
                         <form>
                            <input type="date" class="form-control">
                         </form>
                      </div>
                   </div>
                </div>
                <form class="mt-3">
                   <div class="position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                      <input class="form-control ps-5" type="text" placeholder="search projects">
                   </div>
                </form>
                <div class="row mt-2 g-3">
                   <div class="col-12 col-lg-6">
                      <div class="card radius-10 shadow-none border mb-0">
                         <div class="card-body">
                            <div class="d-flex align-items-center">
                               <div class="project-date">
                                  <p class="mb-0 font-13">July 2, 2020</p>
                               </div>
                               <div class="dropdown ms-auto">
                                  <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                  </a>
                                  <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="javascript:;">Action</a>
                                     </li>
                                     <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                     </li>
                                     <li>
                                        <hr class="dropdown-divider">
                                     </li>
                                     <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                            <div class="text-center my-3">
                               <h6 class="mb-0">Web Designing</h6>
                               <p class="mb-0">Prototyping</p>
                            </div>
                            <div class="my-2">
                               <p class="mb-1 font-13">Progress</p>
                               <div class="progress radius-10" style="height:5px;">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
                               </div>
                               <p class="mb-0 mt-1 font-13 text-end">85%</p>
                            </div>
                            <div class="d-flex align-items-center">
                               <div class="project-user-groups">
                                  <img src="{{asset('images/avatars/avatar-1.png')}}" width="35" height="35" class="rounded-circle" alt="">
                                  <img src="{{asset('images/avatars/avatar-2.png')}}" width="35" height="35" class="rounded-circle" alt="">
                               </div>
                               <div class="project-user-plus">+</div>
                               <div class="py-1 px-3 radius-30 bg-light-primary text-primary ms-auto">2 Days Left</div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-12 col-lg-6">
                      <div class="card radius-10 shadow-none border mb-0">
                         <div class="card-body">
                            <div class="d-flex align-items-center">
                               <div class="project-date">
                                  <p class="mb-0 font-13">July 5, 2020</p>
                               </div>
                               <div class="dropdown ms-auto">
                                  <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                  </a>
                                  <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="javascript:;">Action</a>
                                     </li>
                                     <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                     </li>
                                     <li>
                                        <hr class="dropdown-divider">
                                     </li>
                                     <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                            <div class="text-center my-3">
                               <h6 class="mb-0">Mobile App</h6>
                               <p class="mb-0">Shopping</p>
                            </div>
                            <div class="my-2">
                               <p class="mb-1 font-13">Progress</p>
                               <div class="progress radius-10" style="height:5px;">
                                  <div class="progress-bar bg-orange" role="progressbar" style="width: 55%"></div>
                               </div>
                               <p class="mb-0 mt-1 font-13 text-end">30%</p>
                            </div>
                            <div class="d-flex align-items-center">
                               <div class="project-user-groups">
                                  <img src="{{asset('images/avatars/avatar-1.png')}}" width="35" height="35" class="rounded-circle" alt="">
                                  <img src="{{asset('images/avatars/avatar-2.png')}}" width="35" height="35" class="rounded-circle" alt="">
                               </div>
                               <div class="project-user-plus">+</div>
                               <div class="py-1 px-3 radius-30 bg-light-orange text-orange ms-auto">2 Days Left</div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-12 col-lg-6">
                      <div class="card radius-10 shadow-none border mb-0">
                         <div class="card-body">
                            <div class="d-flex align-items-center">
                               <div class="project-date">
                                  <p class="mb-0 font-13">July 10, 2020</p>
                               </div>
                               <div class="dropdown ms-auto">
                                  <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                  </a>
                                  <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="javascript:;">Action</a>
                                     </li>
                                     <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                     </li>
                                     <li>
                                        <hr class="dropdown-divider">
                                     </li>
                                     <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                            <div class="text-center my-3">
                               <h6 class="mb-0">Dashboard</h6>
                               <p class="mb-0">Medical</p>
                            </div>
                            <div class="my-2">
                               <p class="mb-1 font-13">Progress</p>
                               <div class="progress radius-10" style="height:5px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 45%"></div>
                               </div>
                               <p class="mb-0 mt-1 font-13 text-end">45%</p>
                            </div>
                            <div class="d-flex align-items-center">
                               <div class="project-user-groups">
                                  <img src="{{asset('images/avatars/avatar-1.png')}}" width="35" height="35" class="rounded-circle" alt="">
                                  <img src="{{asset('images/avatars/avatar-2.png')}}" width="35" height="35" class="rounded-circle" alt="">
                               </div>
                               <div class="project-user-plus">+</div>
                               <div class="py-1 px-3 radius-30 bg-light-success text-success ms-auto">2 Weeks Left</div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-12 col-lg-6">
                      <div class="card radius-10 shadow-none border mb-0">
                         <div class="card-body">
                            <div class="d-flex align-items-center">
                               <div class="project-date">
                                  <p class="mb-0 font-13">July 10, 2020</p>
                               </div>
                               <div class="dropdown ms-auto">
                                  <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                  </a>
                                  <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="javascript:;">Action</a>
                                     </li>
                                     <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                     </li>
                                     <li>
                                        <hr class="dropdown-divider">
                                     </li>
                                     <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                            <div class="text-center my-3">
                               <h6 class="mb-0">Web Designing</h6>
                               <p class="mb-0">Wireframing</p>
                            </div>
                            <div class="my-2">
                               <p class="mb-1 font-13">Progress</p>
                               <div class="progress radius-10" style="height:5px;">
                                  <div class="progress-bar bg-purple" role="progressbar" style="width: 65%"></div>
                               </div>
                               <p class="mb-0 mt-1 font-13 text-end">65%</p>
                            </div>
                            <div class="d-flex align-items-center">
                               <div class="project-user-groups">
                                  <img src="{{asset('images/avatars/avatar-1.png')}}" width="35" height="35" class="rounded-circle" alt="">
                                  <img src="{{asset('images/avatars/avatar-2.png')}}" width="35" height="35" class="rounded-circle" alt="">
                               </div>
                               <div class="project-user-plus">+</div>
                               <div class="py-1 px-3 radius-30 bg-light-purple text-purple ms-auto">1 Week Left</div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <!--end row-->
             </div>
          </div>
       </div>
       <div class="col-12 col-lg-5 col-xl-5">
          <div class="card radius-10">
             <div class="card-body">
                <div class="row g-3 align-items-center">
                   <div class="col-9">
                      <h5 class="mb-0">Client Messages</h5>
                   </div>
                   <div class="col-3">
                      <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                         <div class="dropdown">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                            </a>
                            <ul class="dropdown-menu">
                               <li><a class="dropdown-item" href="javascript:;">Action</a>
                               </li>
                               <li><a class="dropdown-item" href="javascript:;">Another action</a>
                               </li>
                               <li>
                                  <hr class="dropdown-divider">
                               </li>
                               <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="client-message">
                <div class="d-flex align-items-center gap-3 client-messages-list border-bottom border-top p-3">
                   <img src="{{asset('images/avatars/avatar-1.png')}}" class="rounded-circle" width="50" height="50" alt="">
                   <div>
                      <h6 class="mb-0">Thomas Hardy <span class="text-secondary mb-0 float-end font-13">21 July</span></h6>
                      <p class="mb-0 font-13">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                   </div>
                </div>
                <div class="d-flex align-items-center gap-3 client-messages-list border-bottom p-3">
                   <img src="{{asset('images/avatars/avatar-2.png')}}" class="rounded-circle" width="50" height="50" alt="">
                   <div>
                      <h6 class="mb-0">Thomas Hardy <span class="text-secondary mb-0 float-end font-13">21 July</span></h6>
                      <p class="mb-0 font-13">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                   </div>
                </div>
                <div class="d-flex align-items-center gap-3 client-messages-list border-bottom p-3">
                   <img src="{{asset('images/avatars/avatar-3.png')}}" class="rounded-circle" width="50" height="50" alt="">
                   <div>
                      <h6 class="mb-0">Thomas Hardy <span class="text-secondary mb-0 float-end font-13">21 July</span></h6>
                      <p class="mb-0 font-13">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                   </div>
                </div>
                <div class="d-flex align-items-center gap-3 client-messages-list border-bottom p-3">
                   <img src="{{asset('images/avatars/avatar-4.png')}}" class="rounded-circle" width="50" height="50" alt="">
                   <div>
                      <h6 class="mb-0">Thomas Hardy <span class="text-secondary mb-0 float-end font-13">21 July</span></h6>
                      <p class="mb-0 font-13">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                   </div>
                </div>
                <div class="d-flex align-items-center gap-3 client-messages-list border-bottom p-3">
                   <img src="{{asset('images/avatars/avatar-5.png')}}" class="rounded-circle" width="50" height="50" alt="">
                   <div>
                      <h6 class="mb-0">Thomas Hardy <span class="text-secondary mb-0 float-end font-13">21 July</span></h6>
                      <p class="mb-0 font-13">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                   </div>
                </div>
                <div class="d-flex align-items-center gap-3 client-messages-list border-bottom p-3">
                   <img src="{{asset('images/avatars/avatar-6.png')}}" class="rounded-circle" width="50" height="50" alt="">
                   <div>
                      <h6 class="mb-0">Thomas Hardy <span class="text-secondary mb-0 float-end font-13">21 July</span></h6>
                      <p class="mb-0 font-13">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                   </div>
                </div>
                <div class="d-flex align-items-center gap-3 client-messages-list border-bottom p-3">
                   <img src="{{asset('images/avatars/avatar-7.png')}}" class="rounded-circle" width="50" height="50" alt="">
                   <div>
                      <h6 class="mb-0">Thomas Hardy <span class="text-secondary mb-0 float-end font-13">21 July</span></h6>
                      <p class="mb-0 font-13">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                   </div>
                </div>
                <div class="d-flex align-items-center gap-3 client-messages-list border-bottom p-3">
                   <img src="{{asset('images/avatars/avatar-7.png')}}" class="rounded-circle" width="50" height="50" alt="">
                   <div>
                      <h6 class="mb-0">Thomas Hardy <span class="text-secondary mb-0 float-end font-13">21 July</span></h6>
                      <p class="mb-0 font-13">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                   </div>
                </div>
                <div class="d-flex align-items-center gap-3 client-messages-list border-bottom p-3">
                   <img src="{{asset('images/avatars/avatar-7.png')}}" class="rounded-circle" width="50" height="50" alt="">
                   <div>
                      <h6 class="mb-0">Thomas Hardy <span class="text-secondary mb-0 float-end font-13">21 July</span></h6>
                      <p class="mb-0 font-13">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                   </div>
                </div>
                <div class="d-flex align-items-center gap-3 client-messages-list border-bottom p-3">
                   <img src="{{asset('images/avatars/avatar-7.png')}}" class="rounded-circle" width="50" height="50" alt="">
                   <div>
                      <h6 class="mb-0">Thomas Hardy <span class="text-secondary mb-0 float-end font-13">21 July</span></h6>
                      <p class="mb-0 font-13">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!--end row-->
@endsection
@push('scripts')    
<script src="{{asset('js/index4.js')}}"></script>
@endpush
