<div class="tab-pane fade" id="navs-top-material4" role="tabpanel">
                        <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Material_id:</label>
                          <select onchange="showStock4(this)" id="material_id4" name="material_id4" class="form-select">
                            <option value="0">Select Material</option>                  
                            @foreach($materials as $material)
                              <option value="{{$material['id']}}">{{ $material['name'] }}</option>
                            @endforeach
                          </select>
                        </div>              
                        <div class="mb-3">
                          <label for="material_description">Material_description:</label>
                          <input type="text" class="form-control" id="material_description4" value="some description" name="material_description4">
                        </div>
    
                        <div class="mb-3">
                          <label for="opening_stock">Opening_stock:</label>
                          <input type="text" readonly class="form-control" id="opening_stock4" name="opening_stock4" >
                        </div>  
                        <div class="mb-3">
                          <label for="issued">Issued:</label>
                          <input type="text" class="form-control" id="issued4" name="issued4" >
                        </div>
    
                        <div class="mb-3">
                          <label for="closing_stock">Closing_stock:</label>
                          <input readonly type="text" class="form-control" id="closing_stock4" name="closing_stock4" >
                        </div> 
                        <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Inwards:</label>
                          <select onchange="getRate4(this)" id="inward_id4" name="inward_id4" class="form-select"></select>
                        </div>
                        <div class="mb-3">
                          <label for="Rate4">Rate:</label>
                          <input readonly type="text" class="form-control" id="rate4" name="rate4" >
                        </div><div class="mb-3">
                          <label for="amount4">Amount:</label>
                          <input readonly type="text" class="form-control" id="amount4" name="amount4" >
                        </div>
                      </div>