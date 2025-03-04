@extends('layouts.admin')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Personal Information</div>
    <div class="ps-3">
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
             <li class="breadcrumb-item"><a href="{{ route('subscribers.index') }}"><i class="bx bx-home-alt"></i></a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">Subscribers List</li>
          </ol>
       </nav>
    </div>
 </div>
 <div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th>Email</th>
                            <th width="15%">Joined</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
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
					ajax: "{{ route('subscribers.index') }}",
					columns: [
						{data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
						{data: 'email', name: 'email'},
						{data: 'created_at', name: 'created_at'},
					],
                    responsive: false,
                    lengthChange: true,
                } );
                $.fn.dataTable.ext.errMode = () => alert('Error while loading the table data. Please refresh');
            });
        })(jQuery);
    </script>
@endpush