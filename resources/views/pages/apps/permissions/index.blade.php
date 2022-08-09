@extends('layouts.app')

@section('title')
Permission Manajement Rapat
@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="flaticon2-supermarket text-primary"></i>
            </span>
            <h3 class="card-label">permissions</h3>
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-separate table-head-custom table-checkable" id="crudTable"
            style="margin-top: 13px !important">
            <thead>
                <tr>
                    <th>Name</th>
                </tr>
            </thead>
        </table>
        <!--end: Datatable-->
    </div>
</div>
@endsection
@push('addon-style')
<link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
@endpush

@push('addon-script')
<script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="/assets/js/pages/crud/datatables/basic/scrollable.js"></script>
<script>
    var datatable = $('#crudTable').dataTable({
            scrollY: '50vh',
            scrollX: true,
            scrollCollapse: true,
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'name', name: 'name'},
            ]
        })
</script>
@endpush