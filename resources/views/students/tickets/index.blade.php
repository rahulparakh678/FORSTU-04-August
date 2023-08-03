@extends('layouts.student')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">

                    <div style="margin-bottom: 10px;" class="row">
                      <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('createquery') }}"  style="float: right;">
                          Raise Query
                        </a>
                      </div>
                    </div>
            <div class="card">
                <div class="card-header">
                    Queries Posted
                    
                </div>

                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Setupscholarship">
                            
                            <thead>
                                
                                <tr>
                                    
                                    
                                    <th width="5">Ticke ID</th>
                                    
                                    <th>Query</th>
                                    <th>Status</th>
                        
                                </tr>

                            </thead>
                            
                            <tbody>
                               @foreach($tickets as $key => $ticket)
                               <tr>
                                 <td>{{ $ticket->id ?? '' }}</td>
                                 <td>{{ $ticket->query ?? '' }}</td>

                                  @if($ticket->response)
                                    <td>
                               
                                      <a class="btn btn-xs btn-primary" href="{{ route('response', $ticket->id) }}">
                                        View Response
                                      </a>
                                    </td>
                                  @else
                                   <td>
                                      <h5><span class="badge badge-danger">Waiting for response</span></h5>
                                      </a>
                                    </td>
                           
                                  @endif
                               </tr>
                              @endforeach
                                
                            </tbody>
                            
                        </table>

                    </div>
                    
                </div>

            </div>
            

        
        </div>
    </div>
</div>
 

@endsection
