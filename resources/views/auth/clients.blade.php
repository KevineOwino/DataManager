<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Data Manager</title>
    
  <!-- theme meta -->
  <meta name="theme-name" content="mono" />

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{ asset('plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
  
  
  
  
  <link href="{{ asset('plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css') }}" rel="stylesheet" />
  
  
  
  <link href="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
  
  
  
  <link href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
  
  
  
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  
  
  
  <link href="{{ asset('plugins/toaster/toastr.min.css') }}" rel="stylesheet" />
  
  
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="{{ asset('css/style.css') }}" />

  


  <!-- FAVICON -->
  <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{ asset('plugins/nprogress/nprogress.js') }}"></script>
</head>


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    
    <div id="toaster"></div>
    

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      
      
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="{{  url('/auth/dashboard') }}">
              {{--  <img src="{{ asset('images/logo.png') }}" alt="Mono">  --}}
                <span class="brand-name">Data Manager</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li
                   class="active"
                   >
                    <a class="sidenav-item-link" href="{{url('/auth/dashboard') }}">
                      <i class="mdi mdi-briefcase-account-outline"></i>
                      <span class="nav-text">Dashboard</span>
                    </a>
                  </li>
                

      

                
                  <li class="section-title">
                    Apps
                  </li>
                

                

                
                  <li
                   >
                    <a class="sidenav-item-link" href="{{ url('/auth/clients') }}">
                      <i class="mdi mdi-account-group"></i>
                      <span class="nav-text">Clients</span>
                    </a>
                  </li>
                

                

                
                  <li
                   >
                    <a class="sidenav-item-link" href="{{ url('/auth/cases') }}">
                      <i class="mdi mdi-ear-hearing"></i>
                      <span class="nav-text">My Cases</span>
                    </a>
                  </li>
                

                




                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements">
                      <i class="mdi mdi-van-utility"></i>
                      <span class="nav-text">Vehicles</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="ui-elements"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
       




                             
                      <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                            aria-expanded="false" aria-controls="forms">
                            <span class="nav-text">Plates</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="forms">
                            <div class="sub-menu">
                              
                              <li >
                                <a style="font-size: small;" href="basic-input.html">Manage Prefixes</a>
                              </li>
                              
                              <li >
                                <a style="font-size: small;" href="input-group.html">Plates List</a>
                              </li>
                              
                              <li >
                                <a style="font-size: small;" href="checkbox-radio.html">Plates Orders</a>
                              </li>
                              
                              <li >
                                <a style="font-size: small;" href="form-validation.html">Returned Number Plates</a>
                              </li>
                            
                              
                            </div>
                          </ul>
                        </li>
                        
                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                            aria-expanded="false" aria-controls="icons">
                            <span class="nav-text">Tims Registration</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="icons">
                            <div class="sub-menu">
                              
                              <li >
                                <a style="font-size: small;" href="material-icons.html">Tims Registrations</a>
                              </li>
                              
                              <li >
                                <a style="font-size: small;" href="flag-icons.html">New Tims Registration</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                 

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#maps"
                            aria-expanded="false" aria-controls="maps">
                            <span class="nav-text">Vehicle Database</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="maps">
                            <div class="sub-menu">
                              
                              <li >
                                <a style="font-size: small;" href="google-maps.html">Vehicle Database (Legacy)</a>
                              </li>
                         
                              
                            </div>
                          </ul>
                        </li>



                          
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#widgets"
                            aria-expanded="false" aria-controls="widgets">
                            <span class="nav-text">Fixed Form A</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="widgets">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="widgets-general.html">Logbook Issue</a>
                              </li>
                         
                            </div>
                          </ul>
                        </li>
                        

                        
                  

                        
                      </div>
                    </ul>
                  </li>
                













                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#other-page"
                      aria-expanded="false" aria-controls="other-page">
                      <i class="mdi mdi-file-multiple"></i>
                      <span class="nav-text">Data Management</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="other-page"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="invoice.html">
                                <span class="nav-text">V.A.T Suppliers</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="404.html">
                                <span class="nav-text">Clearing Agents</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="page-comingsoon.html">
                                <span class="nav-text">Blanket V.A.T Suppliers</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="page-maintenance.html">
                                <span class="nav-text">Vehicle Models</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                




                  
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Processes</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="charts"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="apex-charts.html">
                                <span class="nav-text">Blanket VAT</span>
                                
                              </a>
                            </li>


                            
                            <li >
                              <a class="sidenav-item-link" href="apex-charts.html">
                                <span class="nav-text">Subprocesses</span>
                                
                              </a>
                            </li>
                          
                            
                            <li >
                              <a class="sidenav-item-link" href="apex-charts.html">
                                <span class="nav-text">Case Management</span>
                                
                              </a>
                            </li>
                        

                            
                            <li >
                              <a class="sidenav-item-link" href="apex-charts.html">
                                <span class="nav-text">Case Clearance</span>
                                
                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="apex-charts.html">
                                <span class="nav-text">Case Clearance- Report</span>
                                
                              </a>
                            </li>


                            

                        
                      </div>
                    </ul>
                  </li>
                


                
                {{--  <li
                   >
                    <a class="sidenav-item-link" href="{{ url('/vehicles') }}">
                      <i class="mdi mdi-account-group"></i>
                      <span class="nav-text">Vehicles</span>
                    </a>
                  </li>--}}
                

                

                
                {{--  <li
                   >
                    <a class="sidenav-item-link" href="{{ url('/data_management') }}">
                      <i class="mdi mdi-calendar-check"></i>
                      <span class="nav-text">Data Management</span>
                    </a>
                  </li> --}}
                


                  {{--<li
                   >
                    <a class="sidenav-item-link" href="{{ url('/processes') }}">
                      <i class="mdi mdi-calendar-check"></i>
                      <span class="nav-text">Processes</span>
                    </a>
                  </li> --}}


                  <li
                   >
                    <a class="sidenav-item-link" href="{{ url('/exports') }}">
                      <i class="mdi mdi-calendar-check"></i>
                      <span class="nav-text">Exports</span>
                    </a>
                  </li>





























       
                
                  <li class="section-title">
                    More Items
                  </li>

                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users"
                      aria-expanded="false" aria-controls="users">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">User</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="users"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="user-profile.html">
                                <span class="nav-text">User Profile</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="user-activities.html">
                                <span class="nav-text">User Activities</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="user-profile-settings.html">
                                <span class="nav-text">User Profile Settings</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="user-account-settings.html">
                                <span class="nav-text">User Account Settings</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="user-planing-settings.html">
                                <span class="nav-text">User Planing Settings</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="user-billing.html">
                                <span class="nav-text">User billing</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="user-notify-settings.html">
                                <span class="nav-text">User Notify Settings</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                

                

                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                      aria-expanded="false" aria-controls="authentication">
                      <i class="mdi mdi-account"></i>
                      <span class="nav-text">Authentication</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="authentication"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="sign-in.html">
                                <span class="nav-text">Sign In</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="sign-up.html">
                                <span class="nav-text">Sign Up</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="reset-password.html">
                                <span class="nav-text">Reset Password</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                

           

                
            
                
              </ul>

            </div>

            <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <ul class="d-flex">
                  <li>
                    <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
                  <li>
                    <a href="#" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>

      

      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class="page-wrapper">
        
          <!-- Header -->
          <header class="main-header" id="header">
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>

              <span class="page-title">dashboard</span>

              <div class="navbar-right ">

                <!-- search form -->
                <div class="search-form">
                  <form action="index.html" method="get">
                    <div class="input-group input-group-sm" id="input-group-search">
                      <input type="text" autocomplete="off" name="query" id="search-input" class="form-control" placeholder="Search..." />
                      <div class="input-group-append">
                        <button class="btn" type="button">/</button>
                      </div>
                    </div>
                  </form>
                  <ul class="dropdown-menu dropdown-menu-search">

                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Morbi leo risus</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Dapibus ac facilisis in</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Porta ac consectetur ac</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Vestibulum at eros</a>
                    </li>

                  </ul>

                </div>

                <ul class="nav navbar-nav">
                  <!-- Offcanvas -->
                  <li class="custom-dropdown">
                    <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off" href="javascript:" >
                      <i class="mdi mdi-contacts icon"></i>
                    </a>
                  </li>
                  <li class="custom-dropdown">
                    <button class="notify-toggler custom-dropdown-toggler">
                      <i class="mdi mdi-bell-outline icon"></i>
                      <span class="badge badge-xs rounded-circle">21</span>
                    </button>
                    <div class="dropdown-notify">

                      <header>
                        <div class="nav nav-underline" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all" role="tab" aria-controls="nav-home"
                            aria-selected="true">All (5)</a>
                          <a class="nav-item nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="nav-profile"
                            aria-selected="false">Msgs (4)</a>
                          <a class="nav-item nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="nav-contact"
                            aria-selected="false">Others (3)</a>
                        </div>
                      </header>

                      <div class="" data-simplebar style="height: 325px;">
                        <div class="tab-content" id="myTabContent">

                          <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tabs">

                            <div class="media media-sm bg-warning-10 p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-02.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">John Doe</span>
                                  <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 bg-light mb-0">
                              <div class="media-sm-wrapper bg-primary">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-calendar-check-outline"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">New event added</span>
                                  <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                  <span class="time">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-03.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Sagge Hudson</span>
                                  <span class="discribe">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info-dark">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-account-multiple-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Add request</span>
                                  <span class="discribe">Add Dany Jones as your contact.</span>
                                  <div class="buttons">
                                    <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                    <a href="#" class="btn btn-sm shadow-none">delete</a>
                                  </div>
                                  <span class="time">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-playlist-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Task complete</span>
                                  <span class="discribe">Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>

                          <div class="tab-pane fade" id="message" role="tabpanel" aria-labelledby="message-tab">

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-01.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Selena Wagner</span>
                                  <span class="discribe">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                  <span class="time">
                                    <time>15 min ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-03.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Sagge Hudson</span>
                                  <span class="discribe">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm bg-warning-10 p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-02.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">John Doe</span>
                                  <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid
                                    at highly months do things on at.</span>
                                  <span class="time">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-04.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Albrecht Straub</span>
                                  <span class="discribe"> Beatae quia natus assumenda laboriosam, nisi perferendis aliquid consectetur expedita non tenetur.</span>
                                  <span class="time">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                          <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="contact-tab">

                            <div class="media media-sm p-4 bg-light mb-0">
                              <div class="media-sm-wrapper bg-primary">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-calendar-check-outline"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">New event added</span>
                                  <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                  <span class="time">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info-dark">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-account-multiple-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Add request</span>
                                  <span class="discribe">Add Dany Jones as your contact.</span>
                                  <div class="buttons">
                                    <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                    <a href="#" class="btn btn-sm shadow-none">delete</a>
                                  </div>
                                  <span class="time">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-playlist-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Task complete</span>
                                  <span class="discribe">Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <footer class="border-top dropdown-notify-footer">
                        <div class="d-flex justify-content-between align-items-center py-2 px-4">
                          <span>Last updated 3 min ago</span>
                          <a id="refress-button" href="javascript:" class="btn mdi mdi-cached btn-refress"></a>
                        </div>
                      </footer>
                    </div>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="{{ asset('images/user/user-xs-01.jpg') }}" class="user-image rounded-circle" alt="User Image" />
                      <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <a class="dropdown-link-item" href="user-profile.html">
                          <i class="mdi mdi-account-outline"></i>
                          <span class="nav-text">My Profile</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-link-item" href="email-inbox.html">
                          <i class="mdi mdi-email-outline"></i>
                          <span class="nav-text">Message</span>
                          <span class="badge badge-pill badge-primary">24</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-link-item" href="user-activities.html">
                          <i class="mdi mdi-diamond-stone"></i>
                          <span class="nav-text">Activitise</span></a>
                      </li>
                      <li>
                        <a class="dropdown-link-item" href="user-account-settings.html">
                          <i class="mdi mdi-settings"></i>
                          <span class="nav-text">Account Setting</span>
                        </a>
                      </li>

                      <li class="dropdown-footer">
                        <a class="dropdown-link-item" href="{{ route('logout') }}"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
          <div class="content">   
            
          @include('status.status')
               
        
                <!-- Table Product -->
                <div class="row">
                  <div class="col-12">
                    <div class="card card-default">
                      <div class="card-header">
                        <h2  style="font-weight: bolder;">Principal</h2>
                       
                      </div>

                      <div align="right"><button class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#exampleModalCenter"  type="button">Add Client</button></div>
                      <div class="card-body">
                        <div class="table-responsive">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                          <thead>
                       
                            <tr>
                              <th></th>
                              <th>Full Name</th>
                              <th>Host Country ID</th>
                              <th>Staff Code</th>
                              <th>Organization</th>
                              <th>R Number</th>
                              <th>Index Number</th>
                              <th>Email Address</th>
                              <th>Action</th>
                             
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($clients as $client)
                            <tr>
                              <td class="py-0">
                                <img src="{{ asset('images/products/products-xs-01.jpg') }}" alt="Product Image">
                              </td>
                              <td>{{ $client->name }}</td>
                              <td>{{ $client->host_country_id }}</td>
                              <td>{{ $client->staff_code }}</td>
                              <th>{{ $client->organization }}</th>
                              <td>{{ $client->r_number }}</td>
                              <td>{{ $client->index_number }}</td>
                              <td>{{ $client->email }}</td>
                           
                              <td>
                                <div class="dropdown">
                                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ url('/auth/client/edit/'.$client->id) }}">Edit </a>
                                    <a class="dropdown-item" href="{{ url('/auth/client/delete/'.$client->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">Delete </a>
                                  </div>
                                </div>
                              </td>
                            </tr>

                            @endforeach


                          </tbody>
                        </table>
                  </div>
                      </div>
                    </div>
                  </div>
                </div>



                <div class="row">
                  <div class="col-12">
                    <div class="card card-default">
                      <div class="card-header">
                        <h2  style="font-weight: bolder;">Agencies</h2>
                       
                      </div>

                      <div align="right"><button class="btn btn-primary">Add Agency</button></div>
                      <div class="card-body">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                          <thead>
                        
                            <tr>
                             
                              <th></th>
                              <th>Agency Name</th>
                              <th>Host Country ID</th>
                              <th>Acronym</th>
                              <th>Status</th>
                              <th>Action</th>
                             
                            </tr>
                          </thead>
                          <tbody>

                            <tr>
                              <td class="py-0">
                                <img src="{{ asset('images/products/products-xs-01.jpg') }}" alt="Product Image">
                              </td>
                              <td>Coach Swagger</td>
                              <td>24541</td>
                              <td>27</td>
                              <td>1</td>
                            
                              <td>
                                <div class="dropdown">
                                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Edit </a>
                                    <a class="dropdown-item" href="#">Delete </a>
                                  </div>
                                </div>
                              </td>
                            </tr>

                            <tr>
                            <td class="py-0">
                                <img src="{{ asset('images/products/products-xs-02.jpg') }}" alt="Product Image">
                              </td>
                              <td>Toddler Shoes, Gucci Watch</td>
                              <td>24542</td>
                              <td>18</td>
                              <td>7</td>
                             
                              <td>
                                <div class="dropdown">
                                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>


                          </tbody>
                        </table>

                      </div>
                    </div>
                  </div>
                </div>




                
                <div class="row">
                  <div class="col-12">
                    <div class="card card-default">
                      <div class="card-header">
                        <h2 style="font-weight: bolder;" >Dependents</h2>
                       
                      </div>

              {{--   <div align="right"><button class="btn btn-primary">Add Agency</button></div> --}}
                      <div class="card-body">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                          <thead>
                            <tr>
                              
                              <th>Dependent Name</th>
                              <th>Principal </th>
                              <th>Relationship</th>
                             
                             
                            </tr>
                          </thead>
                          <tbody>

                        
                              <td>Coach Swagger</td>
                              <td>24541</td>
                              <td>27</td>
                             
                            
                            </tr>

                            <tr>
                           
                              <td>Toddler Shoes, Gucci Watch</td>
                              <td>24542</td>
                              <td>18</td>
                          
                             
                             
                            </tr>


                          </tbody>
                        </table>

                      </div>
                    </div>
                  </div>
                </div>


            

              <!-- Stock Modal -->
              
