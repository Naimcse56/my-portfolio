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
             <li class="breadcrumb-item"><a href="{{ route('experiences.index') }}"><i class="bx bx-home-alt"></i></a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">Edit Experience</li>
          </ol>
       </nav>
    </div>
 </div>
 <div class="row">
    <div class="col-xl-10 mx-auto">
        <div class="card-body">
            <div class="border p-3 rounded">
               <h6 class="mb-0 text-uppercase">Edit Experience</h6>
               <hr>
               <form class="row g-3" method="POST" action="{{ route('experiences.update', $experience->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label class="form-label">Company Name</label>
                        <input class="form-control" type="text" id="company_name" name="company_name" value="{{$experience->company_name}}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Company Address</label>
                        <input class="form-control" type="text" id="company_address" name="company_address" value="{{$experience->company_address}}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Designation</label>
                        <input class="form-control" type="text" id="designation" name="designation" value="{{$experience->designation}}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Currently Working</label>
                        <select class="form-control single-select" id="currently_working" name="currently_working">
                            <option value="0" @selected($experience->currently_working == 0)>No</option>
                            <option value="1" @selected($experience->currently_working == 1)>Yes</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Joined Date</label>
                        <input class="form-control" type="date" id="start_date" name="start_date" value="{{date('m/d/Y', strtotime($experience->start_date))}}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Release Date</label>
                        <input class="form-control" type="date" id="end_date" name="end_date" @if ($experience->currently_working == 0) value="{{date('m/d/Y', strtotime($experience->end_date))}}" @endif>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Responsibility</label>
                        <textarea class="form-control" type="text" id="responsibility" name="responsibility">{{$experience->responsibility}}</textarea>
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