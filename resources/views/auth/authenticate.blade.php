@extends('Auth::layouts.auth')

@section('styles')

<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>

@endsection

<!-- Main Content -->
@section('content')
    <div class="container">
        <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}
            <h2 class="form-signin-heading">Please sign in</h2>
            @include('Auth::common.errors', ['form' => 'default'])
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
    </div>
@endsection
