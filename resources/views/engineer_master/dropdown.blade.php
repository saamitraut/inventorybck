<div class="mb-3">
                        <label for="issued_to_staff" class="form-label">Issued to staff</label>
                        <input class="form-control" list="datalistOptions" id="issued_to_staff" name="issued_to_staff"  placeholder="Type to search...">
                        <datalist id="datalistOptions">
                          @if(count($Engineers)>0)
                            @foreach($Engineers as $Engineer)
                             <option value="{{$Engineer->accessid.'-'.$Engineer->EngineerName}}"></option>          
                            @endforeach
                          @endif
                          
                        </datalist>
                      </div>