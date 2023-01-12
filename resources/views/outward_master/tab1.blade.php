<div class="tab-pane fade show active" id="navs-top-material1" role="tabpanel">                        
                        <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Material_id:</label>
                          <select onchange="showStock1(this)" id="material_id1" name="material_id1" class="form-select">
                            <option value="0">Select Material</option>                  
                            @foreach($materials as $material)
                              <option value="{{$material['id']}}">{{ $material['name'] }}</option>
                            @endforeach
                          </select>
                        </div>              
                        <div class="mb-3">
                          <label for="material_description">Material_description:</label>
                          <input type="text" class="form-control" id="material_description1" value="some description" name="material_description1" required>
                        </div>
    
                        <div class="mb-3">
                          <label for="opening_stock">Opening_stock:</label>
                          <input type="text" readonly class="form-control" id="opening_stock1" name="opening_stock1" >
                        </div>  
                        <div class="mb-3">
                          <label for="issued">Issued:</label>
                          <input type="text" class="form-control" id="issued1" name="issued1" >
                        </div>
    
                        <div class="mb-3">
                          <label for="closing_stock">Closing_stock:</label>
                          <input readonly type="text" class="form-control" id="closing_stock1" name="closing_stock1" >
                        </div> 
                        <div class="mb-3">
                          <label for="defaultSelect" class="form-label">Inwards:</label>
                          <select onchange="getRate1(this)" id="inward_id1" name="inward_id1" class="form-select"></select>
                        </div>
                        <div class="mb-3">
                          <label for="Rate">Rate:</label>
                          <input readonly type="text" class="form-control" id="rate1" name="rate1" >
                        </div><div class="mb-3">
                          <label for="amount1">Amount:</label>
                          <input readonly type="text" class="form-control" id="amount1" name="amount1" >
                        </div>
​                         
                      </div>{{-- navs-top-material1 ends here --}}