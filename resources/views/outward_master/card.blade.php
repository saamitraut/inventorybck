<div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title"><a href="{{Request::root()}}/inward_master/view-inward_master/{{$outward_master->id}}" > {{$outward_master->material}}</a>    Challan No:  {{$outward_master->receipt_no}}</h5>
                      
                      <h5>Amount: {{$outward_master->amount}}</h5>
                      <div class="card-subtitle text-muted mb-3">{{$outward_master->issued}} issued on {{$outward_master->issuedon->format('Y-m-d')}} to the branch 
                        {{$outward_master->branch }} </div>
                      <p class="card-text">
                       It is Required For {{$outward_master->requiredfor }} and the purpose is {{$outward_master->purpose }}
                       {{-- <p class="card-text">
                      Aa:{{$outward_master->aa}}
                        </p> --}}
                        <p class="card-text">
                        <h5 class="card-title">Customer Details</h5>
                      Name: {{$outward_master->customer_name}} Mobile: {{$outward_master->mobile}}
                    {{-- <p>Area: {{$outward_master->area}}</p></p>                        --}}
                  <p class="card-text">
                 Staff Name :{{$outward_master->issued_to_staff}}  Responsible Person: {{$outward_master->responsible_person}} </p>  
                      </p>
                       <a data-bs-toggle="modal"data-bs-target="#basicModall{{$loop->iteration}}" class="card-link" href="#">Edit</a>
                       <a class="card-link" href="{{Request::root()}}/outward_master/delete-outward_master/{{$outward_master->id}}" onclick="return confirm('are you sure to delete')"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>