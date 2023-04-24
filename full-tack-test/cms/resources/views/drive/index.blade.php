@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Drives') }}
                    <div class="header-button">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm"><< Back</a>
                        <a href="{{ route('drive.create') }}" class="btn btn-primary btn-sm">Add New Item</a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th width="50">Id</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Time</th>
                                <th class="no-sort">Action</th>
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
@section('scripts')
<script type="text/javascript">
    $(function () {
        $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            bPaginate: true,
            bFilter: false,
            ajax: "{{ route('drive.datatable') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'title', name: 'title'},
                {data: 'sub_title', name: 'sub_title'},
                {data: 'time', name: 'time'},
                {data: 'action', name: 'action'},
            ],
            order: [[ 0, 'id' ]],
            columnDefs: [{
                targets: 'no-sort',
                orderable: false,
            }]
        });
    });
</script>
@endsection