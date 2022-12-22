@include('includes.header')

  <div class="content-wrapper">
  <!-- Content starts -->
  
  <div class="container-xxl flex-grow-1 container-p-y">
    
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manage Stock</h4>
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
Report
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
<a class="btn btn-primary" style="margin-bottom: 15px" href="/Stock/exportExcel" role="button">Export</a>
<!-- Export end -->
<!-- CLEAR start -->
<a class="btn btn-primary" style="margin-bottom: 15px" href="/Stock/" role="button">CLEAR</a>
<!-- CLEAR end -->
<!-- Modal Stock Report starts-->
<div class="modal fade " id="basicModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1"></h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>

  <div class="content-wrapper">
  <!-- Content starts -->
  
  <div class="container-xxl flex-grow-1 container-p-y">
    
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Stock Report</h4>

@if(Session::has('message'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                </div>
@endif
<!-- Export start -->
<a class="btn btn-primary" style="margin-bottom: 15px" href="/report/exportExcel" role="button">Export</a>
<!-- Export end -->
@if(count($reports)>0)
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Material</th>
         <th>Credit</th>
        <th>Debit</th>
       <th>Available</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
@foreach($reports as $report)
      <tr>
        <td> {{$report->name }} </td>
        <td> {{$report->credit }} </td>
        <td> {{$report->debit }} </td>
       <td> {{$report->availableStock}}</td>      
      </tr>
    <?php $i++;  ?>
    @endforeach
    </tbody>
  </table>
   @else
  <div class="alert alert-info" role="alert">
                    <strong>No Reports Found!</strong>
                </div>
 @endif
</div></div>  {{-- content wrapper of stock report ends --}}

    </div></div></div>
<!-- Modal Stock report end -->



<!-- Modal Search-->
<div class="modal fade" id="basicModal2" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Search Outward Entries</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
          <form role="form" method="post" action="/Stock/" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
  <div class="mb-3">
                <label for="defaultSelect" class="form-label">Material_id:</label>
                <select id="material_id" name="material_id" class="form-select">
                  <option>Select Material</option>                  
                  @foreach($materials as $material)
                    <option value="{{$material['id']}}">{{ $material['name'] }}</option>
                  @endforeach
                </select>
              </div>
    
 <div class="mb-3">
                <label for="issuedon" class="col-md-2 col-form-label">Issued On</label>
                <div class="col-md-10"><input class="form-control" type="date" value="" id="issuedon" name="issuedon" >
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
<!-- Modal search end -->

@if(count($Stocks)>0)
  <table class="table table-hover" id="htmltable">
    <thead>
      <tr>
        <th>SL No</th>
        <th>Material</th>
        <th>Credit</th>
        <th>Debit</th>
        <th>Date</th>
       <th id='noExl'>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
@foreach($Stocks as $Stock)
      <tr>
        <td>{{($Stocks->currentPage()-1)*$Stocks->perPage()+$i}} </td>
        <td> {{$Stock->material}} </td>
        <td> {{$Stock->credit }} </td>
        <td> {{$Stock->debit }}</td>
        <td> {{$Stock->date->format('Y-m-d') }}</td>
 
         <td id='noExl'>
          <div class="dropdown">            
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{Request::root()}}/Stock/change-status-Stock/{{$Stock->id }}"
                ><i class="bx bx-windows me-1"></i> @if($Stock->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif</a
              >
              <a class="dropdown-item" href="{{Request::root()}}/Stock/edit-Stock/{{$Stock->id}}"
                ><i class="bx bx-edit-alt me-1"></i> Edit</a
              >
              <a class="dropdown-item" href="{{Request::root()}}/Stock/delete-Stock/{{$Stock->id}}" onclick="return confirm('are you sure to delete')"
                ><i class="bx bx-trash me-1"></i> Delete</a
              >
            </div>
          </div>
        </td>

      </tr>
      <?php $i++;  ?>
    @endforeach
    {{ $Stocks->render() }} 
    </tbody>
  </table>
   @else
  <div class="alert alert-info" role="alert">
                    <strong>No Stocks Found!</strong>
                </div>
 @endif
</div>
  </div>
@include('includes.footer')