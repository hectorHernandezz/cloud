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
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                </ul>
            </div>
            <div class="main-content-2">
                    <ul class="chat">
                       <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/408.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Anne Patel</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                    <button type="button" class="btn btn-md btn-success">
                                      <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </li>
                       <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/unknown.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Beatrice Picman</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                    <button type="button" class="btn btn-md btn-success">
                                      <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </li> 
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/unknown.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Bhaumik Patel</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                </div>                                
                            </div>
                        </li>                        
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/unknown.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Carlos Silva</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                    <button type="button" class="btn btn-md btn-success">
                                      <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </li> 
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/467.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Eva Thompson</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                </div>                                
                            </div>
                        </li> 
                       <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/495.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Filipa Oliveira</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                    <button type="button" class="btn btn-md btn-success">
                                      <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </li> 
                       <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/459.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Filipe Godinho</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                    <button type="button" class="btn btn-md btn-success">
                                      <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </li> 
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/506.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                </div>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/492.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Joanha Mirkckociv</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                </div>                                
                            </div>
                        </li>                        
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/474.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">John Gerginokish</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                    <button type="button" class="btn btn-md btn-success">
                                      <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </div>                                
                            </div>
                        </li>
                       <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/435.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Luis Armweak</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                    <button type="button" class="btn btn-md btn-success">
                                      <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </li> 
                       <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/501.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Martin Lovosvky</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                </div>
                            </div>
                        </li> 
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/443.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Mary Hirthus</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                    <button type="button" class="btn btn-md btn-success">
                                      <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </li>                          
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/unknown.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Mary Jane</strong>
                                </div>
                                 <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                    <button type="button" class="btn btn-md btn-success">
                                      <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </li>   
                       <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/428.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Mia Travistson</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                </div>                                
                            </div>
                        </li> 
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/522.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Mike Gulvishvokov</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                    <button type="button" class="btn btn-md btn-success">
                                      <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/unknown.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Mirtoil Jovik</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                    <button type="button" class="btn btn-md btn-success">
                                      <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </li>
                       <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/431.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Paula Rebocho</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                    <button type="button" class="btn btn-md btn-success">
                                      <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </li> 
                       <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/438.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Sara Matias</strong>
                                </div>
                                <div class="buttonRight">
                                    <a href="profile.html" type="button"  class="btn btn-md btn-info"><span class="glyphicon glyphicon-option-horizontal"></span></a>
                                </div>
                            </div>
                        </li> 
                       <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/443.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="userlist-body clearfix">
                                <div class="header headername">
                                    <strong class="primary-font">Sophie Dusterry</strong>
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
      </div>
      </section>
    </div>

@endsection