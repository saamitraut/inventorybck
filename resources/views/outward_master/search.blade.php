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
          <form role="form" method="post" action="/outward_master/" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">        
              <div class="mb-3">
                            <label for="defaultSelect" class="form-label">Material_id:</label>
                            <select id="material_id" name="material_id" class="form-select">
                              <option value="0">Select Material</option>                  
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
              <div class="mb-3">
                            <label for="defaultSelect" class="form-label">Branch</label>
                            <select id="branch_id" name="branch_id" class="form-select">
                              <option>Select Branch</option>                  
                              @foreach($Branches as $Branch)
                                <option value="{{$Branch['id']}}">{{ $Branch['name'] }}</option>
                              @endforeach
                            </select>
                          </div>
              <div class="mb-3">
                            <label for="opening_stock">required_for:</label>
                            <select id="required_for" name="required_for" class="form-select">
                              <option>Select required_for</option>                  
                              @foreach($required_fors as $required_for)
                                <option value="{{$required_for['id']}}">{{ $required_for['name'] }}</option>
                              @endforeach
                            </select>
                          </div>
              <div class="mb-3">
                          <label for="opening_stock">Purpose:</label>
                          <select id="purpose" name="purpose" class="form-select">
                              <option>Select purpose</option>                  
                              @foreach($purposes as $purpose)
                                <option value="{{$purpose['id']}}">{{ $purpose['name'] }}</option>
                              @endforeach
                            </select>
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