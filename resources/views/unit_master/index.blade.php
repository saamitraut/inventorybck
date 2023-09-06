@include('includes.header')

<!-- Content wrapper -->
<div class="content-wrapper">
<!-- Content starts -->
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">unit_master</h4>

    @if(Session::has('message'))
    <div class="alert alert-success">
                        <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                    </div>
    @endif
            <!--Button trigger modal -->
<button
    type="button"
    class="btn btn-primary"
    data-bs-toggle="modal"
    data-bs-target="#basicModal" style="margin-bottom: 15px"
>Add unit_master </button>

<!-- Modal -->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Add unit_master</h5 >
                <button 
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                 <form role="form" method="post" action="/unit_master/add-unit_master-post" >
                          <input type="hidden" name="_token" value="{{ csrf_token() }}" >
           
    <div class="form-group">
        <label for="name">name:</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
                </div >
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
 @if(count($unit_masters) > 0)
        <?php $i = 1; ?>
        @foreach($unit_masters as $unit_master)
        <div class='card mb-4'>
            <div class='card-body'>
                @foreach($columnNames as $columnName)
                    <h5 class='card-title'>{{$columnName}} : {{ $unit_master->$columnName  }}</h5>
                @endforeach
                <a class='card-link' href='{{ Request::root() }}/unit_master/change-status-unit_master/{{ $unit_master->id }}'>
                    <i class='bx bx-windows me-1'></i>
                    @if ($unit_master->status == 0)
                        {{ 'Activate' }}
                    @else
                        {{ 'Deactivate' }}
                    @endif
                </a>
                <a
                    data-bs-toggle='modal'
                    data-bs-target='#basicModall{{ $i }}'
                    class='card-link'
                    href='#'
                >
                    Edit
                </a>
                <a
                    class='card-link'
                    href='{{ Request::root() }}/unit_master/delete-unit_master/{{ $unit_master->id }}'
                    onclick='return confirm('Are you sure to delete?')'
                >
                    <i class='bx bx-trash me-1'></i> Delete
                </a>
            </div>
        </div>
        
<!-- Modal edit starts -->
<div class='modal fade' id='basicModall{{ $i }}' tabindex='-1' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel1'>Edit unit_master</h5>
                <button
                    type='button'
                    class='btn-close'
                    data-bs-dismiss='modal'
                    aria-label='Close'
                ></button>
            </div>
            <div class='modal-body'>
            <form role='form' method='post' action='{{Request::root()}}/unit_master/edit-unit_master-post' enctype='multipart/form-data'>
                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                    <input type='hidden' value='<?php echo $unit_master->id ?>'   name='unit_master_id'>

                    <div class='form-group'>
                        <label for='name'>name:</label>
                        <input type='text' class='form-control' value='<?php echo $unit_master->name ?>' id='name' name='name'>
                    </div>

        
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-outline-secondary' data-bs-dismiss='modal'>
          Close
        </button>
        <button type='submit' class='btn btn-primary'>Save changes</button> </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal edit ends -->

    <!-- ... (rest of the card content) ... -->
    <?php $i++; ?>
@endforeach
@else
<div class='alert alert-info' role='alert'>
    <strong>No unit_masters Found!</strong>
</div>
@endif

<!-- ... (pagination) ... -->

</div></div>

@include('includes.footer')
