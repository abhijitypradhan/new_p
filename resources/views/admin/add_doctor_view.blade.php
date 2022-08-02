<!DOCTYPE html>
<html lang="en">
  <head>
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
         <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

         @csrf
          <div>
           <label>Doctor Name *</label>
          <input type="text" name="name" placeholder="Write the doctor name" style="color:white;"  class="form-control" required="">
        </div>

        <div>
           <label>Phone No *</label>
          <input type="number" name="number" placeholder="Write the phone number" style="color:white;" class="form-control" required="">
        </div>

        <div>
           <label>Speciality *</label>
         <select class="form-control" style="color:white;" name="speciality" required="">
                  <option> Please Select</option>
                  <option value="skin">Skin</option>
                  <option value="eye">Eye</option>
                  <option value="heart">Heart</option>
                  <option value="nose">Nose</option>

        </select>
        </div>

        <div>
           <label>Room No *</label>
          <input type="text" style="color:white;" name="room" placeholder="Write the room number" class="form-control" required="">
        </div>

        <div>
           <label>Doctor Image *</label>
          <input type="file" name="file"  class="form-control" required="">
        </div>

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