@extends('layouts.empty')

@section('content')
     <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image" style="background-image: url(/back-end/img/login/login-bg-11.jpg)"></div>
                <div class="news-caption">
                    <h4 class="caption-title"><b>Color</b> Admin App</h4>
                    <p>
                        Download the Color Admin app for iPhone®, iPad®, and Android™. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand">
                        <span class="logo"></span> <b>Bernas</b> LMS
                        <small>Changing life via English</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in"></i>
                    </div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->
                <div class="login-content">
                    <form method="POST" action="{{ route('login') }}" class="margin-bottom-0">
                        {{ csrf_field() }}
                        <div class="form-group m-b-15 has-error">
                            <input type="text"  class="form-control form-control-lg" name="username" value="{{ old('username') }}" placeholder="username" required />
                        </div>
                        <div class="form-group m-b-15">
                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required />
                        </div>
                        <div class="checkbox checkbox-css m-b-30">
							<input type="checkbox" id="remember_me_checkbox" name="remember_me" value="" />
							<label for="remember_me_checkbox">
								Remember Me
							</label>
						</div>
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            Not a member yet? Click <a href="{{ route("register") }}" class="text-success">here</a> to register.
                        </div>
                        <hr />
                        <p class="text-center text-grey-darker">
                            &copy; Bernas LMS All Right Reserved 2018
                        </p>
                    </form>
                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>
@endsection
