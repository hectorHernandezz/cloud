@extends('layouts.app')

@section('content')

    <div class="container">


      <section class="login-info">
      <div class="container">
        <div class="row main">
             <div class="content-header">
                <h3 class="text-center">Change Password</h3>
              </div>
            <div class="main-content">

                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                  <input id="oldpassword" type="password" class="form-control" name="oldpassword" placeholder="Enter your Old Password">
                </div>

                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Enter your New Password">
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                  <input id="password2" type="password" class="form-control" name="password2" placeholder="Repeat your New Password">
                </div>
                <div class="form-group ">
                    <a href="#" type="button"  class="btn btn-primary btn-lg btn-block restricted-button">Sign in</a>
                </div>
            </div>
          </div>
      </div>
      </section>


    </div>

@endsection