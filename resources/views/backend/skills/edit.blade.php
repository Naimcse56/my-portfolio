@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Personal Information</div>
    <div class="ps-3">
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
             <li class="breadcrumb-item"><a href="{{ route('skills.index') }}"><i class="bx bx-home-alt"></i></a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">Edit Skill</li>
          </ol>
       </nav>
    </div>
 </div>
 <div class="row">
    <div class="col-xl-10 mx-auto">
        <div class="card-body">
            <div class="border p-3 rounded">
               <h6 class="mb-0 text-uppercase">Edit Skill</h6>
               <hr>
               <form class="row g-3" method="POST" action="{{ route('skills.update', $skill->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label class="form-label">Skill Type</label>
                        <select class="form-control single-select" id="type" name="type">
                            <option value="Technical" @selected($skill->type == "Technical")>Technical</option>
                            <option value="Professional" @selected($skill->type == "Professional")>Professional</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Your Name</label>
                        <input class="form-control" type="text" id="name" name="name" value="{{$skill->name}}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Percentage</label>
                        <input class="form-control" type="number" min="0" step="1" id="percentage" name="percentage" value="{{$skill->percentage}}" required>
                    </div>
                    <div class="col-12">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="is_focusable" name="is_focusable" @checked($skill->is_focusable == 1)>
                            <label class="form-check-label" for="is_focusable">Is Focusable</label>
                         </div>
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