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
            <h3 class="card-title">Product Edit</h3>
          </div>

          @if(session()->has('success'))
          <section class="px-4">
              <div class="row my-3">
                  <div class="alert alert-success" id="successMessage">{{ session()->get('success') }}</div>
              </div>
          </section>
          @endif
          @if(session()->has('error'))
          <section class="px-4">
              <div class="row my-3">
                  <div class="alert alert-danger" id="errMessage">{{ session()->get('error') }}</div>
              </div>
          </section>
          @endif
          <!-- /.card-header -->
          <div class="card-body">
            <div class="ermsg"></div>
            <form id="createThisForm" action="{{ route('admin.productUpdate') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" class="form-control" id="codeid" name="codeid" value="{{$data->id}}">
              <div class="row">

                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Name*</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$data->name}}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$data->title}}">
                  </div>
                </div>
                
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Category*</label>
                    <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                      <option value="">Select</option>
                      @foreach ($category as $cat)
                        <option value="{{$cat->id}}" @if ($data->category_id == $cat->id) selected @endif>{{$cat->name}}</option>
                      @endforeach
                    </select>
                    
                    @error('category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Ingredients*</label>
                    <input type="text" class="form-control @error('ingredient') is-invalid @enderror" id="ingredient" name="ingredient" value="{{$data->ingredient}}">
                    
                    @error('ingredient')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                
                <div class="col-sm-4" style="display: none">
                  <div class="form-group">
                    <label>Brand</label>
                    <select name="brand_id" id="brand_id" class="form-control">
                      @foreach ($brands as $brand)
                        <option value="{{$brand->id}}" @if ($data->brand_id == $brand->id) selected @endif>{{$brand->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Small Image*</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Large Image*</label>
                    <input type="file" class="form-control @error('big_image') is-invalid @enderror" id="big_image" name="big_image">
                    
                    @error('big_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="card card-outline card-info">
                    <div class="card-header">
                      <h3 class="card-title">
                        Description*
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <textarea id="description" name="description" cols="30" rows="10"  class="form-control @error('description') is-invalid @enderror">
                        {{$data->description}}
                      </textarea>
                      
                      @error('description')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>

              

              
          </div>

          
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-secondary">Update</button>
            <button type="submit" id="FormCloseBtn" class="btn btn-default">Cancel</button>
          </div>
        </form>
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

  
  
      
  });
</script>
@endsection