@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 text-center">
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

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
                                <a href="{{route('login.google')}}" style="text-decoration:none;color:white;">Login with Google</a>
                              </label>
                            </div>

                            <div class="btn-group btn-group-toggle mb-1 w-100">
                              <label class="btn btn-primary btn block">
                                <a href="{{route('login.facebook')}}" style="text-decoration:none;color:white;"><i class="fab fa-facebook-f"></i></a>
                              </label>
                              <label class="btn btn-primary btn-block">
                                <a href="{{route('login.facebook')}}" style="text-decoration:none;color:white;">Login with Facebook</a>
                              </label>
                            </div>

                            <div class="btn-group btn-group-toggle mb-1 w-100">
                              <label class="btn btn-info btn block">
                                <a href="{{route('login.linkedin')}}" style="text-decoration:none;color:black;"><i class="fab fa-linkedin-in"></i></a>
                              </label>
                              <label class="btn btn-info btn-block">
                                <a href="{{route('login.linkedin')}}" style="text-decoration:none;color:black;">Login with Linkedin</a>
                              </label>
                            </div>
                          </div>
                        </div>
                        --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

  {!! NoCaptcha::renderJs() !!}

</script>
@endsection