</div>
          
        </div>







        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div style="text-align: center" class="modal-header">
        <h5 style="font-weight: bold; text-align:center" class="modal-title" id="exampleModalLongTitle">All fields are required</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<div class="modal-body">
	  <form action="{{ route('auth.addClient') }}" method="POST">
   
      @csrf
   
      
     
  <!-- Email input -->
  <div class="row">
  
	<div class="col-lg-6">
		<!-- Full Name -->
	<div class="form-outline mb-4">
  <label style="color: black" class="form-label" for="form2Example1">Name</label>
    <input style="outline: black; border: 0.5px solid black" type="text" id="form2Example1" class="form-control" name="name" required />
   
  </div>
	</div>
     <!---Email -->
	<div class="col-lg-6">
		<div class="form-outline mb-4">
  <label style="color: black" class="form-label" for="form2Example1">Host Country ID</label>
    <input style="outline: black; border: 0.5px solid black" type="number" id="form2Example1" class="form-control" name="host_country_id" required />
   
  </div>
		</div>
  </div>
   
    <div class="row">
		<div class="col-lg-6">
		<div class="form-outline mb-4">
    <label style="color: black" class="form-label" for="form2Example1">Staff Code</label>
    <input style="outline: black; border: 0.5px solid black" type="text" id="form2Example1" class="form-control" name="staff_code" required />
     
     </div>
		</div>

        <div class="col-lg-6">

        <div class="form-outline mb-4">
    <label style="color: black" class="form-label" for="form2Example1">Organization</label>
    <input style="outline: black; border: 0.5px solid black" type="text" id="form2Example1" class="form-control" name="organization" required />
     
     </div>
        </div>
	</div>
  
  <!-- Password input -->

  <div class="row">
	<div class="col-lg-6">
	<div class="form-outline mb-4">
		
  <label style="color: black" class="form-label" for="form2Example2">R Number</label>
    <input style="border: 0.5px solid black" type="number" id="form2Example2" class="form-control" name="r_number" required/>
 
  </div>
	</div>

    <div class="col-lg-6">
	<div class="form-outline mb-4">
		
  <label style="color: black" class="form-label" for="form2Example2">Index Number</label>
    <input style="border: 0.5px solid black" type="number" id="form2Example2" class="form-control" name="index_number" required/>
 
  </div>
	</div>

  
  <div class="col-lg-6">
	
  <div class="form-outline mb-4"> 
    <label style="color: black" class="form-label" for="form2Example1">Email Address</label> 
    <input style="outline: black; border: 0.5px solid black" type="email" id="form2Example1" class="form-control" name="email" required /> 
  </div>
	</div>




	
  </div>
 
  

  
  <div class="form-outline ">
  <!-- Submit button -->
  <button style="background-color:#a020f0; border-radius: 5px; outline:none; border:none" type="submit" class="btn btn-primary btn-block form-control">Add</button>
