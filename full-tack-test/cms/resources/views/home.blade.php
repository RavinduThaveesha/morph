@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="card" style="box-shadow: 0 1px 1px #e4e7ed;">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <a href="{{ route('fundamental.index') }}">Fundamentals</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="card" style="box-shadow: 0 1px 1px #e4e7ed;">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <a href="{{ route('drive.index') }}">Drive Deeper</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
