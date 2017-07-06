@extends('layouts.app')

@section('content')
 <div class="container">


      <section class="common-box">
      <div class="container">
        <div class="row main">
             <div class="content-header-2">
                <h3 class="text-center">Message Search</h3>
              </div>
            <div class="content-subheader-2 row">
                <form action="#" method="GET">
                  <div class="col-xs-12 col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                      <input id="username" type="text" class="form-control" name="username" placeholder="Enter UserName Filter">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-text-size" aria-hidden="true"></span></span>
                      <input id="msgtext" type="text" class="form-control" name="msgtext" placeholder="Enter Message Text Filter">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3">
                    <div class="form-group searchbtn-area">
                        <input type="submit" class="btn btn-primary btn-lg btn-block restricted-button" name="btnSend" value="Search">
                    </div>
                  </div>
                </form>   
            </div>
            <div class="content-subheader-2 row">
                <ul class="pagination pagination-lg">
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li class="active"><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                </ul>
            </div>
            <div class="main-content-2">
                    <ul class="chat">
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/522.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Mike Gulvishvokov</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 14-04-2017 18:23:12</small>
                                </div>
                                <p>
                                      Lorem xercitation 
                                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/474.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">John Gerginokish</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 14-04-2017 12:10:02</small>
                                </div>
                                <p>
                                      LoremLorem ips is aute irure dolor in reprehenderit in voluptate velit esse
                                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                           <img src="img_photo/unknown.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Mirtoil Jovik</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 14-04-2017 08:23:11</small>
                                </div>
                                <p> 
                                    lorepLorem dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                </p>
                            </div>
                            <div class="chat-msgimg">
                              <a href="original_image.html"><img src="img_msg/r-msg32467.jpg" alt="Image associated to message number 32467"></a>
                            </div>
                        </li>                        
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/522.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Mike Gulvishvokov</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 13-04-2017 23:45:45</small>
                                </div>
                                <p>
                                      He Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incidi
                                </p>
                            </div>
                        </li>                    
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/506.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 13-04-2017 21:12:03</small>
                                </div>
                                <p>
                                    Lorem ipsum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/408.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Anne Patel</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 13-04-2017 19:23:21</small>
                                </div>
                                <p>
                                    Lorem  deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </li>

                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/506.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 13-04-2017 19:22:43</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/408.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Anne Patel</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 13-04-2017 19:22:34</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="chat-msgimg">
                              <a href="original_image.html"><img src="img_msg/r-msg32902.jpg" alt="Image associated to message number 32902"></a>
                            </div>                            
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                           <img src="img_photo/unknown.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Bhaumik Patel</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 13-04-2017 08:12:49</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/408.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Anne Patel</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 12-04-2017 21:43:34</small>
                                </div>
                                <p>
                                    Bla Bla Bla... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/492.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Joanha Mirkckociv</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 12-04-2017 21:09:34</small>
                                </div>
                                <p>
                                    LorLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="chat-msgimg">
                              <a href="original_image.html"><img src="img_msg/r-msg31565.jpg" alt="Image associated to message number 31565"></a>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/443.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Mary Hirthus</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 12-04-2017 21:21:01</small>
                                </div>
                                <p>
                                      Lorem i anim id est laborum.
                                </p>
                            </div>
                            <div class="chat-msgimg">
                              <a href="original_image.html"><img src="img_msg/r-msg32467.jpg" alt="Image associated to message number 32467"></a>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/467.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Eva Thompson</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 12-04-2017 20:53:12</small>
                                </div>
                                <p>
                                      Lorem xercitation ullamco laboris nisi ut aliquip ex ea commodo
                                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/443.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Mary Hirthus</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 12-04-2017 16:12:04</small>
                                </div>
                                <p>

                                </p>
                            </div>
                            <div class="chat-msgimg">
                              <a href="original_image.html"><img src="img_msg/msg32467.jpg" alt="Image associated to message number 32467"></a>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/474.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">John Gerginokish</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 12-04-2017 16:11:54</small>
                                </div>
                                <p>
                                      LoremLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                      cillum 
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                           <img src="img_photo/unknown.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Mirtoil Jovik</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 12-04-2017 16:09:43</small>
                                </div>
                                <p> 
                                    lorepLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                </p>
                            </div>
                        </li>                        
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/522.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Mike Gulvishvokov</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 12-04-2017 15:59:53</small>
                                </div>
                                <p>
                                      Lorem xercitation ullamco laboris nisi ut aliquip ex ea commodo
                                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/474.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">John Gerginokish</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 12-04-2017 13:53:24</small>
                                </div>
                                <p>
                                      LoremLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                      cillum 
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                           <img src="img_photo/unknown.png" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Mirtoil Jovik</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 12-04-2017 12:53:11</small>
                                </div>
                                <p> 
                                    lorepLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                </p>
                            </div>
                        </li>                        
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="img_photo/522.jpg" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Mike Gulvishvokov</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span> 12-04-2017 09:27:39</small>
                                </div>
                                <p>
                                      He Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incidi
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