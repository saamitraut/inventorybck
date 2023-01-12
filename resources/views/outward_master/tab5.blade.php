<div class="tab-pane fade" id="navs-top-material5" role="tabpanel">
                        <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Material_id:</label>
                          <select onchange="showStock5(this)" id="material_id5" name="material_id5" class="form-select">
                            <option value="0">Select Material</option>                  
                            @foreach($materials as $material)
                              <option value="{{$material['id']}}">{{ $material['name'] }}</option>
                            @endforeach
                          </select>
                        </div>              
                        <div class="mb-3">
                          <label for="material_description">Material_description:</label>
                          <input type="text" class="form-control" id="material_description5" value="some description" name="material_description5" >
                        </div>
    
                        <div class="mb-3">
                          <label for="opening_stock">Opening_stock:</label>
                          <input type="text" readonly class="form-control" id="opening_stock5" name="opening_stock5" >
                        </div>  
                        <div class="mb-3">
                          <label for="issued">Issued:</label>
                          <input type="text" class="form-control" id="issued5" name="issued5" >
                        </div>
    
                        <div class="mb-3">
                          <label for="closing_stock">Closing_stock:</label>
                          <input readonly type="text" class="form-control" id="closing_stock5" name="closing_stock5" >
                        </div> 
                        <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Inwards:</label>
                          <select onchange="getRate5(this)" id="inward_id5" name="inward_id5" class="form-select"></select>
                        </div>
                        <div class="mb-3">
                          <label for="Rate5">Rate:</label>
                          <input readonly type="text" class="form-control" id="rate5" name="rate5" >
                        </div><div class="mb-3">
                          <label for="amount5">Amount:</label>
                          <input readonly type="text" class="form-control" id="amount5" name="amount5" >
                        </div>
                      </div>