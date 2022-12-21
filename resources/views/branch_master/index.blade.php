@include('includes.header')

<!-- Content wrapper -->
<div class="content-wrapper">
<!-- Content starts -->

<div class="container-xxl flex-grow-1 container-p-y">
  
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Masters/</span> Manage Branch Master</h4>
  

@if(Session::has('message'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                </div>
@endif

<!-- Button trigger modal -->
<button
type="button"
class="btn btn-primary"
data-bs-toggle="modal"
data-bs-target="#basicModal" style="margin-bottom: 15px"
>
Add Branch
</button>
<!-- Search start -->
<button
type="button"
class="btn btn-primary"
data-bs-toggle="modal"
data-bs-target="#basicModal2" style="margin-bottom: 15px"
>
Search
</button>
<!-- Search end -->
<!-- Export start -->
<a class="btn btn-primary" style="margin-bottom: 15px" href="/branch_master/exportExcel" role="button">Export</a>
<!-- Export end -->

<!-- CLEAR start -->
<a class="btn btn-primary" style="margin-bottom: 15px" href="/branch_master/" role="button">CLEAR</a>
<!-- CLEAR end -->

<!-- Modal addition starts-->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Add Branch</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
          <form role="form" method="post" action="/branch_master/add-branch_master-post" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary">Save changes</button> </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal addition ends -->
<!-- Modal search-->
<div class="modal fade" id="basicModal2" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Search Branch</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
          <form role="form" method="post" action="/branch_master/" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
 <div class="mb-3">
                <label for="name" class="col-md-2 col-form-label">Branch</label>
                <div class="col-md-10"><input class="form-control" type="text" value="" id="name" name="name" required>
                </div>
              </div>
              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary">Search</button> </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal end -->
@if(count($branch_masters)>0)
{{-- <div class="card"> --}}
  {{-- <h5 class="card-header">Manage Branch Master</h5> --}}
  {{-- <div class=" text-nowrap"> --}}
  {{-- <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>name</th>
        <th>Status</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody> --}}
    <?php $i=1 ?>
@foreach($branch_masters as $branch_master)
<div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">{{$branch_master->name}}</h5>
                      <a class="card-link" href="{{Request::root()}}/branch_master/change-status-branch_master/{{$branch_master->id }}"
                ><i class="bx bx-windows me-1"></i> @if($branch_master->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif</a>
                       <a data-bs-toggle="modal"data-bs-target="#basicModall{{$i}}" class="card-link" href="#">Edit</a>
                       <a class="card-link" href="{{Request::root()}}/branch_master/delete-branch_master/{{$branch_master->id}}" onclick="return confirm('are you sure to delete')"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                  <!-- Modal edit starts-->
<div class="modal fade" id="basicModall{{$i}}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Add Branch</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
          <form role="form" method="post" action="{{Request::root()}}/branch_master/edit-branch_master-post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" value="<?php echo $branch_master->id ?>"   name="branch_master_id">
            <div class="mb-3">
                <label for="name">Name:</label>
                <input type="text" value="<?php echo $branch_master->name ?>" class="form-control" id="name" name="name">
            </div>
              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary">Save changes</button> </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal edit ends -->
      {{-- <tr>
        <td>{{$i+$branch_masters->perPage()*($branch_masters->currentPage()-1)}} </td>
        <td> <a href="{{Request::root()}}/branch_master/view-branch_master/{{$branch_master->id}}" > {{$branch_master->name }}</a> </td>
        <td><span class="badge bg-label-{{$branch_master->status?'primary':'warning' }} me-1">{{$branch_master->status?'Active':'Pending' }}</span></td>  
        <td>
          <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{Request::root()}}/branch_master/change-status-branch_master/{{$branch_master->id }}"
                ><i class="bx bx-windows me-1"></i> @if($branch_master->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif</a
              >
              <a class="dropdown-item" href="{{Request::root()}}/branch_master/edit-branch_master/{{$branch_master->id}}"
                ><i class="bx bx-edit-alt me-1"></i> Edit</a
              >
              <a class="dropdown-item" href="{{Request::root()}}/branch_master/delete-branch_master/{{$branch_master->id}}" onclick="return confirm('are you sure to delete')"
                ><i class="bx bx-trash me-1"></i> Delete</a
              >
            </div>
          </div>
        </td>

      </tr> --}}
    <?php $i++;  ?>
    @endforeach
    {{-- </tbody>
  </table> --}}
   @else
  <div class="alert alert-info" role="alert">
                    <strong>No Branch_masters Found!</strong>
                </div>
 @endif
 @if(Request::isMethod('GET'))
    {{ $branch_masters->render() }} 
    @endif
{{-- </div> --}}
{{-- </div> --}}
</div>
</div>
<!-- Content end -->

@include('includes.footer')
