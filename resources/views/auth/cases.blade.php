
 @extends("index")

  @section("content")

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      
    
      

      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class="page-wrapper">
        
          <!-- Header -->
        

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
          <div class="content">                
                  <!-- Top Statistics -->
               
           

                
                <!-- Table Product -->
                <div class="row">
                  <div class="col-12">
                    <div class="card card-default">
                      <div class="card-header">
                        <h2 style="font-weight: bolder;">My Cases</h2>
                        <div class="dropdown">
                          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> Show All Cases
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Yes</a>
                            <a class="dropdown-item" href="#">No</a>
                          </div>
                        </div>
                      
                      </div>
                      <div class="card-body">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                          <thead>
                            <tr>
                             
                              <th>Case#</th>
                              <th>Client Name</th>
                              <th>Process</th>
                              <th>Status</th>
                              <th>Submitted By</th>
                              <th>Assigned By</th>
                              <th>Date Submitted</th>
                              <th>Date Assigned</th>
                              <th>Action</th>
                           

                              <th></th>
                            </tr>
                          </thead>
                          <tbody>

                            <tr>
                            
                              <td>Coach Swagger</td>
                              <td>24541</td>
                              <td>27</td>
                              <td>1</td>
                              <td>2</td>
                              <td>7</td>
                              <td>4</td>
                              <td>18</td>
                            
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

                            <tr>
                            
                              <td>Toddler Shoes, Gucci Watch</td>
                              <td>24542</td>
                              <td>18</td>
                              <td>7</td>
                              <td>5</td>
                              <td>56</td>
                              <td>1</td>
                              <td>14</td>
                  
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


            

              <!-- Stock Modal -->
              
</div>
          
        </div>
        
         

      </div>
    </div>
    
      
    @endsection

    