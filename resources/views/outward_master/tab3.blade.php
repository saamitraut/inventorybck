<div class="tab-pane fade" id="navs-top-material3" role="tabpanel">
                        <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Material_id:</label>
                          <select onchange="showStock3(this)" id="material_id3" name="material_id3" class="form-select">
                            <option value="0">Select Material</option>                  
                            @foreach($materials as $material)
                              <option value="{{$material['id']}}">{{ $material['name'] }}</option>
                            @endforeach
                          </select>
                        </div>              
                        <div class="mb-3">
                          <label for="material_description">Material_description:</label>
                          <input type="text" class="form-control" id="material_description3" value="some description" name="material_description3" >
                        </div>
    
                        <div class="mb-3">
                          <label for="opening_stock">Opening_stock:</label>
                          <input type="text" readonly class="form-control" id="opening_stock3" name="opening_stock3" >
                        </div>  
                        <div class="mb-3">
                          <label for="issued">Issued:</label>
                          <input type="text" class="form-control" id="issued3" name="issued3">
                        </div>
    
                        <div class="mb-3">
                          <label for="closing_stock">Closing_stock:</label>
                          <input readonly type="text" class="form-control" id="closing_stock3" name="closing_stock3" >
                        </div> 
                        <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Inwards:</label>
                          <select onchange="getRate3(this)" id="inward_id3" name="inward_id3" class="form-select"></select>
                        </div>
                        <div class="mb-3">
                          <label for="Rate">Rate:</label>
                          <input readonly type="text" class="form-control" id="rate3" name="rate3" >
                        </div><div class="mb-3">
                          <label for="amount3">Amount:</label>
                          <input readonly type="text" class="form-control" id="amount3" name="amount3" >
                        </div>
                      </div>