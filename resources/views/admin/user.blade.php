

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css')

    <style type="text/css">
    .center
    {
        margin:auto;
        width:80%;
        border:1px solid black;
        margin-top:30px;
    }
    .text_size
    {
        padding:20px;   
        text-align:center;
        font-size:30px;
    }
    .image_size
    {
        width:100px;
        height:100px;
    }
    .th_head
    {
        background-color:skyblue;
    }
    .th 
    {
        padding:5px;
    }
    .td
    {
        padding:15px;
    }

    .search
    {
      margin-left:400px;
    }

</style>


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

        <div class="main-panel">
          <div class="content-wrapper">

          <table class="center">


                    <div class="search">
                      <form action="{{url('search')}}" method="get">
                        <input type="text"  name ="search" placeholder="Search for Something" 
                        style="color:black; text-align:center">
                        <input type="submit" value="Submit" class="btn btn-primary">
                      </form>
                    </div>
                    

                    <tr class="th_head">
                       <th class="th"> Name</th>
                        <th class="th">Email Id </th>
                        <th class="th">Phone No </th>
                        <th class="th">Address  </th>

                        <th class="th" colspan="2">Actions </th>

                    </tr>

                    @forelse($user as $user)
                    <tr>
                        <td class="td">{{$user->name}}</td>
                        <td class="td">{{$user->email}}</td>
                        <td class="td"></td>
                        <td class="td"></td>
                        <td class="td">
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="{{url('delete',$user->id)}}" class="btn btn-danger" >
                               Delete </a>
                        </td>

                    </tr>

                    @empty

                    <tr>
                      <td colspan="6"> 
                      <p>No Data Found </p>
                      </td>
                    </tr>

                    @endforelse

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

