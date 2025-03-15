@extends('layouts.admin')

@section("content")

        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ form-element ] start -->
          <div class="col-sm-12">
            <!-- Basic Inputs -->
            <div class="card">
              <div class="card-header">
                <h5>Configuration generale du site web</h5>
              </div>
              <form method="post" enctype="multipart/form-data" action='{{route("settings.store")}}'>
                @csrf() 

              <div class="card-body">
                <div class="alert alert-primary">
                  <div class="media align-items-center">
                    <i class="ti ti-info-circle h2 f-w-400 mb-0"></i>
                    <div class="media-body ms-3"> Title - footer et logo. </div>
                  </div>
                </div>
              
           

                <div class="form-group  mb-0">
                  <label for="demo-text-input" class="form-label">Title</label>
                  <input class="form-control" type="text" name="title" value="" id="demo-text-input">
                </div>

                <div class="form-group">
                  <label for="demo-input-file" class="form-label">Logo</label>
                  <input class="form-control" type="file" name="logo" id="demo-input-file">
                </div>

                <div class="form-group mb-0">
                  <label class="form-label" for="exampleTextarea">Footer</label>
                  <textarea class="form-control" name="footer" id="exampleTextarea" rows="10">

                  <p>© Copyright 2021 Space Dynamic Co. All Rights Reserved. 
          
          <br>Design: <a rel="nofollow" href="https://templatemo.com" bis_skin_checked="1">TemplateMo</a></p>
                  </textarea>
                </div>

              </div>
              <div class="card-footer">
                <button class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-light">Reset</button>
              </div>
</form>
            </div>
            <!-- HTML Input Types -->
        
          </div>
       
          <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->


@endsection

@section("script")

<script src="/admin_assets/js/plugins/ckeditor/classic/ckeditor.js"></script>
    <script>
      (function () {
        ClassicEditor.create(document.querySelector('#exampleTextarea')).catch((error) => {
          console.error(error);
        });
      })();
    </script>
@endsection()