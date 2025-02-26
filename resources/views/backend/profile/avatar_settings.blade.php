@extends('layouts.admin')
@push('styles')    
  <link href="{{asset('plugins/fancy-file-uploader/fancy_fileupload.css')}}" rel="stylesheet" />
@endpush
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Profile</div>
    <div class="ps-3">
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
             <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">Avatar Settings</li>
          </ol>
       </nav>
    </div>
 </div>
 <div class="row">
    <div class="col-xl-10 mx-auto">
        <div class="card-body">
            <div class="border p-3 rounded">
               <h6 class="mb-0 text-uppercase">New Avatar</h6>
               <hr>
               <form class="row g-3" method="POST" action="{{ route('avatar_update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label class="form-label">Avatar</label>
                        <input id="fancy-file-upload" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png">
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
@push('scripts')
    
<script src="{{asset('plugins/fancy-file-uploader/jquery.ui.widget.js')}}"></script>
<script src="{{asset('plugins/fancy-file-uploader/jquery.fileupload.js')}}"></script>
<script src="{{asset('plugins/fancy-file-uploader/jquery.fancy-fileupload.js')}}"></script>
<script src="{{asset('js/form-file-upload.js')}}"></script>
@endpush