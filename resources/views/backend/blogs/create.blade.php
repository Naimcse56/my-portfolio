@extends('layouts.admin')
@section('title')
Blog List
@endsection
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Blog Information</div>
    <div class="ps-3">
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
             <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}"><i class="bx bx-home-alt"></i></a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">New Blog</li>
          </ol>
       </nav>
    </div>
 </div>
 <div class="row">
    <div class="col-xl-10 mx-auto">
        <div class="card-body">
            <div class="border p-3 rounded">
               <h6 class="mb-0 text-uppercase">New Blog</h6>
               <hr>
               <form class="row g-3" method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label class="form-label">Title</label>
                        <input class="form-control" type="text" id="title" name="title" value="" required>
                    </div>
                    <div class="col-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured">
                            <label class="form-check-label" for="is_featured">Is Featured</label>
                         </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="is_publish" name="is_publish" checked>
                            <label class="form-check-label" for="is_publish">Make Publish</label>
                         </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Details</label>
                        <textarea id="summernote" name="details" class="form-control summernote"></textarea>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Thumnail Image</label>
                        <input class="form-control" id="formFile" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Meta Keywords</label>
                        <input class="form-control" type="text" id="meta_keywords" name="meta_keywords" value="">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Meta Description</label>
                        <textarea class="form-control" type="text" id="meta_description" name="meta_description"></textarea>
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
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 300,
                focus: true
            });
        });
    </script>
@endpush