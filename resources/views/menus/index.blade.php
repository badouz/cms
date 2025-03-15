@extends('layouts.admin')

@section("content")
<div class="row">

<div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Configuration du menu(Navbar)</h5>
                <small>Dans cette pgae vous pouvez modifier les elements du menu</small>
                <a href='{{ route("menus.create")}} '>Ajouter un item</a>
              </div>
              <div class="card-body">
                <div class="dt-responsive table-responsive">
                  <div id="custom-btn_wrapper" class="dataTables_wrapper dt-bootstrap5">
                
                     
                        <table id="custom-btn" class="table table-striped table-bordered nowrap dataTable" aria-describedby="custom-btn_info">
                    <thead>
                      <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="custom-btn" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 20.35px;">ID</th>
                        <th class="sorting" tabindex="0" aria-controls="custom-btn" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20.35px;">TITLE</th>
                        <th class="sorting" tabindex="0" aria-controls="custom-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100.35px;">LINK</th>
                        <th class="sorting" tabindex="0" aria-controls="custom-btn" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 600.6375px;">POSITION</th>
                        <th class="sorting" tabindex="0" aria-controls="custom-btn" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 600.6375px;">Action</th>
                    </thead>
                    <tbody>
                       
                    @foreach($allMenus as $menu)
                    <tr class="odd">
                        <td class="sorting_1">{{$menu->id}}</td>
                         <td>{{$menu->title}}</td>
                        <td>{{$menu->link}}</td>
                        <td>{{$menu->order}}</td>

                        <td><a href='{{route("menus.edit",["menu"=>$menu->id])}}'>Modifier</a></td>
             
                      </tr>
                   @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th rowspan="1" colspan="1">ID</th>
          
                      <th rowspan="1" colspan="1">TITLE</th>
                      <th rowspan="1" colspan="1">LINK</th>
                      <th rowspan="1" colspan="1">POSITON</th>
                      <th rowspan="1" colspan="1">ACTION</th>
                      
                    </tr>
                    </tfoot>
                  </table>
               
                   </div>
                  
                </div>
              </div>
            </div>
          </div>
</div>


@endsection