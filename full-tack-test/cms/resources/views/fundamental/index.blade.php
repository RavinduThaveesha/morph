@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Fundamentals') }}
                    <div class="header-button">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm"><< Back</a>
                        <a href="{{ route('fundamental.create') }}" class="btn btn-primary btn-sm">Add New Item</a>
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
                                <th>Name</th>
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
            ajax: "{{ route('fundamental.datatable') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
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