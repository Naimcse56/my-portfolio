@extends('layouts.admin')
@section('title')
Experiences List
@endsection
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Personal Information</div>
    <div class="ps-3">
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
             <li class="breadcrumb-item"><a href="{{ route('experiences.index') }}"><i class="bx bx-home-alt"></i></a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">Experiences List</li>
          </ol>
       </nav>
    </div>
    <div class="ms-auto">
        <a href="{{ route('experiences.create') }}" class="btn btn-sm btn-primary">New Experience</a>
    </div>
 </div>
 <div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">  
                <div class="row">          
                    @forelse ($experiences as $experience)
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header">
                                    <h6>{{$experience->designation}}</h6>
                                </div>
                                <div class="card-body">
                                    <h6>Company :{{$experience->company_name}}</h6>
                                    <p class="mb-1">Address : {{$experience->company_address}}</p>
                                    <p class="mb-1">Joined Date : {{$experience->start_date}}</p>
                                    <p class="mb-1">Released Date : {{$experience->currently_working ? $experience->end_date : "Currently Working"}}</p>
                                    <p class="mb-1">Responsibility : {{$experience->responsibility}}</p>
                                </div>
                                <div class="card-footer text-end">
                                    <div class="btn-group">
                                        <a href="{{route('experiences.edit', $experience->id)}}" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <button type="button" onclick="deleteData('Academic Qualification', '{{ route('experiences.delete') }}', {{ $experience->id }})" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
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