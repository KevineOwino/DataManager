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
                        <h2>Returned Number Plates</h2>
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
                      <div class="card-body">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                          <thead>
                            <tr>
                             
                              <th>RNP Date</th>
                              <th>Plates</th>
                              <th>Unsigned List</th>
                              <th>Signed  List</th>
                              <th>Actions</th>
                              
                            </tr>
                          </thead>
                          <tbody>

                            <tr>
                              
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




                
            
                    
                  </div>
                </div>


            

              <!-- Stock Modal -->
              
</div>
          
        </div>



     
          <!-- Footer -->
         

      </div>
    </div>
    
   

    @endsection