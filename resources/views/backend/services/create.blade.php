@extends('layouts.admin')
@push('styles')
    <style>
        textarea.form-control {
            min-height: calc(1.5em + 11.75rem + 2px);
        }
    </style>
@endpush
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Personal Information</div>
    <div class="ps-3">
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
             <li class="breadcrumb-item"><a href="{{ route('services.index') }}"><i class="bx bx-home-alt"></i></a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">New Service</li>
          </ol>
       </nav>
    </div>
 </div>
 <div class="row">
    <div class="col-xl-10 mx-auto">
        <div class="card-body">
            <div class="border p-3 rounded">
               <h6 class="mb-0 text-uppercase">New Service</h6>
               <hr>
               <form class="row g-3" method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label class="form-label">Name</label>
                        <input class="form-control" type="text" id="name" name="name" value="" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Icon</label>
                        <input class="form-control" type="text" id="icon" name="icon" value="fa fa-bullseye purple-color" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Short Details</label>
                        <textarea class="form-control" type="text" id="short_details" name="short_details" required></textarea>
                    </div>
                    <div class="col-12">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>
@endsection