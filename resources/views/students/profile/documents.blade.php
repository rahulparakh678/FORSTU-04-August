@extends('layouts.student')
@section('content')

@if(!(App\StudentProfile::where('user_id',auth()->user()->id)->exists()))

 <div class="alert alert-danger" role="alert">
  Complete your Profile to View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i> This Section
</div>
@else
<table class="table table-striped ">

	<thead class="thead-dark">
		<th>
			Document Name
		</th>
		<th>
			Upload
		</th>
		<th>
			
		</th>
	</thead>
	<tbody>
            <hr>
            <strong>Note : Maximum File size allowed is only 1 MB</strong>
            <hr>

                    <tr>
                        <td>
                            <div class="form-group">
                                <label class="required">Photo</label>
                            </div>
                            
                        </td>

                        @if($profiles->photo===null)
                    <td>
                
                        <form action="{{route('photoupload')}} " method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
    
    
                        <input type="file" name="photo" required>
                        <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                        </form>     
                
                    </td>
                        @else
                    <td>

                        @if(!empty($profiles->photo))
                        <a href="{{$profiles->photo}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                        @endif 
                        
                        <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#photo">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i> </button>

                        <div class="modal fade" id="photo" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Photo Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Image is Deleted successfully. Now Reupload the Photo here</p>
                                <form action="{{route('photoupload')}} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
    
    
                                <input type="file" name="photo" required>
                                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                </form>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
      
                    </div>
                 </div>
                    </td>
                        @endif
            
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label class="">Parents Aadhar Card</label>
                            </div>
                            
                        </td>

                        @if($profiles->paadhar===null)
                    <td>
                
                        <form action="{{route('paadharupload')}} " method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
    
    
                        <input type="file" name="paadhar" required>
                        <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                        </form>     
                
                    </td>
                        @else
                    <td>

                        @if(!empty($profiles->paadhar))
                        <a href="{{$profiles->paadhar}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                        @endif 
                        
                        <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#paadhar">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i> </button>

                        <div class="modal fade" id="paadhar" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Parents Aadhar Card Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Image is Deleted successfully. Now Reupload the Parents Aadhar Card here</p>
                                <form action="{{route('paadharupload')}} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
    
    
                                <input type="file" name="paadhar" required>
                                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                </form>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
      
                    </div>
                 </div>
                    </td>
                        @endif
                    </tr>
                    <tr>
                    <td>
                        <div class="form-group">
                            <label class="required"> Aadhar card</label>
                        </div>
                    </td>
                    @if($profiles->aadhar_card===null)
                    <td>
                        <form action="{{route('aadharupload')}} " method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
    
    
                        <input type="file" name="aadhar_card" required>
                        <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                        </form>     
                    </td>
                    @else
                    <td>
                    <a href="{{$profiles->aadhar_card}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> 
                    <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#aadhar">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="aadhar" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Aadhar Card Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Aadhar Card  is Deleted successfully. Now You can Reupload the Aadhar Card here</p>

                                <form action="{{route('aadharupload')}} " method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
    
    
                                    <input type="file" name="aadhar_card" required>
                                    <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                </form> 
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>
                    </td>
                    @endif
                    </tr>
                    <tr>

            <td>
                <div class="form-group">
                    <label class="required">
                        Address Proof            
                    </label>
                    <br>
                    <small>Back side of Aadhar card is also acceptable as address proof</small>
                </div>
            
             </td>
            @if($profiles->address_proof===null)
            
            <td>
                <form action="{{route('addproofupload')}} " method="POST" enctype="multipart/form-data" >
                {{ csrf_field() }}
    
    
                <input type="file" name="address_proof" required>
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->address_proof}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#address">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="address" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Address Proof Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Address Proof  is Deleted successfully. Now You can Reupload the Address Proof here</p>

                                
                                <form action="{{route('addproofupload')}} " method="POST" enctype="multipart/form-data" >
                                {{ csrf_field() }}
    
    
                                     <input type="file" name="address_proof" required>
                                    <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                </form>
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>

                
            </td>

            @endif
            
       

        <tr>
            <td>
                <div class="form-group">
                    <label>Caste Certificate</label>
                </div>
            
            </td>
            @if($profiles->caste_certificate===null)
            
            <td>
                <form action="{{route('casteupload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="caste_certificate" required>
                
                <button class="btn btn-success" type="submit" 
                value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->caste_certificate}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#caste_certificate">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="caste_certificate" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Caste Certificate Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Caste Certificate  is Deleted successfully. Now You can Reupload the Caste Certificate here</p>

                                <form action="{{route('casteupload')}} " method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
    
    
                                    <input type="file" name="caste_certificate" required>
                
                                    <button class="btn btn-success" type="submit" 
                                    value="Upload">Upload </button>
                
                                </form>  
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>

                
            </td>

            @endif
            
        </tr>
        
        @if($profiles->handicapped =='yes')
        <tr>
            <td>
                <div class="form-group">
                    <label class="required">Physically Handicapped Certificate</label>    
                </div>
                
            
            </td>
            @if($profiles->physically_handicapped_certificate===null)
            
            <td>
                <form action="{{route('phupload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="physically_handicapped_certificate" required>
                
                <button class="btn btn-success" type="submit" 
                value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->physically_handicapped_certificate}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#ph">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="ph" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Physically Handicapped Certificate Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Physically Handicapped Certificate  is Deleted successfully. Now You can Reupload the Physically Handicapped Certificate here</p>

                                <form action="{{route('phupload')}} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
    
    
                                <input type="file" name="physically_handicapped_certificate" required>
                
                                <button class="btn btn-success" type="submit" 
                                value="Upload">Upload </button>
                
                                </form> 

                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>

                
            </td>

            @endif
            
        </tr>
        @endif

        @if($profiles->single_parent =='Yes')
        <tr>
            <td>
                <div class="form-group">
                    <label class="required">Death Certificate</label>
                </div>
            
            </td>
            @if($profiles->death_certificate===null)
            <td>
                <form action="{{route('deathupload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="death_certificate" required>
                
                <button class="btn btn-success" type="submit" 
                value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->death_certificate}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#death">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="death" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Death Certificate Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Death Certificate  is Deleted successfully. Now You can Reupload the Death Certificate here</p>

                                <form action="{{route('deathupload')}} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
    
    
                                    <input type="file" name="death_certificate" required>
                
                                    <button class="btn btn-success" type="submit" 
                                    value="Upload">Upload </button>
                
                                </form>

                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>

                
            </td>
            @endif
            
        </tr>
        @endif
        <tr>

            <td>
                <div class="form-group">
                    <label class="required">Domicile Certificate</label>
                </div>
                 
            </td>
            @if($profiles->domicile_certificate===null)
            
            <td>
                <form action="{{route('domupload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="domicile_certificate" required>
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->domicile_certificate}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#domicile_certificate">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="domicile_certificate" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Domicile Certificate Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Domicile Certificate  is Deleted successfully. Now You can Reupload the Domicile Certificate here</p>

                                
                               <form action="{{route('domupload')}} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
    
    
                                <input type="file" name="domicile_certificate" required>
                                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                </form> 
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>


                
            </td>

            @endif
            
        </tr>
        <tr>

            <td>
                <div class="form-group">
                    <label class="required">
                        Income Certificate
                    </label>
                </div>
             </td>
            @if($profiles->income_certificate===null)
            
            <td>
                <form action="{{route('icupload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="income_certificate" required>
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->income_certificate}}" style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#income_certificate">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="income_certificate" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Income Certificate Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Income Certificate  is Deleted successfully. Now You can Reupload the Income Certificate here</p>

                               <form action="{{route('icupload')}} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
    
    
                                <input type="file" name="income_certificate" required>
                                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                </form>  
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>

                
            </td>
            @endif
            
        </tr>
        <tr>

            <td>
                <div class="form-group">
                    <label class="required">Bank Passbook</label>    
                </div>
                
            
             </td>
            @if($profiles->bank_passbook===null)
            
            <td>
                <form action="{{route('passbookupload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="bank_passbook" required>
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->bank_passbook}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> 
                 <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#bank_passbook">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="bank_passbook" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Bank Passbook Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Bank Passbook  is Deleted successfully. Now You can Reupload the Bank Passbook here</p>
                                
                                <form action="{{route('passbookupload')}} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
    
    
                                     <input type="file" name="bank_passbook" required>
                                    <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                </form>
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>

                
            </td>
            @endif
            
        </tr>
        <tr>
            <td>
                <div >
                    <label >Fee Structure</label>
                </div>
            </td>
            @if($profiles->feestructure===null)
            <td>
                <form action="{{route('feestructureupload')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="feestructure" required>
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->feestructure ?? ''}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#feestructure">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="feestructure" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2> Fee Structure Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Fee Structure Deleted successfully. Now You can Reupload the Fee Structure here</p>
                                
                                 <form action="{{route('feestructureupload')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
    
    
                                <input type="file" name="feestructure" required>
                                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                </form>  
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div> 
                

                
            </td>

            @endif
        </tr>
        <tr>

            <td>
                <div class="required">
                    <label class="required">College/School ID Card</label>
                </div>
            
             </td>
            @if($profiles->clg_id_card===null)
            
            <td>
                <form action="{{route('clgidupload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="clg_id_card" required>
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->clg_id_card}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#idcard">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="idcard" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2> ID Card Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your ID Card Deleted successfully. Now You can Reupload the ID Card here</p>
                                
                                 <form action="{{route('clgidupload')}} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
    
    
                                <input type="file" name="clg_id_card" required>
                                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                </form>  
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div> 
                

                
            </td>

            @endif
            
        </tr>
        <tr>

            <td>
                <div class="form-group">
                    <label class="required">Bonafide Certificate</label>
                </div>
              
            </td>
            @if($profiles->bonafide_certificate===null)
            
            <td>
                <form action="{{route('bonafideupload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="bonafide_certificate" required>
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->bonafide_certificate}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> 
                
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#bonafide">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="bonafide" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2> Bonafide Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Bonafide Deleted successfully. Now You can Reupload the Bonafide here</p>

                                <form action=" {{route('bonafideupload')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
    
    
                                <input type="file" name="bonafide_certificate" required>
                                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                </form>
                                
                                   
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div> 
                
            </td>
            @endif
            
        </tr>
        <tr>

            <td>
                <div class="form-group">
                    <label class="required">Admission Letter/ Allotment Letter</label>
                    <br>
                    <small>This document is compulsory required for Engineering Student</small>
                </div>
            
            </td>
            @if($profiles->admission_letter===null)
            
            <td>
                <form action="{{route('admissionupload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="admission_letter" required>
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->admission_letter}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>

                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#admission">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="admission" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2> Admission Letter Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Admission Letter  Deleted successfully. Now You can Reupload the it here</p>

                                <form action="{{route('admissionupload')}} " method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
    
    
                                    <input type="file" name="admission_letter" required>
                                    <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                </form>
                                
                                   
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>
                

                
            </td>
            @endif
            
        </tr>
        <tr>

            <td>
                <div class="form-group">
                    <label class="required">
                        Current Year Fees Reciept
                                
                    </label>
                    <br>
                    <small>Combine  tution fees,non tution fees</small> 
                        
                    
                </div>
                
             </td>
            @if($profiles->currentyear_fees_reciept===null)
            
            <td>
                <form action="{{route('cfupload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="currentyear_fees_reciept" required >
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->currentyear_fees_reciept}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>

                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#fees">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="fees" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2> Fees Reciept Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Fees Reciept is  Deleted successfully. Now You can Reupload the it here</p>

                                
                                <form action="{{route('cfupload')}} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
    
    
                                    <input type="file" name="currentyear_fees_reciept" required >
                                    <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                </form>
                                   
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div> 
                
                
            </td>
            @endif
            
        </tr>
        <tr>

            <td>
                <div class="form-group">
                    <label >
                        Hostel Fees Reciept
                    </label>
                </div>
                
             </td>
            @if($profiles->hostel_reciept===null)
            
            <td>
                <form action="{{route('hfupload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="hostel_reciept" required>
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->hostel_reciept}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#hfees">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="hfees" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2> Hostel Fees Reciept Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Hostel Fees Reciept is  Deleted successfully. Now You can Reupload the it here</p>

                                
                                <form action="{{route('hfupload')}} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
    
    
                                    <input type="file" name="hostel_reciept" required>
                                    <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                </form>
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>

                
            </td>
            @endif
            
        </tr>
        @if($profiles->course_type_id != '1')
        <tr>

            <td>
                <div class="form-group">
                    <label class="required">Class 10 Marksheet</label>    
                </div>
                
             
            </td>
            @if($profiles->class10_marksheet===null)
            
            <td>
                <form action="{{route('class10upload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="class10_marksheet" required>
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->class10_marksheet}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> 
                
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#class10">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="class10" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2> Class 10 Marksheet Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Class 10 Marksheet is  Deleted successfully. Now You can Reupload the it here</p>

                                    <form action="{{route('class10upload')}} " method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
    
    
                                    <input type="file" name="class10_marksheet" required>
                                    <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                    </form>
                                
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>
                
            </td>
            @endif
            
        </tr>
        @endif
        @if(($profiles->course_type_id != '1') && ($profiles->course_type_id != '2'))
        <tr>

            <td>
                <div class="form-group">
                    <label class="required">Class 12 Marksheet</label>
                </div>
                
             </td>
            @if($profiles->class12_marksheet===null)
            
            <td>
                <form action="{{route('class12upload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="class12_marksheet" required>
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->class12_marksheet}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> 
                
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#class12">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="class12" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2> Class 12 Marksheet Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Class 12 Marksheet is  Deleted successfully. Now You can Reupload the it here</p>

                                     <form action="{{route('class12upload')}} " method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
    
    
                                        <input type="file" name="class12_marksheet" required>
                                        <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                    </form> 
                                
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>
                
            </td>
            @endif
            
        </tr>
        @endif
        @if(($profiles->course_type_id == '4') || ($profiles->course_type_id == '5'))
        <tr>

            <td>
                <div class="form-group">
                    <label class="required">Diploma Marksheet</label>
                </div>
                
                
             </td>
            @if($profiles->diploma_marksheet===null)
            
            <td>
                <form action="{{route('diplomaupload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="diploma_marksheet" required> 
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->diploma_marksheet}}" style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> 
                
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#diploma">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="diploma" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Diploma Marksheet Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Diploma Marksheet is  Deleted successfully. Now You can Reupload the it here</p>

                                    <form action="{{route('diplomaupload')}} " method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
    
    
                                        <input type="file" name="diploma_marksheet" required> 
                                        <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                    </form>
                                
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>
                
            </td>
            @endif
            
        </tr>
        @endif
        @if($profiles->course_type_id == '5')
        <tr>

            <td>
                <div class="form-group">
                    <label class="required">Graduation Marksheet (Only for PG Students)</label>
                </div>
                
            </td>
            @if($profiles->graduation_marksheet===null)
            
            <td>
                <form action="{{route('gradupload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="graduation_marksheet" required>
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->graduation_marksheet}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> 
                
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#grad">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="grad" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Graduation Marksheet Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Graduation Marksheet is  Deleted successfully. Now You can Reupload the it here</p>

                                    <form action="{{route('gradupload')}} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
    
    
                                    <input type="file" name="graduation_marksheet" required>
                                    <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                </form>
                                
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>
                
            </td>
            @endif
            
        </tr>
        @endif
        <tr>

            <td>
                <div class="form-group">
                    <label>Previous Year/Previous Semester Marksheet</label>
                    <br>
                    <small>Student studying in first semester of Course dont upload anything there</small>
                </div>
                

            </td>
            @if($profiles->previous_marksheet===null)
            
            <td>
                <form action="{{route('prevupload')}} " method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
    
    
                <input type="file" name="previous_marksheet" required>
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                </form>     

            </td>
            @else
            <td>
                <a href="{{$profiles->previous_marksheet}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i></a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#previous">Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>

                    <div class="modal fade" id="previous" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Previous Marksheet Delete &nbsp;<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>d Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Previous Marksheet is  Deleted successfully. Now You can Reupload the it here</p>

                                     <form action="{{route('prevupload')}} " method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
    
    
                                        <input type="file" name="previous_marksheet" required>
                                        <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                    </form>
                                
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>

                
            </td>
            @endif
            
        </tr>
        <tr>

            <td>
                <div class="form-group">
                    <label>Recommendation Letter </label>
                    <br>
                    
                </div>
                

            </td>
            @if($profiles->pan_card===null)
            
            <td id="pan_card">
                <form action="{{route('recommendation')}} " method="POST" enctype="multipart/form-data" id="pan_card">
                {{ csrf_field() }}
    
    
                <input type="file" name="pan_card" onchange="document.getElementById('pan_card').submit();" >
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                
                </form>
                     

            </td>
            @else
            <td>
                <a href="{{$profiles->pan_card}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#pan_card">Delete</button>

                    <div class="modal fade" id="pan_card" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Recommendation Letter Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Recommendation Letter is  deleted successfully. Now You can Reupload the it here</p>

                                     <form action="{{route('recommendation')}} " method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
    
    
                                        <input type="file" name="pan_card" required>
                                        <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                    </form>
                                
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>

                
            </td>
            @endif
            
        </tr>
        <tr>

            <td>
                <div class="form-group">
                    <label>Ration Card</label>
                    <br>
                    
                </div>
                

            </td>
            @if($profiles->ration_card===null)
            
            <td id="ration_card">
                <form action="{{route('ration_card')}} " method="POST" enctype="multipart/form-data" id="ration_card">
                {{ csrf_field() }}
    
    
                <input type="file" name="ration_card" onchange="document.getElementById('ration_card').submit();" >
                <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                
                </form>
                     

            </td>
            @else
            <td>
                <a href="{{$profiles->ration_card}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#ration_card">Delete</button>

                    <div class="modal fade" id="ration_card" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Ration Card Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Ration Card is  deleted successfully. Now You can Reupload the it here</p>

                                     <form action="{{route('ration_card')}} " method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
    
    
                                        <input type="file" name="ration_card" required>
                                        <button class="btn btn-success" type="submit" value="Upload">Upload </button>
                
                                    </form>
                                
                                 
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
      
                    </div>
                 </div>

                
            </td>
            @endif
            
        </tr>


        
        
    </tbody>
</table>
@endif
@endsection