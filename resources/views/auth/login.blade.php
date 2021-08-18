@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Login</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

        <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                      <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                      </div>
            </div>

            <div class="form-group row">
                   <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                      <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      </div>
            </div>

            <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                </div>
            </div>
            </form>
        </div>
    </div>
@endsection