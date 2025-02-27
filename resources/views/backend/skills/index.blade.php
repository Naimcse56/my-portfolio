@extends('layouts.admin')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Personal Information</div>
    <div class="ps-3">
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
             <li class="breadcrumb-item"><a href="{{ route('skills.index') }}"><i class="bx bx-home-alt"></i></a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">Skills List</li>
          </ol>
       </nav>
    </div>
    <div class="ms-auto">
        <a href="{{ route('skills.create') }}" class="btn btn-sm btn-primary">New Skill</a>
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
                                <th>Type</th>
                                <th>Skill</th>
                                <th>Percentage</th>
                                <th>Is Focusable</th>
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
					ajax: "{{ route('skills.index') }}",
					columns: [
						{data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
						{data: 'type', name: 'type'},
						{data: 'name', name: 'name'},
						{data: 'percentage', name: 'percentage'},
						{data: 'is_focusable', name: 'is_focusable'},
						{data: 'action', name: 'action', orderable: false, searchable: false, printable:false},
					],
                    responsive: false,
                    lengthChange: true,
                } );
                $.fn.dataTable.ext.errMode = () => alert('Error while loading the table data. Please refresh');
            });
        })(jQuery);
    </script>
@endpush