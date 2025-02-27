@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Profile</div>
    <div class="ps-3">
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
             <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">Contact Settings</li>
          </ol>
       </nav>
    </div>
 </div>
 <div class="row">
    <div class="col-xl-10 mx-auto">
        <div class="card-body">
            <div class="border p-3 rounded">
               <h6 class="mb-0 text-uppercase">Contact Information</h6>
               <hr>
               <form class="row g-3" method="POST" action="{{ route('contact_update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label class="form-label">Your Name</label>
                        <input class="form-control" type="text" id="name" name="name" value="{{$user->name}}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Phone</label>
                        <input class="form-control" type="text" id="phone" name="phone" value="{{$user->phone}}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Whatsapp Phone</label>
                        <input class="form-control" type="text" id="whatsapp_phone" name="whatsapp_phone" value="{{$user->whatsapp_phone}}">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Facebook Link</label>
                        <input class="form-control" type="text" id="facebook" name="facebook" value="{{$user->facebook}}">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Github Link</label>
                        <input class="form-control" type="text" id="github" name="github" value="{{$user->github}}">
                    </div>
                    <div class="col-12">
                        <label class="form-label">LinkdIn Link</label>
                        <input class="form-control" type="text" id="linkd_in" name="linkd_in" value="{{$user->linkd_in}}">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Addess</label>
                        <input class="form-control" type="text" id="address" name="address" value="{{$user->address}}" required>
                    </div>
                    <div class="col-12">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>
@endsection