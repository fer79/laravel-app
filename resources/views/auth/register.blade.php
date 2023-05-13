@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                          <div class="col-md-4 offset-md-4 text-xs-center">
                              
                              {!! NoCaptcha::display() !!}

                              @if ($errors->has('g-recaptcha-response'))
                                  <br>
                                  <span class="help-block" style="color:red">
                                      <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                  </span>
                              @endif
                          </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        {{--
                        <div class="row mb-3 text-center">
                          <div class="col-md-6 offset-md-4 text-xs-center">
                            <div class="btn-group btn-group-toggle mb-1 w-100">
                              <label class="btn btn-danger btn block">
                                <a href="{{route('login.google')}}" style="text-decoration:none;color:white;"><i class="fab fa-google"></i></a>
                              </label>
                              <label class="btn btn-danger btn-block">
                                <a href="{{route('login.google')}}" style="text-decoration:none;color:white;">Register with Google</a>
                              </label>
                            </div>

                            <div class="btn-group btn-group-toggle mb-1 w-100">
                              <label class="btn btn-primary btn block">
                                <a href="{{route('login.facebook')}}" style="text-decoration:none;color:white;"><i class="fab fa-facebook-f"></i></a>
                              </label>
                              <label class="btn btn-primary btn-block">
                                <a href="{{route('login.facebook')}}" style="text-decoration:none;color:white;">Register with Facebook</a>
                              </label>
                            </div>

                            <div class="btn-group btn-group-toggle mb-1 w-100">
                              <label class="btn btn-info btn block">
                                <a href="{{route('login.linkedin')}}" style="text-decoration:none;color:black;"><i class="fab fa-linkedin-in"></i></a>
                              </label>
                              <label class="btn btn-info btn-block">
                                <a href="{{route('login.linkedin')}}" style="text-decoration:none;color:black;">Register with Linkedin</a>
                              </label>
                            </div>
                          </div>
                        </div>
                        --}}
                    </form>
                    <script type="text/javascript">

                      {!! NoCaptcha::renderJs() !!}

                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
