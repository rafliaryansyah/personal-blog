@extends('layouts.admin')

@section('title', 'Profile Info')
@section('content')
<div class="container-fluid">
    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header">
                <strong>Info Profile</strong>
            </div>
            <div class="card-body">
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="username" class="form-control" id="username" name="username" value="{{ old('name', $user->username) }}">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('name', $user->email) }}">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Update Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection