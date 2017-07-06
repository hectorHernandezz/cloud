@extends('layouts.app')

@section('content')

<div class="container">


      <section class="common-box">
      <div class="container">
        <div class="row main">
             <div class="content-header-2">
                <h3 class="text-center">Users Search</h3>
              </div>
            <div class="content-subheader-2 row">
                <form action="#" method="GET">
                  <div class="col-xs-12 col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                      <input id="username" type="text" class="form-control" name="username" placeholder="Enter UserName Filter">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3">
                    <div class="form-group searchbtn-area-sm">
                        <input type="submit" class="btn btn-primary btn-lg btn-block restricted-button" name="btnSend" value="Search">
                    </div>
                  </div>
                </form>   
            </div>
            <div class="content-subheader-2 row">
                <ul class="pagination pagination-lg">
                  {{ $users->links() }}
                </ul>
            </div>
            <div class="main-content-2">
                    <ul class="chat">
                    @foreach ($users as $user)
                       <li class="left clearfix"><span class="chat-img pull-left">
                            @if ($user->img_photo == NULL)
                                <img src="img_photo/unknown.png" alt="User Avatar" class="img-circle" />
                            @else
                                <img src="{{$user->img_photo}}" alt="User Avatar" class="img-circle" />
                            @endif
                        </span>
        

                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">{{$user->name}}</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                    
                                        <button type="button" class="btn btn-md btn-success">
                                          <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    
                                </div>
                            </div>

                        </li>
                        @endforeach

             </ul>
            </div>
          </div>
      </div>
      </section>
    </div>

@endsection