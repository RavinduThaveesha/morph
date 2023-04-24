@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-container">
            <h3 class="mb-3"><u>Add Drive</u></h3>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('drive.store') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group mb-3">
                    <label for="sub_title">Sub Title</label>
                    <input type="text" class="form-control" id="sub_title" name="sub_title" required>
                </div>
                <div class="form-group mb-3">
                    <label for="time">Time</label>
                    <input type="text" class="form-control" id="time" name="time" required>
                </div>
                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="8"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Drive</button>
            </form>
        </div>
    </div>
@endsection