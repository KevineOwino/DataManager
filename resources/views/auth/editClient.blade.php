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
            
          @include('status.status')
               
        
                    <div  class="col-md-9 col-lg-9 col-sm-9">
                       
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Edit and Update Your Details</h3>
                               
                            </div>
                  
                            <form action="{{url('/auth/client/update/'.$clients->id)}}" method="POST">
                               @csrf
                             
     
      
 

    <div class="row">
	
    <div class="col-lg-6"> <!-- Full Name --> 
        <div class="form-outline mb-4">
         <label style="color: black" class="form-label" for="form2Example1">Name:</label> 
        <input style="outline: black; border: 0.5px solid black" type="text" id="form2Example1" class="form-control" name="name" value="{{$clients->name}}" required /> 
        </div> 
      </div>
     <div class="col-lg-6"> <div class="form-outline mb-4"> <label style="color: black" class="form-label" for="form2Example1">Host Country ID:</label> 
     <input style="outline: black; border: 0.5px solid black" type="number" id="form2Example1" class="form-control" name="host_country_id" value="{{$clients->host_country_id}}" required /> 
    </div>
     </div>
	</div>




    <div class="row">
		<div class="col-lg-6">
		<div class="form-outline mb-4">
    <label style="color: black" class="form-label" for="form2Example1">Staff Code:</label>
    <input style="outline: black; border: 0.5px solid black" type="text" id="form2Example1" class="form-control" name="staff_code" value="{{$clients->staff_code}}" required />
     
     </div>
		</div>

        <div class="col-lg-6">

        <div class="form-outline mb-4">
    <label style="color: black" class="form-label" for="form2Example1">Organization:</label>
    <input style="outline: black; border: 0.5px solid black" type="text" id="form2Example1" class="form-control" name="organization" value="{{$clients->organization}}" required />
     
     </div>
        </div>
	</div>
  
  <!-- Password input -->

  <div class="row">
	<div class="col-lg-6">
	<div class="form-outline mb-4">
		
  <label style="color: black" class="form-label" for="form2Example2">R Number:</label>
    <input style="border: 0.5px solid black" type="number" id="form2Example2" class="form-control" name="r_number" value="{{$clients->r_number}}" required/>
 
  </div>
	</div>

    <div class="col-lg-6">
	<div class="form-outline mb-4">
		
  <label style="color: black" class="form-label" for="form2Example2">Index Number:</label>
    <input style="border: 0.5px solid black" type="number" id="form2Example2" class="form-control" name="index_number" value="{{$clients->index_number}}" required/>
 
  </div>
	</div>

    <div class="col-lg-6">
	<div class="form-outline mb-4">
		
  <label style="color: black" class="form-label" for="form2Example2">Email Address:</label>
    <input style="border: 0.5px solid black" type="email" id="form2Example2" class="form-control" name="email" value="{{$clients->email}}" required/>
 
  </div>
	</div>



	
  </div>
 
  

  
  <div class="form-outline ">
  <!-- Submit button -->
  <button style="background-color:#	#a020f0; border-radius: 5px; outline:none; border:none" type="submit" class="btn btn-primary btn-block form-control">Update</button>
</div>
  <!-- Register buttons -->
</form>
                       


 
                         </div>
                    </div>
                   </div>

                  </div>
                    
@endsection 
                         


                
            
                  






  


  
</div>



        
          <!-- Footer -->
         

      </div>
    </div>
    
    

    
           