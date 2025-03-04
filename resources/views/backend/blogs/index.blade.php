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
             <li class="breadcrumb-item active" aria-current="page">Blog List</li>
          </ol>
       </nav>
    </div>
    <div class="ms-auto">
        <a href="{{ route('blogs.create') }}" class="btn btn-sm btn-primary">New Blog</a>
    </div>
 </div>
 <div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">            
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th width="3%">#</th>
                                <th>Title</th>
                                <th>Post Date</th>
                                <th>Is Published</th>
                                <th>Is Featured</th>
                                <th width="7%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
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
            $(document).ready(function(){
                var table = $('#example').DataTable( {
					processing: true,
					serverSide: true,
					ajax: "{{ route('blogs.index') }}",
					columns: [
						{data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
						{data: 'title', name: 'title'},
						{data: 'post_date', name: 'post_date'},
						{data: 'is_publish', name: 'is_publish'},
						{data: 'is_featured', name: 'is_featured'},
						{data: 'action', name: 'action', orderable: false, searchable: false, printable:false},
					],
                    responsive: false,
                    lengthChange: true,
                } );
                $.fn.dataTable.ext.errMode = () => alert('Error while loading the table data. Please refresh');
            });

            $(document).on('change','.is_featured', function(){
                if (this.checked) {
                    var is_featured = 1;
                } else {
                    var is_featured = 0;
                }
                $.post('{{ route('services.status_update') }}', {
                    _token: '{{ csrf_token() }}',
                    id: this.value,
                    is_featured: is_featured
                }, function(data) {
                    if (data.success) {
                        toastr.success(data.success);
                    } else {
                        toastr.error(data.error);
                    }
                });
            })

            $(document).on('change','.is_publish', function(){
                if (this.checked) {
                    var is_publish = 1;
                } else {
                    var is_publish = 0;
                }
                $.post('{{ route('services.status_update') }}', {
                    _token: '{{ csrf_token() }}',
                    id: this.value,
                    is_publish: is_publish
                }, function(data) {
                    if (data.success) {
                        toastr.success(data.success);
                    } else {
                        toastr.error(data.error);
                    }
                });
            })
        })(jQuery);
    </script>
@endpush