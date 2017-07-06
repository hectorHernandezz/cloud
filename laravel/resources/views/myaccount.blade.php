@extends('layouts.app')

@section('content')

    <div class="container">


      <section class="common-box">
      <div class="container">

        <div class="row main">
             <div class="content-header-2">
                <h3 class="text-center">My Personal Info</h3>
              </div>
            <div class="main-content-2 row">
                <div class=" userinfoheader">
                <img src="img_photo/522.jpg" alt="User Avatar" class="img-circle" />   
                <h1>{{ Auth::user()->name }}</h1>
                </div>
                <form action="#" method="POST" enctype="multipart/form-data">
                  <div class="col-xs-12 col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                      <input id="username" type="text" class="form-control" name="username" placeholder="Enter your UserName" value="{{ Auth::user()->username }}">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                      <input id="name" type="text" class="form-control" name="name" placeholder="Enter your Full Name" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span></span>
                      <input type="file" id="msgimg" class="form-control" name="msgimg" placeholder="Choose your Image File">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3">
                    <div class="form-group sendbtn-area">
                        <input type="submit" class="btn btn-success btn-lg btn-block restricted-button" name="btnSend" value="Save">
                    </div>
                  </div>
                </form>                   
            </div>
        </div>


        <div class="row main">
             <div class="content-header-2">
                <h3 class="text-center">Friendship Requests</h3>
              </div>
            <div class="content-subheader-2 row">
                <ul class="pagination pagination-lg">
                  <li class="active"><a href="#">1</a></li>
                </ul>
            </div>
            <div class="main-content-2">
                    <ul class="chat">
                       <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/408.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Antonieta FalsePatel</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                    <button type="button" class="btn btn-md btn-success">
                                      <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </li>                      

             </ul>
            </div>
          </div>


        <div class="row main">
             <div class="content-header-2">
                <h3 class="text-center">My Friends</h3>
              </div>
            <div class="content-subheader-2 row">
                <ul class="pagination pagination-lg">
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li class="active"><a href="#">4</a></li>
                </ul>
            </div>
            <div class="main-content-2">
            @foreach ($array as $friend)
                    <ul class="chat">
                       <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/408.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">{{ $friend->name }}</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                    <button type="button" class="btn btn-md btn-danger">
                                      <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                </div>
                            </div>
                        </li>
             </ul>
             @endforeach
            </div>
          </div>
      </div>
      </section>
    </div>

@endsection