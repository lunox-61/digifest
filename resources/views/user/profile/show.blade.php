@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="current_photo" class="form-label">{{ __('Current Profile Photo') }}</label>
            <div>
                <img src="{{ asset('storage/' . $user->photo) }}" alt="Profile Photo" class="img-thumbnail profile-photo" style="max-width: 450px; max-height: 750px;">
            </div>
        </div>
        
    </div>
    <div class="col-md-8">
        <div class="category-heading text-uppercase">
            <h4>Profil Akun</h4>
        </div>
        <hr>

        <div class="card-body">
            <form method="POST" action="{{ route('user.profile.update', $user->id) }}" enctype="multipart/form-data">
                @method('PATCH') <!-- Use @method('PATCH') instead of @method('POST') -->
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="old_password" class="form-label">{{ __('Old Password') }}</label>
                    <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" autocomplete="old-password">
                    @error('old_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('New Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">{{ __('Change Profile Photo') }}</label>
                    <input id="photo" type="file" class="form-control" name="photo" accept="image/*">
                </div>                

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">{{ __('Update Profile') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
