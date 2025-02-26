@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Profile</div>
    <div class="ps-3">
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
             <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">Password Settings</li>
          </ol>
       </nav>
    </div>
 </div>
 <div class="row">
    <div class="col-xl-10 mx-auto">
        <div class="card-body">
            <div class="border p-3 rounded">
               <h6 class="mb-0 text-uppercase">New Password</h6>
               <hr>
               <form class="row g-3" method="POST" action="{{ route('password_update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label class="form-label">Current Password</label>
                        <input class="form-control" type="text" id="current_password" name="current_password" value="{{old('current_password')}}">
                        <div class="invalid-feedback">Please provide a valid city.</div>
                    </div>
                    <div class="col-12">
                        <label class="form-label">New Password</label>
                        <input class="form-control" type="password" id="password" name="password" value="{{old('password')}}">
                        <div class="invalid-feedback">Please provide a valid city.</div>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Confirm Password</label>
                        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}">
                        <div class="invalid-feedback">Please provide a valid city.</div>
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