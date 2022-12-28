{{-- @extends('layouts.app') --}}
@include('includes.header')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row">
        <div class="col-lg-6 mb-4 order-0">
          
          <div class="card">            
            <div class="d-flex align-items-end row">
              <div class="col-sm-6">
                <div class="card-body">
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
</div></div></div>
</div></div>
<div class="col-lg-6 mb-4 order-0">
          
          <div class="card">            
            <div class="d-flex align-items-end row">
              <div class="col-sm-6">
                <div class="card-body">
                  <!-- Export start -->
<a class="btn btn-primary" style="margin-bottom: 15px" href="/report/exportExcel" role="button">Export</a>
<!-- Export end -->
@if(count($reports)>0)
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Material</th>
         <th>Reorder</th>        
      </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
@foreach($reorders as $reorder)
      <tr>
        <td> {{$reorder->material }} </td>
        <td> {{$reorder->reorder }} </td>        
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
</div></div></div>
</div></div>
</div>
</div></div>
@include('includes.footer')