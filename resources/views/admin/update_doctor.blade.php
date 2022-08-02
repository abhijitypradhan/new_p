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
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
        <!-- partial -->
       
        <div class="container-fluid page-body-wrapper">



        <div class="container" style="margin-top: 100px;">

        
        @if(session()->has('message'))

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">x</button>

  {{session()->get('message')}}

</div>
 @endif
        
        <div class="form-group" >
         <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
         <div>
          <label>Doctor Name *</label>
          <input type="text" name="doctor_name" value="{{$data->name}}" style="color:blue;"  class="form-control" required="">
        </div>
          

        <div>
           <label>Phone No *</label>
          <input type="number" name="number" value="{{$data->phone}}" style="color:blue;" class="form-control" required="">
        </div>

        <div>
           <label>Speciality *</label>
           <input type="text" name="speciality" value="{{$data->speciality}}" style="color:blue;" class="form-control" required="">
        </div>

        <div>
           <label>Room No *</label>
          <input type="text" style="color:blue;" name="room" value="{{$data->room}}" class="form-control" required="">
        </div>

        <div>
           <label>Old Image *</label>
         <img height="100px" width="100px" src="doctorimage/{{$data->image}}">
        </div>

<br>
        <div>
           <label>New Image *</label>
          <input type="file"  name="file"  class="form-control" >
        </div>

           <input type="submit" name="submit" class="btn btn-success" value="submit">
        </form>
        </div>

        </div>
        </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>