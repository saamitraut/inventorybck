@include('includes.header')
<style>
  .required:after {
      content: "*";
      font-weight: bold;
      color: red;
  }
</style>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content starts -->
  
  <div class="container-xxl flex-grow-1 container-p-y">
    
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Inward Entries</h4>

  
@if(Session::has('message2'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message2') }}</strong>
                </div>
@endif

<!-- Button trigger modal -->
<button
type="button"
class="btn btn-primary"
data-bs-toggle="modal"
data-bs-target="#basicModal" style="margin-bottom: 15px"
>
Add inward
</button>
<!-- Export start -->
<a class="btn btn-primary" style="margin-bottom: 15px" href="/inward_master/exportExcel" role="button">Export</a>
<!-- Export end -->
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
<!-- CLEAR start -->
<a class="btn btn-primary" style="margin-bottom: 15px" href="/inward_master/" role="button">CLEAR</a>
<!-- CLEAR end -->


<!-- Add Modal Starts-->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Add inward</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <div id="errorsOuterDiv" class="alert alert-danger d-none"><ul id="errors"></ul></div>
          <form role="form" method="post" id="add_inward_master" action="/inward_master/add-inward_master-post" enctype="multipart/form-data" onsubmit="saveRegister(event)">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row"><div class="col-sm-6 mb-3">
                <label for="defaultSelect" class="form-label">Material</label>
                <select onchange="showStock(this)" id="material_id" name="material_id" class="form-select" required>
                  <option>Select Material</option>                  
                  @foreach($materials as $material)
                    <option value="{{$material['id']}}">{{ $material['name'] }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-sm-6 mb-3">
                <label for="defaultSelect" class="form-label">supplier </label>
                <select id="defaultSelect" name="supplier" class="form-select" required>
                  <option>Select supplier</option>                  
                  @foreach($suppliers as $supplier)
                    <option value="{{$supplier['id']}}">{{ $supplier['name'] }}</option>
                  @endforeach
                </select>
              </div>
              </div>
                <div class="row"><div class="col-sm-6 mb-3">
                <label for="material_description">Material Description:</label>
                <input type="text" class="form-control" id="material_description" name="material_description" required>
              </div><div class="col-sm-6 mb-3">
                <label for="receiptno">ReceiptNo:</label>
                <input type="text" value="" class="form-control" id="receiptno" name="receiptno" >
             </div>
              </div>
              <div class="row"><div class="col-sm-4 mb-3">
                <label for="opening_stock">Opening_stock:</label>
                <input type="text" class="form-control" id="opening_stock" name="opening_stock" readonly>
              </div>
              <div class="col-sm-4 mb-3">
                <label for="GST">GST:</label>
                <input type="text" class="form-control" id="GST" name="GST" readonly>
              </div>
              <div class="col-sm-4 mb-3">
                <label for="closing_stock">Closing_stock:</label>
                <input type="text" class="form-control" id="closing_stock" name="closing_stock" readonly>
              </div></div>
                <div class="row"><div class="col-sm-4 mb-3">
                  <label for="received">Received:</label>
                  <input type="text" class="form-control" id="received" name="received" >
                </div>
                <div class="col-sm-4 mb-3">
                  <label for="return">Return:</label>
                  <input type="text" class="form-control" id="return" name="return">
                </div>
                <div class="col-sm-4 mb-3">
                  <label for="return">Reorder:</label>
                  <input type="text" class="form-control" id="reorder" name="reorder">
                </div>
            </div>
              <div class="row"><div class="col-sm-4 mb-3">
                <label for="rate">Rate:</label>
                <input type="text" class="form-control" id="rate" name="rate">
              </div><div class="col-sm-4 mb-3">
                <label for="transportation">Transportation:</label>
                <input type="text" class="form-control" id="transportation" name="transportation">
              </div>
              <div class="col-sm-4 mb-3">
                <label for="amount">Amount:</label>
                <input type="text" value="" class="form-control" id="amount" name="amount">
              </div>
              </div>
              <div class="row">                
                <div class="col-sm-6 mb-3">
                  <label for="amount">Paid:</label>
                  <input type="text" value="" class="form-control" id="paid" name="paid">
                </div>
                <div class="col-sm-6 mb-3">
                  <label for="amount">Pending:</label>
                  <input type="text" value="" class="form-control" id="pending" name="pending">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 mb-3">
                  <label for="image" class="col-md-2 col-form-label">Image:</label>
                  <div class="col-md-10"><input type="file" class="btn btn-primary" id="image" name="image"></div>
                </div>
                <div class="col-sm-6 mb-3">
                  <label for="receivedon" class="col-md-2 col-form-label required">receivedon</label>
                  <div class="col-md-10"><input class="form-control" type="date" value="" id="receivedon" name="receivedon" required>
                  </div>
                </div></div>
              
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
<!-- Add Modal end -->

<!-- Modal search-->
<div class="modal fade" id="basicModal2" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Search Inward</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
          <form role="form" method="post" action="/inward_master/" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="mb-3">
                <label for="defaultSelect" class="form-label">Material</label>
                <select id="material_id" name="material_id" class="form-select">
                  <option>Select Material</option>                  
                  @foreach($materials as $material)
                    <option value="{{$material['id']}}">{{ $material['name'] }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                 <label for="receiptno">ReceiptNo:</label>
                 <input type="text" value="" class="form-control" id="receiptno" name="receiptno">
              </div>
              <div class="mb-3">
                <label for="defaultSelect" class="form-label">Supplier</label>
                <select id="defaultSelect" name="supplier" class="form-select">
                  <option>Select Supplier</option>                  
                  @foreach($suppliers as $supplier)
                    <option value="{{$supplier['id']}}">{{ $supplier['name'] }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="receivedon" class="col-md-2 col-form-label">receivedon</label>
                <div class="col-md-10"><input class="form-control" type="date" value="" id="receivedon" name="receivedon">
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
@if(count($inward_masters)>0)
  {{-- <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>Material</th>
        <th>Description</th>
        <th>Supplier</th>
        <th>Received</th>
        <th>Return</th>
        <th>ReceivedOn</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody> --}}
    <?php $i=1 ?>
@foreach($inward_masters as $inward_master)

{{-- {{dd($inward_master->toArray())}} --}}
<div class="card mb-4"><div class="row g-0"><div class="col-md-9">
                    <div class="card-body">
                      <h5 class="card-title">{{$inward_master->material}}</h5>
                      <div class="card-subtitle text-muted mb-3">ReceiptNo: {{$inward_master->receiptno}}</div>
                      <p class="card-text">Supplier: {{$inward_master->supplier}}  
                        Description: {{$inward_master->material_description}}
                      </p>
                      <p class="card-text">
                        Received : {{$inward_master->received}} Return : {{$inward_master->return}} On : {{\Carbon\Carbon::parse($inward_master->receivedon)->format('d/m/Y')}} </p>
                       <p class="card-text">
                        Opening Stock : {{$inward_master->opening_stock}}  Closing Stock : {{$inward_master->closing_stock}} Reorder : {{$inward_master->reorder}} </p>
                        <p class="card-text">
                        Rate: {{$inward_master->rate}} Transportation: {{$inward_master->transportation}} Amount: {{$inward_master->amount}}
                      </p>
                      <a class="card-link" href="{{Request::root()}}/inward_master/change-status-inward_master/{{$inward_master->id }}"
                ><i class="bx bx-windows me-1"></i> @if($inward_master->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif</a>
                       <a data-bs-toggle="modal"data-bs-target="#basicModall{{$i}}" class="card-link" href="#">Edit</a>
                       <a class="card-link" href="{{Request::root()}}/inward_master/delete-inward_master/{{$inward_master->id}}" onclick="return confirm('are you sure to delete')"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                <div class="col-md-3">
                        <img data-bs-toggle="modal"
data-bs-target="#basicInvoice{{$i}}" class="card-img card-img-right" src="/uploads/{{$inward_master->image}}" alt="Invoice">
                      </div>
                </div></div>
                <!-- Modal start -->
<div class="modal fade" id="basicInvoice{{$i}}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Invoice {{$inward_master->receiptno}}</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div class="card">
                    <img class="card-img-top" src="/uploads/{{$inward_master->image}}" alt="Card image cap">
                  </div>
</div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary">Search</button> </form>
      </div> --}}
    </div>
  </div>
</div>
<!-- Modal end -->


                <!-- Modal edit starts-->
<div class="modal fade" id="basicModall{{$i}}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Edit Supplier</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
          <form role="form" method="post" action="{{Request::root()}}/inward_master/edit-inward_master-post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" value="{{$inward_master->id }}"   name="inward_master_id">
<div class="mb-3">
    <label for="receiptno">ReceiptNo:</label>
    <input type="text" value="<?php echo $inward_master->receiptno ?>" class="form-control" id="receiptno" name="receiptno">
  </div>
 <div class="mb-3">
  <label for="defaultSelect" class="form-label">Material</label>
  <select id="material_id" name="material_id" class="form-select">
    <option>Select Material</option>                  
    @foreach($materials as $material)
      <option {{$inward_master->material_id==$material['id']?'selected':''}} value="{{$material['id']}}">{{ $material['name'] }}</option>
    @endforeach
  </select></div>
    <div class="mb-3">
    <label for="material_description">Material_description:</label>
    <input type="text" value="<?php echo $inward_master->material_description ?>" class="form-control" id="material_description" name="material_description">
  </div>
    
    <div class="mb-3">
    <label for="received">Received:</label>
    <input type="number" value="<?php echo $inward_master->received ?>" class="form-control" id="received" name="received">
  </div>
    <div class="mb-3">
    <label for="return">Return:</label>
    <input type="text" value="<?php echo $inward_master->return ?>" class="form-control" id="return" name="return">
  </div>
    
    <div class="mb-3">
    <label for="rate">Rate:</label>
    <input type="text" value="<?php echo $inward_master->rate ?>" class="form-control" id="rate" name="rate">
  </div>
    <div class="mb-3">
    <label for="amount">Amount:</label>
    <input type="text" value="<?php echo $inward_master->amount ?>" class="form-control" id="amount" name="amount">
  </div>
  <div class="mb-3">
    <label for="image">Image:</label>
    <input type="file" class="btn btn-primary" id="image" name="image">
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
        <td>{{$i}} </td>
        <td> <a href="{{Request::root()}}/inward_master/view-inward_master/{{$inward_master->id}}" > {{$inward_master->material}}</a> </td>        
        <td>{{$inward_master->material_description}}</td>
        <td>{{$inward_master->inward_master}} </td>
          <td>{{$inward_master->received}}</td>
          <td>{{$inward_master->return}}</td>
          <td>{{\Carbon\Carbon::parse($inward_master->receivedon)->format('d/m/Y')}}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{Request::root()}}/inward_master/change-status-inward_master/{{$inward_master->id }}"
                  ><i class="bx bx-windows me-1"></i> @if($inward_master->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif</a
                >
                <a class="dropdown-item" href="{{Request::root()}}/inward_master/edit-inward_master/{{$inward_master->id}}"
                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                >
                <a class="dropdown-item" href="{{Request::root()}}/inward_master/delete-inward_master/{{$inward_master->id}}" onclick="return confirm('are you sure to delete')"
                  ><i class="bx bx-trash me-1"></i> Delete</a
                >
              </div>
            </div>
          </td> --}}
          {{-- <td><a href="{{Request::root()}}/inward_master/change-status-inward_master/{{$inward_master->id }}" > @if($inward_master->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif </a>
        <a href="{{Request::root()}}/inward_master/edit-inward_master/{{$inward_master->id}}" >Edit</a>
        <a href="{{Request::root()}}/inward_master/delete-inward_master/{{$inward_master->id}}" onclick="return confirm('are you sure to delete')">Delete</a>
        </td> --}}

      {{-- </tr> --}}
    <?php $i++;  ?>
    @endforeach
    {{-- </tbody>
  </table> --}}
   @else
  <div class="alert alert-info" role="alert">
                    <strong>No Inward_masters Found!</strong>
                </div>
 @endif
  {{ $inward_masters->render() }} 
</div>
</div>

<script type="text/javascript" src="{{ URL::asset('js/inward.js') }}"></script>
@include('includes.footer')
