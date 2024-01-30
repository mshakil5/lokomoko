@extends('admin.layouts.admin')

@section('content')

<!-- Main content -->
<section class="content mt-3" id="newBtnSection">
    <div class="container-fluid">
      <div class="row">
        <div class="col-2">
            <a class="btn btn-secondary my-3" href="{{route('admin.productCreate')}}">Add new</a>
        </div>
      </div>
    </div>
</section>
  <!-- /.content -->

<!-- Main content -->
<section class="content" id="contentContainer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->

          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">All Data</h3>
            </div>

            @if(session()->has('success'))
            <section class="px-4">
                <div class="alert alert-success row my-3">
                    <div id="successMessage">{{ session()->get('success') }}</div>
                </div>
            </section>
            @endif
            @if(session()->has('error'))
            <section class="px-4">
                <div class="alert alert-danger row my-3">
                    <div class="" id="errMessage">{{ session()->get('error') }}</div>
                </div>
            </section>
            @endif


            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl</th>
                  <th>Product Name</th>
                  <th>Category</th>
                  <th>Ingredients</th>
                  <th>Image</th>
                  <th>Large Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($data as $key => $data)
                  <tr>
                    <td style="text-align: center">{{ $key + 1 }}</td>
                    <td style="text-align: center">{{$data->name}}</td>
                    <td style="text-align: center">{{$data->category->name}}</td>
                    <td style="text-align: center">{{$data->inredient}}</td>
                    <td style="text-align: center">
                      @if ($data->image)
                      <img src="{{asset('images/product/'.$data->image)}}" height="120px" width="220px" alt="">
                      @endif  
                    </td>
                    <td style="text-align: center">
                      @if ($data->big_image)
                      <img src="{{asset('images/product/'.$data->big_image)}}" height="120px" width="220px" alt="">
                      @endif  
                    </td>
                    <td style="text-align: center">
                      <a href="{{route('admin.productEdit', $data->id)}}"><i class="fa fa-edit" style="color: #2196f3;font-size:16px;"></i></a>
                      <a id="deleteBtn" rid="{{$data->id}}"><i class="fa fa-trash-o" style="color: red;font-size:16px;"></i></a>
                    </td>
                  </tr>
                  @endforeach
                
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->


@endsection
@section('script')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  $(document).ready(function () {
      
    
      //header for csrf-token is must in laravel
      $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
      //
      
      
      var url = "{{URL::to('/admin/product')}}";
      //Delete 
      $("#contentContainer").on('click','#deleteBtn', function(){
            if(!confirm('Sure?')) return;
            codeid = $(this).attr('rid');
            info_url = url + '/'+codeid;
            $.ajax({
                url:info_url,
                method: "GET",
                type: "DELETE",
                data:{
                },
                success: function(d){
                    if(d.success) {
                        alert(d.message);
                        location.reload();
                    }
                },
                error:function(d){
                    console.log(d);
                }
            });
        });
      //Delete  
      
      
  });
</script>
@endsection