</div>
  <!-- Register buttons -->
</form>
      </div>
     
    </div>
  </div>
</div>























        
          <!-- Footer -->
          <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by <a class="text-primary" href="http://www.iamabdus.com/" target="_blank" >Abdus</a>.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

      </div>
    </div>
    
                    <!-- Card Offcanvas -->
             


    
                    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
                    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                    <script src="{{ asset('plugins/simplebar/simplebar.min.js') }}"></script>
                    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

                    
                    
                    <script src="{{ asset('plugins/apexcharts/apexcharts.js') }}"></script>
                    
                    
                    
                    <script src="{{ asset('plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>
                    
                    
                    
                    <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
                    <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
                    <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-us-aea.js') }}"></script>
                    
                    
                    
                    <script src="{{ asset('plugins/daterangepicker/moment.min.js') }}"></script>
                    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
                    <script>
                      jQuery(document).ready(function() {
                        jQuery('input[name="dateRange"]').daterangepicker({
                        autoUpdateInput: false,
                        singleDatePicker: true,
                        locale: {
                          cancelLabel: 'Clear'
                        }
                      });
                        jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
                          jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
                        });
                        jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
                          jQuery(this).val('');
                        });
                      });
                    </script>
                    
                    
                    
                    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
                    
                    
                    
                    <script src="{{ asset('plugins/toaster/toastr.min.js') }}"></script>

                    
                    
                    <script src="{{ asset('js/mono.js') }}"></script>
                    <script src="{{ asset('js/chart.js') }}"></script>
                    <script src="{{ asset('js/map.js') }}"></script>
                    <script src="{{ asset('js/custom.js') }}"></script>

                    


                    <!--  -->


  </body>
</html>
