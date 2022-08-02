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

                    <div  style="margin-top:70px;">

                    <table style="background-color:black;color:white;">
                         <tr >
                               <th>Patient name</th>
                               <th>Email</th>
                               <th>Phone No</th>
                               <th>Doctor Name</th>
                               <th>Date</th>
                               <th>Message</th>
                               <th>Status</th>
                               <th>Approved</th>
                               <th>Canceled</th>
                               <th>Send Mail</th>
                              
                          </tr>
            @foreach($data as $appoint)
                          <tr style="background-color:blue;color:white;">
                           <td>{{$appoint->name}}</td>
                           <td> {{$appoint->email}}</td>
                           <td> {{$appoint->phone}}</td>
                           <td> {{$appoint->doctor}}</td>
                           <td>{{$appoint->date}}</td>
                           <td>{{$appoint->message}}</td>
                           <td>{{$appoint->status}}</td>
                          <td> <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a></td>
                          <td><a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}" >Canceled</a></td>
                          <td><a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}" >Send Mail</a></td>
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