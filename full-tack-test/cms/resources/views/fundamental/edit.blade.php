@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-container">
            <h3 class="mb-3"><u>Edit Fundamental</u></h3>

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
            <form method="POST" action="{{ route('fundamental.update', $fundamental->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $fundamental->name }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="8">{{ $fundamental->content }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Fundamental</button>
            </form>
        </div>
    </div>
@endsection