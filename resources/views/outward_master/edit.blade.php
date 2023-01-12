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
              <input type="text" value="<?php echo $outward_master->material_description ?>" class="form-control" id="material_description" value="some description" name="material_description"></div>
            <div class="mb-3">
              <label for="opening_stock">Opening_stock:</label>
              <input type="text" value="<?php echo $outward_master->opening_stock ?>" class="form-control" id="opening_stock" name="opening_stock"></div>

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