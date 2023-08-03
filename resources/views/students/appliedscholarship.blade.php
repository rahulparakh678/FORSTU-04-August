@extends('layouts.student')
@section('content')




    <div class="row justify-content-center">
        <div class="col-md-12">

            
            <div class="card">
                <div class="card-header">
                   Applied Scholarship Details
                </div>

                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Setupscholarship">
                            
                            <thead>
                                
                                <tr>
                                   
                                    
                                    <th>Scheme Name</th>
                                                                   
                                    <th>Status</th>
                                    <th>Application PDF</th>
                        
                                </tr>

                            </thead>
                            
                            <tbody>
                               @foreach($scholarships as $scholarship)
                               @foreach($scholarship->users as $users)
                                  @if(Auth::user()->id==$users->id)
                                    <tr>
                                      
                                      <td><h5>{{$scholarship->scheme_name}}</h5>
                                       
                                  <strong>{{  \Carbon\Carbon::parse($users->pivot->created_at)->format('j F Y') }}</strong>
                                      </td>
                                      
                                      <td>
                                        <h5><span class="badge badge-success">
                                          {{$users->pivot->status}}
                                        </span></h5></td>
                                        <td></td>
                                      </tr>
                                  @endif


                               @endforeach
                               @endforeach
                              
                                @foreach($StudStatus as $status)
                                <tr>
                                
                                <td><h5>{{$status->scheme_name}}</h5>
                                  <br>
                                  <strong>{{  \Carbon\Carbon::parse($status->created_at)->format('j F Y') }}</strong>
                                </td>
                                
                                <td>
                                  <h5><span class="badge badge-success">{{$status->status}}</span></td>
                                        </h5>
                                </td>
                                <td>
                                  @if(isset($status->applicationpdf))
                                  <a href="{{$status->applicationpdf}}"  target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i>Application PDF</a>
                                  @endif
                                </td>
                              </tr>
                                @endforeach
                                
                            </tbody>
                            
                        </table>

                    </div>
                    
                </div>

            </div>
            

        
        </div>
    </div>


{{--
<div class="alert alert-primary" role="alert">
  Currently You are using our Free Plan. If you wish FORSTU should find all eligible Scholarships and apply them for you then Subscribe to our Paid Plan. <a href="{{ route('sfc') }}" class="alert-link">Click here to know more about paid plan.</a>
</div>
--}}



@endsection
