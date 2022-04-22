<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{asset('public/admin/images/favicon.png')}}" type="image/png">
  <title>Admin</title>

    <!--Begin  Page Level  CSS -->
    <link href="{{asset('public/admin/plugins/morris-chart/morris.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet"/>
     <!--End  Page Level  CSS -->
    <link href="{{asset('public/admin/css/css/icons.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin/css/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin/css/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin/css/css/responsive.css')}}" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="sticky-header">


    <!--Start left side Menu-->
    <div class="left-side sticky-left-side">

        <!--logo-->
        <div class="logo">
            <a href="index.html"><img src="{{asset('public/admin/images/logo.png')}}" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="{{asset('public/admin/images/logo-icon.png')}}" alt=""></a>
        </div>
        <!--logo-->

        <div class="left-side-inner">
            <!--Sidebar nav-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="menu-list nav-active"><a href="index.html"><i class="icon-home"></i> <span>Dashboard</span></a>
                    <ul class="sub-menu-list">
                        <li  class="active"><a href="{{URL::to('/dashboard')}}"> Dashboard 1</a></li>
                        <li><a href="dashboard2.html"> Dashboard 2</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-layers"></i> <span>UI Elements</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="ui-buttons.html"> Buttons</a></li>
                        <li><a href="ui-panels.html"> Panels</a></li>
                        <li><a href="ui-sweet-alert.html">Sweet alert</a></li>
                        <li><a href="ui-progressbar.html">Progressbar</a></li>
                        <li><a href="ui-alert-notification.html">Alert &amp; notification</a></li>
                        <li><a href="ui-checkbox-radio.html">Checkbox-radios</a></li>
                        <li><a href="ui-range-slider.html">Range slider</a></li>
                        <li><a href="ui-modals-tooltip.html">Modals Tooltip</a></li>
                        <li><a href="typography.html">Typography</a></li>
                    </ul>
                </li>
                
                <li class="menu-list"><a href="#"><i class="icon-grid"></i> <span>Tables</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="table-static.html"> Basic Table</a></li>
                        <li><a href="table-responsive.html">Responsive Table</a></li>
                        <li><a href="table-datatable.html">Data Tables</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-envelope-open"></i> <span>Mail</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="inbox.html"> Inbox</a></li>
                        <li><a href="compose.html"> Compose Mail</a></li>
                        <li><a href="message-view.html"> View Mail</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-loop"></i> <span>Forms</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="form-basic.html"> Form Layouts</a></li>
                        <li><a href="form-element.html"> Form Components</a></li>
                        <li><a href="form-wizard.html"> Form Wizards</a></li>
                        <li><a href="form-pickers.html"> Form Pickers</a></li>
                        <li><a href="form-validation.html"> Form Validation</a></li>
                        <li><a href="image-crop.html">Image Crop</a></li>
                        <li><a href="form-xeditable.html">X-editable</a></li>
                        <li><a href="form-editors.html">Editors</a></li>
                        <li><a href="form-upload.html">File Dropzone</a></li>
                    </ul>
                </li>
                
                
                <li class="menu-list"><a href="#"><i class="icon-film"></i> <span>Icons</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="icon-font-awesome.html"> Fontawesome</a></li>
                        <li><a href="icon-simple-lineicon.html">Simple Line Icon</a></li>
                        <li><a href="icon-themify.html">Themify Icons</a></li>
                        <li><a href="icon-material-design.html">Material Design Icons</a></li>
                         <li><a href="icon-ion.html">Ions Icon </a></li>
                    </ul>
                </li>
                
                
                <li><a href="calendar.html"><i class="icon-note"></i> <span>Calendar</span></a></li>
                 <li><a href="widget.html"><i class="icon-wrench"></i> <span>Widget</span></a></li>
                
                <li class="menu-list"><a href="#"><i class="icon-pie-chart"></i> <span>Charts</span></a>
                    <ul class="sub-menu-list">
                    <li><a href="flot-chart.html"> Flot Charts</a></li>
                    <li><a href="morris-chart.html"> Morris Charts</a></li>
                    <li><a href="chart-js.html"> Chartjs</a></li>
                    <li><a href="chart-sparkline.html"> Chart Sparkline</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="icon-location-pin"></i> <span>Maps</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="google-map.html"> Google Map</a></li>
                        <li><a href="vector-map.html"> Vector Map</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="icon-folder"></i> <span>Extra Pages</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="faq.html"> FAQ</a></li>
                        <li><a href="profile.html"> Profile</a></li>
                        <li><a href="invoice.html"> Invoice</a></li>
                        <li><a href="timeline.html"> Timeline</a></li>
                        <li><a href="email-template.html"> Email Template</a></li>
                        <li><a href="pricing-table.html"> Pricing Table</a></li>
                        <li><a href="search-result.html"> Search Result</a></li>
                        <li><a href="error-400.html"> 400 Error</a></li>
                        <li><a href="error-403.html"> 403 Error</a></li>
                        <li><a href="error-404.html"> 404 Error</a></li>
                        <li><a href="error-500.html"> 500 Error</a></li>
                        <li><a href="error-503.html"> 503 Error</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="icon-lock"></i> <span>Login</span></a>
                    <ul class="sub-menu-list">
                       <li><a href="login.html"> Login </a></li>
                       <li><a href="forgot-password.html"> Forgot Password </a></li>
                        <li><a href="registration.html"> Registration </a></li>
                        <li><a href="locked.html"> Lockscreen </a></li>
                    </ul>
                </li>

            </ul>
            <!--End sidebar nav-->

        </div>
    </div>
    <!--End left side menu-->
    
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <a class="toggle-btn"><i class="fa fa-bars"></i></a>

            <form class="searchform">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form>

            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-tasks"></i>
                            <span class="badge">8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 8 pending task</h5>
                            <ul class="dropdown-list">
                            <li class="notification-scroll-list notification-list ">
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa  fa-shopping-cart noti-primary"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">A new order has been placed.</h5>
                                        <p class="m-0">
                                            <small>29 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-check noti-success"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">Databse backup is complete</h5>
                                        <p class="m-0">
                                            <small>12 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-user-plus noti-info"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">New user registered</h5>
                                        <p class="m-0">
                                             <small>17 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                                <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-diamond noti-danger"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">Database error.</h5>
                                        <p class="m-0">
                                             <small>11 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-cog noti-warning"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">New settings</h5>
                                        <p class="m-0">
                                             <small>18 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                             </li>
                             <li class="last"> <a href="#">View all notifications</a> </li>
							</ul>
                        </div>
                    </li>
                    
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                         <h5 class="title">Notifications</h5>
                        <ul class="dropdown-list normal-list">
						 <li class="message-list message-scroll-list">
                          <a href="#">
                              <span class="photo"> <img src="{{asset('public/admin/images/users/avatar-8.jpg')}}" class="img-circle" alt="img"></span>
                              <span class="subject">John Doe</span>
                              <span class="message"> New tasks needs to be done</span>
                               <span class="time">15 minutes ago</span>
                          </a>
                          
                          <a href="#">
                              <span class="photo"> <img src="{{asset('public/admin/images/users/avatar-7.jpg')}}" class="img-circle" alt="img"></span>
                              <span class="subject">John Doe</span>
                              <span class="message"> New tasks needs to be done</span>
                               <span class="time">10 minutes ago</span>
                          </a>
                        
                          <a href="#">
                              <span class="photo"> <img src="{{asset('public/admin/images/users/avatar-6.jpg')}}" class="img-circle" alt="img"></span>
                               <span class="subject">John Doe</span>
                               <span class="message"> New tasks needs to be done</span>
                              <span class="time">20 minutes ago</span>
                          </a>
                         
                          <a href="#">
                              <span class="photo"> <img src="{{asset('public/admin/images/users/avatar-6.jpg')}}" class="img-circle" alt="img"></span>
                               <span class="subject">John Doe</span>
                               <span class="message"> New tasks needs to be done</span>
                              <span class="time">20 minutes ago</span>
                          </a>
                        
                          <a href="#">
                              <span class="photo"> <img src="{{asset('public/admin/images/users/avatar-6.jpg')}}" class="img-circle" alt="img"></span>
                               <span class="subject">John Doe</span>
                               <span class="message"> New tasks needs to be done</span>
                              <span class="time">20 minutes ago</span>
                          </a>
                          
                          <a href="#">
                              <span class="photo"> <img src="{{asset('public/admin/images/users/avatar-6.jpg')}}" class="img-circle" alt="img"></span>
                               <span class="subject">John Doe</span>
                               <span class="message"> New tasks needs to be done</span>
                              <span class="time">20 minutes ago</span>
                          </a>
						</li>
						<li class="last"> <a  href="#">All Messages</a> </li>
					</ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('public/admin/images/users/avatar-6.jpg')}}" alt="" />
                            John Doe
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                          <li> <a href="#"> <i class="fa fa-wrench"></i> Settings </a> </li>
                          <li> <a href="#"> <i class="fa fa-user"></i> Profile </a> </li>
                          <li> <a href="#"> <i class="fa fa-info"></i> Help </a> </li>
                          <li> <a href="#"> <i class="fa fa-lock"></i> Logout </a> </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->


        <!--body wrapper start-->
        <div class="wrapper">
            @yield('admin_content')
			  </div>
        <!-- End Wrapper-->

        <!--Start  Footer -->
        <footer class="footer-main"> 2017 &copy; Meter admin Template.	</footer>	
         <!--End footer -->

       </div>
      <!--End main content -->
    


    <!--Begin core plugin -->
    <script src="{{asset('public/admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/admin/plugins/moment/moment.js')}}"></script>
    <script  src="{{asset('public/admin/js/jquery.slimscroll.js')}} "></script>
    <script src="{{asset('public/admin/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('public/admin/js/functions.js')}}"></script>
    <!-- End core plugin -->
    
    <!--Begin Page Level Plugin-->
	<script src="{{asset('public/admin/plugins/morris-chart/morris.js')}}"></script>
    <script src="{{asset('public/admin/plugins/morris-chart/raphael-min.js')}}"></script>
    <script src="{{asset('public/admin/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('public/admin/pages/dashboard.js')}}"></script>
    <!--End Page Level Plugin-->
    <script src="{{asset('public/admin/js/main.js')}}"></script>
   

</body>

</html>