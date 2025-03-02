@extends('layouts.admin')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Personal Information</div>
    <div class="ps-3">
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
             <li class="breadcrumb-item"><a href="{{ route('services.index') }}"><i class="bx bx-home-alt"></i></a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">Service List</li>
          </ol>
       </nav>
    </div>
    <div class="ms-auto">
        <a href="{{ route('services.create') }}" class="btn btn-sm btn-primary">New Service</a>
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
                                <th>Service</th>
                                <th>Details</th>
                                <th>Icon</th>
                                <th>Is Active</th>
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
					ajax: "{{ route('services.index') }}",
					columns: [
						{data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
						{data: 'name', name: 'name'},
						{data: 'short_details', name: 'short_details'},
						{data: 'icon', name: 'icon'},
						{data: 'is_active', name: 'is_active'},
						{data: 'action', name: 'action', orderable: false, searchable: false, printable:false},
					],
                    responsive: false,
                    lengthChange: true,
                } );
                $.fn.dataTable.ext.errMode = () => alert('Error while loading the table data. Please refresh');
            });

            $(document).on('change','.is_active', function(){
                if (this.checked) {
                    var is_active = 1;
                } else {
                    var is_active = 0;
                }
                $.post('{{ route('services.status_update') }}', {
                    _token: '{{ csrf_token() }}',
                    id: this.value,
                    is_active: is_active
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