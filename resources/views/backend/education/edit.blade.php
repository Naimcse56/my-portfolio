@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Personal Information</div>
    <div class="ps-3">
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
             <li class="breadcrumb-item"><a href="{{ route('skills.index') }}"><i class="bx bx-home-alt"></i></a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">Edit Academic Qualification</li>
          </ol>
       </nav>
    </div>
 </div>
 <div class="row">
    <div class="col-xl-10 mx-auto">
        <div class="card-body">
            <div class="border p-3 rounded">
               <h6 class="mb-0 text-uppercase">Edit Academic Qualification</h6>
               <hr>
               <form class="row g-3" method="POST" action="{{ route('education.update', $education->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label class="form-label">Title</label>
                        <input class="form-control" type="text" id="title" name="title" value="{{$education->title}}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Department / Group</label>
                        <input class="form-control" type="text" id="department" name="department" value="{{$education->department}}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Institute Name</label>
                        <input class="form-control" type="text" id="institute_name" name="institute_name" value="{{$education->institute_name}}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Education Board / Division</label>
                        <input class="form-control" type="text" id="board" name="board" value="{{$education->board}}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Result</label>
                        <input class="form-control" type="text" id="result" name="result" value="{{$education->result}}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Passing Year</label>
                        <input class="form-control" type="number" min="0" step="1" id="passing_year" name="passing_year" value="{{$education->passing_year}}" required>
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