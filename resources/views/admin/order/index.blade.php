@extends('admin.layouts.admin')

@section('content')

<!-- Main content -->
<section class="content mt-3" id="newBtnSection">
    <div class="container-fluid">
      <div class="row">
        <div class="col-2">
            <h1>All order</h1>
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
                        <th style="text-align: center">Invoice #</th>
                        <th style="text-align: center">Date</th>
                        <th style="text-align: center">Name</th>
                        <th style="text-align: center">Phone</th>
                        <th style="text-align: center">Email</th>
                        <th style="text-align: center">Payment Method</th>
                        <th style="text-align: center">Total Amount</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $data)
                    <tr>
                        <td style="text-align: center">{{ $data->invoiceno }}</td>
                        <td style="text-align: center">{{$data->date}}</td>
                        <td style="text-align: center">{{$data->name}}</td>
                        <td style="text-align: center">{{$data->phone}}</td>
                        <td style="text-align: center">{{$data->email}}</td>
                        <td style="text-align: center">{{$data->payment_type}}</td>
                        <td style="text-align: center">{{number_format($data->net_amount, 2)}}</td>
                        <td style="text-align: center">
                            {{-- <a href="{{route('admin.orderDeatils', $data->id)}}"> <i class="fa fa-eye" style="color: #2196f3;font-size:16px;"> </i></a> --}}

                            {{-- order details show  --}}



                            {{-- order details show  --}}

                            <button type="button" class="btn btn-secondary my-3" data-toggle="modal" data-target="#modal{{$data->id}}">
                                Details
                              </button>



                            <div class="modal fade" id="modal{{$data->id}}">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Order Informations</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        



                                        @include('admin.order.modal')


                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div>






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