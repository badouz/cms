@extends('layouts.admin')

@section("content")

        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ form-element ] start -->
          <div class="col-sm-12">
            <!-- Basic Inputs -->
            <div class="card">
              <div class="card-header">
                <h5>Modification de l'element {{$menu->title}}</h5>
              </div>
              <form method="post" action='{{route("menus.update",["menu"=>$menu->id])}}'>
                @csrf() 
                @method("put")
              <div class="card-body">
                <div class="alert alert-primary">
                  <div class="media align-items-center">
                    <i class="ti ti-info-circle h2 f-w-400 mb-0"></i>
                    <div class="media-body ms-3"> Titre , lien , position </div>
                  </div>
                </div>
              
           

                <div class="form-group  mb-0">
                  <label for="demo-text-input" class="form-label">Title</label>
                  <input class="form-control" type="text" name="title" value="{{$menu->title}}" id="demo-text-input">
                </div>

                <div class="form-group">
                  <label for="demo-input-file" class="form-label">Lien</label>
                  <input class="form-control" type="text" name="link"  value="{{$menu->link}}" id="demo-input-file">
                </div>

                <div class="form-group mb-0">
                  <label class="form-label" for="exampleTextarea">Footer</label>
                  <input class="form-control" type="number" name="order"   value="{{$menu->order}}" id="demo-input-file">
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