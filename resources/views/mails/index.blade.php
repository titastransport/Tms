@extends('home')

@section('title')

    <h3 class="well text-center"></h3>

@endsection


@section('content')

	<div class="wrapper">
	    <div class="mail-box">
	        <aside class="mail-nav mail-nav-bg-color">
	            <header class="header"> <h4>Mailbox</h4> </header>
	            <div class="mail-nav-body">
	                <div class="text-center">
	                    <a class="btn btn-compose" href="mail_compose.html">
	                        Compose Mail
	                    </a>
	                </div>
	                <ul class="nav nav-pills nav-stacked mail-navigation">
	                    <li class="active"><a href="mail.html"> <i class="fa fa-inbox"></i> Inbox  <span class="label label-danger pull-right inbox-notification">4</span></a></li>
	                    <li><a href="#"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
	                    <li><a href="#"> <i class="fa fa-certificate"></i> Important</a></li>
	                    <li><a href="#"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification">34</span></a></li>
	                    <li><a href="#"> <i class="fa fa-trash-o"></i> Trash</a></li>
	                </ul>

	                <ul class="nav nav-pills nav-stacked labels-info ">
	                    <li> <h5>Buddy online</h5> </li>
	                    <li> <a href="#"> <i class="fa fa-comments text-success"></i> Jonathan Smith <p>I do not think</p></a>  </li>
	                    <li> <a href="#"> <i class="fa fa-comments text-danger"></i> iRon <p>Busy with coding</p></a> </li>
	                    <li> <a href="#"> <i class="fa fa-comments text-muted "></i> Anjelina Joli <p>I out of control</p></a></li>
	                    <li> <a href="#"> <i class="fa fa-comments text-muted "></i> Tis man <p>I do not think</p></a>  </li>
	                </ul>
	            </div>
	            <footer class="text-center">
	                <div class="btn-group">
	                    <a href="javascript:;" class="btn mini btn-default">
	                        <i class="fa fa-power-off"></i>
	                    </a>
	                </div>
	                <div class="btn-group">
	                    <a href="javascript:;" class="btn mini btn-default">
	                        <i class="fa fa-cog"></i>
	                    </a>
	                </div>
	            </footer>
	        </aside>
	        <section class="mail-box-info">
	            <header class="header">
	                <div class="btn-group pull-right">
	                    <button class="btn btn-sm btn-primary" type="button">
	                        <i class="fa fa-chevron-left"></i>
	                    </button>
	                    <button class="btn btn-sm btn-primary" type="button">
	                        <i class="fa fa-chevron-right"></i>
	                    </button>
	                </div>
	                <div class="btn-toolbar">
	                    <div class="btn-group">
	                        <button class="btn btn-sm btn-primary"><i class="fa fa-refresh"></i></button>
	                    </div>
	                    <div class="btn-group select">
	                        <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle">
	                            <span style="width: 70px;" class="dropdown-label">Filter</span>
	                            <span class="caret"></span>
	                        </button>
	                        <ul class="dropdown-menu text-left text-sm">
	                            <li><a href="#">Read</a></li>
	                            <li><a href="#">Unread</a></li>
	                            <li><a href="#">Starred</a></li>
	                            <li><a href="#">Unstarred</a></li>
	                        </ul>
	                    </div>

	                </div>

	            </header>

	            <section class="mail-list">
	                <ul class="list-group ">
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/avatar-mini.jpg"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">15 April</small> <strong>John Doe</strong>  <span>Donec ultrices faucibus rutrum. Phasellus sodales </span> <span class="label label-sm btn-success">normal</span> </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/photos/user1.png"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">10 May</small> <strong>Jane Doe</strong> <span>Phasellus sodales vulputate urna, vel accumsan augue egestas ac  </span> <span class="label label-sm btn-danger">urgent</span> </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/photos/user2.png"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">3 June</small> <strong>Jonathan Smith</strong>  <span>Porttitor eu consequat risus. </span> <span class="label label-sm btn-warning">error</span> </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/photos/user3.png"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">15 April</small> <strong>John Doe</strong>  <span>Donec ultrices faucibus rutrum. Phasellus sodales </span>  </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/photos/user4.png"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">10 May</small> <strong>Jane Doe</strong> <span>Phasellus sodales vulputate urna, vel accumsan augue egestas ac  </span> </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/photos/user1.png"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">3 June</small> <strong>Jonathan Smith</strong>  <span>Porttitor eu consequat risus. </span> <span class="label label-sm btn-warning">error</span> </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/photos/user5.png"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">15 April</small> <strong>John Doe</strong>  <span>Donec ultrices faucibus rutrum. Phasellus sodales </span>  </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/photos/user1.png"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">10 May</small> <strong>Jane Doe</strong> <span>Phasellus sodales vulputate urna, vel accumsan augue egestas ac   </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/avatar-mini.jpg"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">3 June</small> <strong>Jonathan Smith</strong>  <span>Porttitor eu consequat risus.  </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/photos/user3.png"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">15 April</small> <strong>John Doe</strong>  <span>Donec ultrices faucibus rutrum. Phasellus sodales </span> <span class="label label-sm btn-success">normal</span> </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/photos/user4.png"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">10 May</small> <strong>Jane Doe</strong> <span>Phasellus sodales vulputate urna, vel accumsan augue egestas ac  </span> <span class="label label-sm btn-danger">urgent</span> </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/photos/user2.png"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">3 June</small> <strong>Jonathan Smith</strong>  <span>Porttitor eu consequat risus. </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/avatar-mini.jpg"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">15 April</small> <strong>John Doe</strong>  <span>Donec ultrices faucibus rutrum. Phasellus sodales </span>  </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/avatar-mini.jpg"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">10 May</small> <strong>Jane Doe</strong> <span>Phasellus sodales vulputate urna, vel accumsan augue egestas ac  </span>  </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/avatar-mini.jpg"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">3 June</small> <strong>Jonathan Smith</strong>  <span>Porttitor eu consequat risus. </span> <span class="label label-sm btn-warning">error</span> </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/avatar-mini.jpg"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">15 April</small> <strong>John Doe</strong>  <span>Donec ultrices faucibus rutrum. Phasellus sodales </span> <span class="label label-sm btn-success">normal</span> </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/avatar-mini.jpg"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">10 May</small> <strong>Jane Doe</strong> <span>Phasellus sodales vulputate urna, vel accumsan augue egestas ac  </span> <span class="label label-sm btn-danger">urgent</span> </a>
	                    </li>
	                    <li class="list-group-item">
	                        <span class="pull-left chk">
	                            <input type="checkbox"/>
	                        </span>
	                        <a class="thumb pull-left" href="#"> <img src="images/avatar-mini.jpg"> </a>
	                        <a class="" href="mail_view.html"> <small class="pull-right text-muted">3 June</small> <strong>Jonathan Smith</strong>  <span>Porttitor eu consequat risus. </span> <span class="label label-sm btn-warning">error</span> </a>
	                    </li>
	                </ul>
	            </section>


	        </section>
	    </div>

	</div>

@endsection