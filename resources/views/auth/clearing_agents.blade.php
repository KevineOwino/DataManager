

@extends("index")

@section("content")
 
    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      
      
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
    

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
                        <h2>Clearing Agents</h2>
                        <div class="dropdown">
                          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> Yearly Chart
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </div>
                      </div>

                      <div align="right"><button class="btn btn-primary">Add Clearing Agent</button></div>

                      <div class="card-body">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                          <thead>
                            <tr>
                             
                              <th>Clearing Agent Name</th>
                              <th>Clearing Agent Address</th>
                              <th>Action</th>
                            
                            </tr>
                          </thead>
                          <tbody>

                            <tr>
                            
                              <td>Coach Swagger</td>
                              <td>24541</td>
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

                        

                          



                          </tbody>
                        </table>

                      </div>
                    </div>
                  </div>
                </div>


            

              <!-- Stock Modal -->
              
</div>
          
        </div>
        
          <!-- Footer -->
     
      </div>
    </div>
 
    @endsection