<aside class="left-sidebar sidebar-dark" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="{{  url('/dashboard') }}">
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
                                <a style="font-size: small;" href="{{  route('auth.manage_prefix') }}">Manage Prefixes</a>
                              </li>
                              
                              <li >
                                <a style="font-size: small;" href="{{  route('auth.plates_list') }}">Plates List</a>
                              </li>
                              
                              <li >
                                <a style="font-size: small;" href="{{  route('auth.returned_number_plates') }}">Returned Number Plates</a>
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
                                <a style="font-size: small;" href="{{  route('auth.tims_registration_list') }}">Tims Registrations</a>
                              </li>
                              
                              <li >
                                <a style="font-size: small;" href="#">New Tims Registration</a>
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
                                <a style="font-size: small;" href="{{  route('auth.vehicles_database') }}">Vehicle Database (Legacy)</a>
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
                                <a href="#">Logbook Issue</a>
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
                              <a class="sidenav-item-link" href="{{ route('auth.vat_suppliers') }}">
                                <span class="nav-text">V.A.T Suppliers</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="{{ route('auth.clearing_agents') }}">
                                <span class="nav-text">Clearing Agents</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">Blanket V.A.T Suppliers</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="{{ route('auth.vehicle_models') }}">
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
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">Blanket VAT</span>
                                
                              </a>
                            </li>


                            
                            <li >
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">Subprocesses</span>
                                
                              </a>
                            </li>
                          
                            
                            <li >
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">Case Management</span>
                                
                              </a>
                            </li>
                        

                            
                            <li >
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">Case Clearance</span>
                                
                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="#">
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
                    <a class="sidenav-item-link" href="#">
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
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">User Profile</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">User Activities</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">User Profile Settings</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">User Account Settings</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">User Planing Settings</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">User billing</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="#">
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
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">Sign In</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">Sign Up</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="#">
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
