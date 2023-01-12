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
  <div class="mb-3">
    <label for="aa">aa:</label><span class="required" style="color:red">*</span>
    <input type="text"  class="form-control" id="aa" name="aa" required>
  </div>
  <div class="mb-3">
    <label for="customerid">customerid:</label>
    <input type="text" onblur="showCustomerDetails(this)" class="form-control" id="customerid" name="customerid">
  </div>
  <div class="mb-3">
    <label for="customer_name">customer_name:</label>
    <input type="text" class="form-control" id="customer_name" name="customer_name">
  </div>
  <div id="customernotfound"></div>
  
  <div class="mb-3">
    <label for="mobile">mobile:</label>
    <input type="text" class="form-control" id="mobile" name="mobile">
  </div>
  <div class="mb-3">
    <label for="area">area:</label>
    <input type="text"  class="form-control" id="area" name="area">
  </div>
  {{-- <div class="mb-3">
    <label for="issued_to_staff">issued_to_staff:</label>
    <input type="text" class="form-control" id="issued_to_staff" name="issued_to_staff">
  </div>     --}} 
  @include('engineer_master.dropdown')
  {{-- {{json_encode($responsible_persons)}} --}}
  <div class="mb-3">
                        <label for="responsible_person" class="form-label">Responsible Person:</label>
                        <select name="responsible_person" class="form-select" id="responsible_person" aria-label="Default select example">
                          <option selected="">Choose Responsible Person</option>
                          @foreach($responsible_persons as $key => $responsible_person)
                            <option value="{{$key}}">{{ $responsible_person }}</option>
                          @endforeach                          
                        </select>
                      </div>
  <div class="mb-3">
    <label for="receipt_no">Challan:</label>
    <input type="text"  class="form-control" id="receipt_no" name="receipt_no" required>
  </div>
  <div class="mb-3">
                <label for="issuedon" class="col-md-2 col-form-label">Issued On</label>
                <div class="col-md-10"><input class="form-control" type="date" value="" id="issuedon" name="issuedon" required>
                </div>
  </div>