@extends('layouts.admin')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Personal Information</div>
    <div class="ps-3">
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
             <li class="breadcrumb-item"><a href="{{ route('education.index') }}"><i class="bx bx-home-alt"></i></a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">Academic Qualification List</li>
          </ol>
       </nav>
    </div>
    <div class="ms-auto">
        <a href="{{ route('education.create') }}" class="btn btn-sm btn-primary">New Academic Qualification</a>
    </div>
 </div>
 <div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">  
                <div class="row">          
                    @forelse ($education_infos as $education)
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header">
                                    {{$education->title}}
                                </div>
                                <div class="card-body">
                                    <h6>Passing Year :{{$education->passing_year}}</h6>
                                    <h6>Institute Name : {{$education->institute_name}}</h6>
                                    <h6>Group / Department : {{$education->department}}</h6>
                                    <h6>Board : {{$education->board}}</h6>
                                    <h6>Result : {{$education->result}}</h6>
                                </div>
                                <div class="card-footer text-end">
                                    <div class="btn-group">
                                        <a href="{{route('education.edit', $education->id)}}" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <button type="button" onclick="deleteData('Academic Qualification', '{{ route('education.delete') }}', {{ $education->id }})" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header">
                                    No Information
                                </div>
                                <div class="card-body">
                                    Add Your Information...
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script>
        (function($) {
            "use strict";
            
        })(jQuery);
    </script>
@endpush