                            <option value="0">Select Inward</option>                  
                            @foreach($inwards as $inward)
                              <option value="{{$inward['id']}}">INV{{sprintf('%06d', $inward['id'])}}</option>
                            @endforeach
                          