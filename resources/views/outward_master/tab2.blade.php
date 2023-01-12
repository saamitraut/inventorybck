<div class="tab-pane fade" id="navs-top-material2" role="tabpanel">
                        <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Material_id:</label>
                          <select onchange="showStock2(this)" id="material_id2" name="material_id2" class="form-select">
                            <option value="0">Select Material</option>                  
                            @foreach($materials as $material)
                              <option value="{{$material['id']}}">{{ $material['name'] }}</option>
                            @endforeach
                          </select>
                        </div>              
                        <div class="mb-3">
                          <label for="material_description">Material_description:</label>
                          <input type="text" class="form-control" id="material_description2" value="some description" name="material_description2" >
                        </div>
    
                        <div class="mb-3">
                          <label for="opening_stock">Opening_stock:</label>
                          <input type="text" readonly class="form-control" id="opening_stock2" name="opening_stock2" >
                        </div>  
                        <div class="mb-3">
                          <label for="issued">Issued:</label>
                          <input type="text" class="form-control" id="issued2" name="issued2" >
                        </div>
    
                        <div class="mb-3">
                          <label for="closing_stock">Closing_stock:</label>
                          <input readonly type="text" class="form-control" id="closing_stock2" name="closing_stock2" >
                        </div> 
                        <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Inwards:</label>
                          <select onchange="getRate2(this)" id="inward_id2" name="inward_id2" class="form-select"></select>
                        </div>
                        <div class="mb-3">
                          <label for="Rate">Rate:</label>
                          <input readonly type="text" class="form-control" id="rate2" name="rate2" >
                        </div><div class="mb-3">
                          <label for="amount1">Amount:</label>
                          <input readonly type="text" class="form-control" id="amount2" name="amount2" >
                        </div>
                      </div>