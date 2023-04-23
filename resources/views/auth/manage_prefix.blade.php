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
                        <h2  style="font-weight: bolder;">Prefixes</h2>
                       
                      </div>

                      <div align="right"><button class="btn btn-primary">Add Prefix</button></div>
                      <div class="card-body">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                          <thead>
                        
                            <tr>
                             
                            
                              <th>Organizations</th>
                              <th>Prefix</th>
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
	  <form action="" method="POST">
   
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
         

      </div>
    </div>
    
   

    @endsection