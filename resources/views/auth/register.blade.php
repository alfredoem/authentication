@extends('Auth::layouts.auth')

<!-- Scripts -->
@section('scripts')

@endsection

<!-- Main Content -->
@section('content')
	<div class="container-fluid">

		<!-- Basic Information -->
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
                	<div class="panel-heading">Register</div>
                	<div class="panel-body">

                		<form method="POST" action="{{url('/register')}}">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                First Name
                                <input class="form-control" type="text" name="firstName" value="{{ old('firstName') }}">
                            </div>

                            <div class="form-group">
                                Last Name
                                <input class="form-control" type="text" name="lastName" value="{{ old('lastName') }}">
                            </div>

                            <div class="form-group">
                                Email
                                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                Password
                                <input class="form-control" type="password" name="password">
                            </div>

                            <div class="form-group">
                                Confirm Password
                                <input class="form-control" type="password" name="password_confirmation">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Register</button>
                            </div>
                        </form>
                	</div>
                </div>

			</div>
		</div>

	</div>
@endsection
