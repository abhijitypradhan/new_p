<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
  @include('admin.css')
  
  </head>
  <body>
    <div class="container-scroller">
    
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     
       
       @include('admin.navbar')
       <div class="container-fluid page-body-wrapper">


      
         
       <div class="container" style="margin-top: 100px;">

       @if(session()->has('message'))

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">x</button>

  {{session()->get('message')}}

</div>
 @endif
       <div class="form-group" >
         <form action="{{url('sendemail',$data->id)}}" method="POST" >

         @csrf
          <div>
           <label>Greeting *</label>
          <input type="text" name="greeting" placeholder="Write your greeting" style="color:blue;"  class="form-control" required="">
        </div>

        <div>
           <label>Body*</label>
          <input type="text" name="body" placeholder="Write the body content" style="color:blue;" class="form-control" required="">
        </div>

      

        <div>
           <label>Action Text *</label>
          <input type="text" style="color:blue;" name="actiontext" placeholder="Write action text content" class="form-control" required="">
        </div>

        <div>
           <label>Action Url *</label>
          <input type="text" style="color:blue;" name="actionurl" placeholder="Write actionurl" class="form-control" required="">
        </div>

        <div>
           <label>End Part *</label>
          <input type="text" style="color:blue;" name="endpart" placeholder="Write end Part" class="form-control" required="">
        </div>
<br></br>
           <input type="submit" name="submit" class="btn btn-success" value="submit">
        </form>
        </div>
           </div>

       </div>

      <!-- page-body-wrapper ends -->
    
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>