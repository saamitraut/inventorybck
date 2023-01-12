@include('includes.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content starts -->
  
  <div class="container-xxl flex-grow-1 container-p-y">
    
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manage Outward_master</h4>

@include('includes.message')

<!-- Button trigger modal -->
<button
type="button"
class="btn btn-primary"
data-bs-toggle="modal"
data-bs-target="#basicModal" style="margin-bottom: 15px"
>
Add Outward Entries
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
<a class="btn btn-primary" style="margin-bottom: 15px" href="/outward_master/exportExcel" role="button">Export</a>
<!-- Export end -->
<!-- CLEAR start -->
<a class="btn btn-primary" style="margin-bottom: 15px" href="/outward_master/" role="button">CLEAR</a>
<!-- CLEAR end -->

<!-- Add Modal -->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Add Outward Entries</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      
      <div class="modal-body">
          <form role="form" method="post" action="/outward_master/add-outward_master-post" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">        
              
              <div class="nav-align-top mb-4">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-material1" aria-controls="navs-top-home" aria-selected="true">
                          1
                        </button>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-material2" aria-controls="navs-top-material2" aria-selected="false">
                          2
                        </button>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-material3" aria-controls="navs-top-messages" aria-selected="false">
                          3
                        </button>
                      </li>

                      <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-material4" aria-controls="navs-top-messages" aria-selected="false">
                          4
                        </button>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-material5" aria-controls="navs-top-messages" aria-selected="false">
                          5
                        </button>
                      </li>
                    </ul>
                    <div class="tab-content">
                      @include('outward_master.tab1')
                      @include('outward_master.tab2')
                      @include('outward_master.tab3')
                      @include('outward_master.tab4')
                      @include('outward_master.tab5')
                    </div>
                  </div>
              <div id="OpeningStockalert" style="display:none" class="alert alert-danger" role="alert">Issued can not be more than Opening Stock!</div>
             @include('outward_master.common')
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="submit" id="outwardsubmit" class="btn btn-primary">Save changes</button> </form>
      </div>
    </div>
  </div></div>

<!-- Modal end -->
<!-- Button trigger modal -->

<!-- Modal Search-->
@include('outward_master.search')
<!-- Modal end -->
{{$outward_masters}}
@if(count($outward_masters)>0)
  @foreach($outward_masters as $outward_master)
    <?php $i=1 ?>
    @include('outward_master.card',['i'=>$i])

                  
    <?php $i++;  ?>
  @endforeach
@endif
@if(count($outward_masters)>0)
  {{-- <table class="table table-hover" id="htmltable">
    <thead>
      <tr>
        <th>SL No</th>
        <th>Material</th>
        <th>Issued</th>
        <th>IssuedOn</th>
        <th>CreatedOn</th>
        <th>Branch</th>
        <th>required_for</th>
        <th>purpose</th>        
        <th>aa</th>
        <th>customer_name</th>
        <th>mobile</th>
        <th>area</th>
        <th>issued_to_staff</th>
        <th>responsible_person</th>
        <th>receipt_no</th>
       <th id='noExl'>Actions</th>
      </tr>
    </thead>
    <tbody> --}}
    <?php $i=1 ?>
@foreach($outward_masters as $outward_master)
      {{-- <tr>
        <td>{{$i}} </td>
        <td> <a href="{{Request::root()}}/outward_master/view-outward_master/{{$outward_master->id}}" > {{$outward_master->material_id }}</a> </td>
<td> <a href="{{Request::root()}}/inward_master/view-inward_master/{{$outward_master->id}}" > {{$materials[$outward_master->material_id]['name'] }}</a> </td>  
 <td> {{$outward_master->issued}}</td>
 <td> {{$outward_master->issuedon}}</td>
 <td> {{$outward_master->created_at}}</td>
 <td> {{$Branches[$outward_master->branch_id]['name'] }}</td>
 <td> {{$required_fors[$outward_master->required_for]['name'] }}</td>
 <td> {{$purposes[$outward_master->purpose]['name'] }}</td>
 <td> {{$outward_master->aa}}</td>
 <td> {{$outward_master->customer_name}}</td>
 <td> {{$outward_master->mobile}}</td>
 <td> {{$outward_master->area}}</td>
 <td> {{$outward_master->issued_to_staff}}</td>
 <td> {{$outward_master->responsible_person}}</td>
 <td> {{$outward_master->receipt_no}}</td>
        
        <td  id='noExl'>  
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{Request::root()}}/outward_master/change-status-outward_master/{{$outward_master->id }}"
                  ><i class="bx bx-windows me-1"></i> @if($outward_master->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif</a
                >
                <a class="dropdown-item" href="{{Request::root()}}/outward_master/edit-outward_master/{{$outward_master->id}}"
                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                >
                <a data-bs-toggle="modal"
data-bs-target="#basicModall{{$i}}" class="dropdown-item" href="#"
                  ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="{{Request::root()}}/outward_master/delete-outward_master/{{$outward_master->id}}" onclick="return confirm('are you sure to delete')"
                  ><i class="bx bx-trash me-1"></i> Delete</a
                >
              </div>
            </div>
          </td>

      </tr> --}}

      <!-- Modal -->
<div class="modal fade" id="basicModall{{$i}}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabell">Edit Outward Entries</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
          <form role="form" method="post" action="{{Request::root()}}/outward_master/edit-outward_master-post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" value="{{$outward_master->id }}"   name="outward_master_id">


 <div class="mb-3">
  <label for="defaultSelect" class="form-label">Material</label>
  <select id="material_id" name="material_id" class="form-select">
    <option value="0">Select Material</option>                  
    @foreach($materials as $material)
      <option {{$outward_master->material_id==$material['id']?'selected':''}} value="{{$material['id']}}">{{ $material['name'] }}</option>
    @endforeach
  </select></div>

  <div class="mb-3">
                <label for="defaultSelect" class="form-label">Branch</label>
                <select id="branch_id" name="branch_id" class="form-select">
                  <option>Select Branch</option>                  
                  @foreach($Branches as $Branch)
                    <option {{$outward_master->branch_id==$Branch['id']?'selected':''}} value="{{$Branch['id']}}">{{ $Branch['name'] }}</option>
                  @endforeach
                </select></div>
    
    <div class="mb-3">
    <label for="material_description">Material_description:</label>
    <input type="text" value="<?php echo $outward_master->material_description ?>" class="form-control" id="material_description" value="some description" name="material_description">
  </div>
    <div class="mb-3">
    <label for="opening_stock">Opening_stock:</label>
    <input type="text" value="<?php echo $outward_master->opening_stock ?>" class="form-control" id="opening_stock" name="opening_stock">
  </div>
  <div class="mb-3">
    <label for="required_for">required_for:</label>
    <input type="text" value="<?php echo $outward_master->required_for ?>" class="form-control" id="required_for" name="required_for">
  </div>
  <div class="mb-3">
    <label for="purpose">purpose:</label>
    <input type="text" value="<?php echo $outward_master->purpose ?>" class="form-control" id="purpose" name="purpose">
  </div>
  <div class="mb-3">
    <label for="aa">aa:</label>
    <input type="text" value="<?php echo $outward_master->aa ?>" class="form-control" id="aa" name="aa">
  </div>
  <div class="mb-3">
    <label for="customer_name">customer_name:</label>
    <input type="text" value="<?php echo $outward_master->customer_name ?>" class="form-control" id="customer_name" name="customer_name">
  </div>
  <div class="mb-3">
    <label for="mobile">mobile:</label>
    <input type="text" value="<?php echo $outward_master->mobile ?>" class="form-control" id="mobile" name="mobile">
  </div>
  <div class="mb-3">
    <label for="area">area:</label>
    <input type="text" value="<?php echo $outward_master->area ?>" class="form-control" id="area" name="area">
  </div>

  <div class="mb-3">
    <label for="issued_to_staff">issued_to_staff:</label>
    <input type="text" value="<?php echo $outward_master->issued_to_staff ?>" class="form-control" id="issued_to_staff" name="issued_to_staff">
  </div>
  <div class="mb-3">
    <label for="responsible_person">responsible_person:</label>
    <input type="text" value="<?php echo $outward_master->responsible_person ?>" class="form-control" id="responsible_person" name="responsible_person">
  </div>
  <div class="mb-3">
    <label for="receipt_no">receipt_no:</label>
    <input type="text" value="<?php echo $outward_master->receipt_no ?>" class="form-control" id="receipt_no" name="receipt_no">
  </div>
    <div class="mb-3">
    <label for="issued">Issued:</label>
    <input type="text" value="<?php echo $outward_master->issued ?>" class="form-control" id="issued" name="issued">
  </div>
    <div class="mb-3">
    <label for="closing_stock">Closing_stock:</label>
    <input type="text" value="<?php echo $outward_master->closing_stock ?>" class="form-control" id="closing_stock" name="closing_stock">
  </div>  
  <div class="mb-3">
                <label for="issuedon" class="col-md-2 col-form-label">Issued On</label>
                <div class="col-md-10"><input class="form-control" type="date" value="<?php echo is_null($outward_master->issuedon) ?'':$outward_master->issuedon->format('Y-m-d'); ?>" id="issuedon" name="issuedon" required>
                </div>
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
<!-- Modal end -->
    <?php $i++;  ?>
  </tbody> 
  @endforeach
   @if(Request::isMethod('GET'))
    {{ $outward_masters->render() }} 
    @endif 
</table>
   
  @else
  <div class="alert alert-info" role="alert">
                    <strong>No Outward_masters Found!</strong>
                </div>
 @endif
</div>
<script type="text/javascript" src="{{ URL::asset('js/outward.js') }}"></script>
</div>
@include('includes.footer')