@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-container">
            <h3 class="mb-3"><u>Edit Profile</u></h3>

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
            <form method="POST" action="{{ route('profile.update', $profile->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $profile->name }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="biography">Biography</label>
                    <textarea class="form-control" id="biography" name="biography" rows="8">{{ $profile->biography }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $profile->facebook }}">
                </div>
                <div class="form-group mb-3">
                    <label for="twitter">Twitter</label>
                    <input type="text" class="form-control" id="twitter" name="twitter" value="{{ $profile->twitter }}">
                </div>
                <div class="form-group mb-3">
                    <label for="linkedin">Linkedin</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ $profile->linkedin }}">
                </div>
                <div class="form-group mb-3">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $profile->instagram }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
        </div>
    </div>
@endsection