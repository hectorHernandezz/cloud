@extends('layouts.app')

@section('content')

    <div class="container">

      <section class="common-box">
      <div class="container">
        <div class="row main">
             <div class="content-header-2">                
                <h3 class="text-center">Profile</h3>
              </div>
            <div class="content-subheader-2 row">
                <div class=" userinfoheader">
                @if (Auth::user()->img_photo == NULL)
                                <img src="img_photo/unknown.png" alt="User Avatar" class="img-circle" />
                            @else
                                <img src="{{Auth::user()->img_photo}}" alt="User Avatar" class="img-circle" />
                            @endif 
                <h1>{{ Auth::user()->name }}</h1>
                </div>
            </div>
            <div class="content-subheader-2 row">
                <ul class="pagination pagination-lg">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                </ul>
            </div>
            <div class="main-content-2">
                    <ul class="chat">
                        <li class="left clearfix">
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">&nbsp;</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 14-04-2017 18:23:12</small>
                                </div>
                                <p>
                                      Lorem xercitation 
                                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </li>
                        
                    </ul>
            </div>
          </div>
      </div>
      </section>
    </div>
@endsection
