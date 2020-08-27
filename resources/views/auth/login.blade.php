@extends('layouts.guest')

@section('content')
    <div class="wrapper wrapper-full-page">
        <div class="page-header login-page header-filter" filter-color="black"
             style="background-image: url({{url('/images/login-background.jpg')}}); background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">

                        <form class="form" method="POST" action="{{ route('login_cred') }}" id="login-form">
                            @csrf

                            <div class="card card-login">
                                <div class="card-header card-header-rose text-center">
                                    <h4 class="card-title">Silko Funnels Login</h4>
                                </div>
                                <div class="card-body">
                                    <div class="flash-message">
                                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                            @if(Session::has('alert-' . $msg))
                                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                                            @endif
                                        @endforeach
                                    </div>


                                    <span class="bmd-form-group is-filled">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="material-icons">email</i>
                                        </span>
                                      </div>
                                         <input id="email" type="email" placeholder="Email..."
                                                class="form-control" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                      </span>
                                        <span class="bmd-form-group is-filled">
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="material-icons">lock_outline</i>
                                            </span>
                                          </div>
                                            <input id="password" type="password"
                                                   placeholder="Password..."
                                                   class="form-control" name="password"
                                                   required autocomplete="current-password">
                                        </div>
                                      </span>

                                </div>
                                <div class="card-footer justify-content-center">
                                    <button type="button" class="btn btn-warning btn-link btn-sm forgot-password">
                                        Forgot Password?
                                    </button>

                                    <button type="submit" name="login" value="1" class="btn btn-rose btn-link btn-lg">
                                        Lets Go
                                    </button>

                                </div>
                            </div>
                        </form>

                        <form class="form" method="post" action="https://www.clientfunnels.io/login"
                              id="forgot-password-form" style="display: none">
                            <div class="card card-login">
                                <div class="card-header card-header-rose text-center">
                                    <h4 class="card-title">Reset Your Password</h4>
                                </div>
                                <div class="card-body">
                                  <span class="bmd-form-group">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="material-icons">email</i>
                                        </span>
                                      </div>
                                      <input type="email" name="email" class="form-control" placeholder="Email..." required="">
                                    </div>
                                  </span>

                                </div>
                                <div class="card-footer justify-content-center">
                                    <button type="button" class="btn btn-danger btn-link btn-sm cancel-forgot-password">
                                        Cancel Reset
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            <button type="submit" name="reset_password" value="1"
                                                    class="btn btn-rose btn-link btn-lg">Reset Password
                                            </button>
                                        </a>
                                    @endif

                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="container">
                    <div class="copyright float-right">
                        © copyright: 2020 Silko Funnels
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
