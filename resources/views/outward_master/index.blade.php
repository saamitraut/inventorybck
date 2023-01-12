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
    @include('outward_master.card')                  
  @endforeach
@endif

@if(count($outward_masters)>0)  
@foreach($outward_masters as $outward_master)

<!-- Modal -->
<div class="modal fade" id="basicModall{{$loop->iteration}}" tabindex="-1" aria-hidden="true">
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
            
            @include('outward_master.edit')   
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