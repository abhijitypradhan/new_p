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
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

        <div class="container"  align="center" style="margin-top:120px;">

<table style="background-color:black;color:white;">
     <tr style="padding:10px">
           <th style="padding:10px">Doctor name</th>
           <th style="padding:10px">Phone no</th>
           <th style="padding:10px">Speciality</th>
           <th style="padding:10px">Room</th>
           <th style="padding:10px">image</th>
           <th style="padding:10px">Update</th>
           <th style="padding:10px">Delete</th>
          
      </tr>
     @foreach($data as $datas)
      <tr align="center" style="background-color:blue;color:white;">
       <td>{{$datas->name}}</td>
       <td>{{$datas->phone}} </td>
       <td>{{$datas->speciality}} </td>
       <td>{{$datas->room}} </td>
       <td><img src="doctorimage/{{$datas->image}}" height="70px" width="70px"></td>
       
      <td> <a class="btn btn-primary" href="{{url('updatedoctor',$datas->id)}}">Update</a></td>
      <td><a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger" href="{{url('deletedoctor',$datas->id)}}" >Delete</a></td>
      </tr>
@endforeach
    
</table>

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