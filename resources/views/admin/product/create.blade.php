@extends('admin.layouts.admin')

@section('content')



<!-- Main content -->
<section class="content mt-3" id="addThisFormContainer">
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <!-- right column -->
      <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Add new Product</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="ermsg"></div>
            <form id="createThisForm">
              @csrf
              <input type="hidden" class="form-control" id="codeid" name="codeid">
              <div class="row">

                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                </div>
                
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                      <option value="">Select</option>
                      @foreach ($category as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Ingredients</label>
                    <input type="text" class="form-control" id="inredient" name="inredient">
                  </div>
                </div>
                
                <div class="col-sm-4" style="display: none">
                  <div class="form-group">
                    <label>Brand</label>
                    <select name="brand_id" id="brand_id" class="form-control">
                      @foreach ($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="card card-outline card-info">
                    <div class="card-header">
                      <h3 class="card-title">
                        Description
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <textarea id="description" name="description">
                        Place <em>some</em> <u>text</u> <strong>here</strong>
                      </textarea>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>

              

              
            </form>
          </div>

          
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" id="addBtn" class="btn btn-secondary" value="Create">Create</button>
            <button type="submit" id="FormCloseBtn" class="btn btn-default">Cancel</button>
          </div>
          <!-- /.card-footer -->
          <!-- /.card-body -->
        </div>
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->





@endsection
@section('script')
<script>
  $(function () {
    // Summernote
    $('#description').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

<script>
  $(document).ready(function () {
    
      //header for csrf-token is must in laravel
      $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
      //

      var url = "{{URL::to('/admin/brand')}}";
      
      // console.log(url);
      $("#addBtn").click(function(){
      //   alert("#addBtn");
              var form_data = new FormData();
              form_data.append("name", $("#name").val());
              $.ajax({
                url: url,
                method: "POST",
                contentType: false,
                processData: false,
                data:form_data,
                success: function (d) {
                    if (d.status == 303) {
                        $(".ermsg").html(d.message);
                    }else if(d.status == 300){
                      $(".ermsg").html(d.message);
                      window.setTimeout(function(){location.reload()},2000)
                    }
                },
                error: function (d) {
                    console.log(d);
                }
            });
          //create  end
          
      });
      
      
  });
</script>
@endsection