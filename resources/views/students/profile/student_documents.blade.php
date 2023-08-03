@extends('layouts.student')
@section('content')
 <table class="table table-striped ">
        
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

                        @if($profile->photo===null)
                    <td>
                
                        <form action="{{route('photoupload')}} " method="POST" enctype="multipart/form-data" id="photo_upload">
                        {{ csrf_field() }}
    
    
                        <input type="file" name="photo" id="photo" onchange="document.getElementById('photo_upload').submit();" accept=".png,.jpg,.jpeg" >
                        
                        <small>Only JPEG,PNG File Format Allowed</small>
                        </form>     
                
                    </td>
                        @else
                    <td>

                        @if(!empty($profile->photo))
                        <a href="{{$profile->photo}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a>
                        @endif 
                        
                        <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#photo">Delete</button>

                        <div class="modal fade" id="photo" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Photo Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Image is deleted successfully. Now Reupload the Photo here</p>
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
                            <label class="required"> Aadhar card</label>
                        </div>
                    </td>
                    @if($profile->aadhar_card===null)
                    <td id="aadhar_document">
                        <form action="{{route('aadharupload')}} " method="POST" enctype="multipart/form-data" id="aadhar_upload">
                        {{ csrf_field() }}
    
    
                        <input type="file" name="aadhar_card" required   onchange="document.getElementById('aadhar_upload').submit();">
                       
                
                        </form> 
                          
                    </td>
                    @else
                    <td>
                    <a href="{{$profile->aadhar_card}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                    <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#aadhar">Delete</button>

                    <div class="modal fade" id="aadhar" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Aadhar Card Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Aadhar  is deleted successfully. Now You can Reupload the Aadhar Card here</p>

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
                    <small>Back Side of Aadhar Card is also acceptable as Address Proof</small>
                </div>
            
             </td>
            @if($profile->address_proof===null)
            
            <td id="add_document">
                <form action="{{route('addproofupload')}} " method="POST" enctype="multipart/form-data" id="address_proof" >
                {{ csrf_field() }}
    
    
                <input type="file" name="address_proof"  onchange="document.getElementById('address_proof').submit();">
                
                
                </form>     
               
            </td>
            @else
            <td>
                <a href="{{$profile->address_proof}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#address">Delete</button>

                    <div class="modal fade" id="address" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Address Proof Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Address Proof  is deleted successfully. Now You can Reupload the Address Proof here</p>

                                
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
            
        </tr>
        
                    
        <tr>
            <td>
                <div class="form-group">
                    <label>Caste Certificate</label>
                </div>
            
            </td>
            @if($profile->caste_certificate===null)
            
            <td id="caste_document">
                <form action="{{route('casteupload')}} " method="POST" enctype="multipart/form-data" id="caste_upload">
                {{ csrf_field() }}
    
    
                <input type="file" name="caste_certificate"  onchange="document.getElementById('caste_upload').submit();">
                 >
                
                
                
                </form>
                <button class="btn btn-success"  value=" " id="caste_doc">Attach Later </button>     

            </td>
            @else
            <td>
                <a href="{{$profile->caste_certificate}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#caste_certificate">Delete</button>

                    <div class="modal fade" id="caste_certificate" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Caste Certificate Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Caste Certificate  is deleted successfully. Now You can Reupload the Caste Certificate here</p>

                                <form action="{{route('casteupload')}} " method="POST" enctype="multipart/form-data" >
                                    {{ csrf_field() }}
    
    
                                    <input type="file" name="caste_certificate" onchange="document.getElementById('address_proof').submit();" >
                
                                    
                
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
        
        @if($profile->handicapped =='yes')
        <tr>
            <td>
                <div class="form-group">
                    <label class="required">Physically Handicapped Certificate</label>    
                </div>
                
            
            </td>
            @if($profile->physically_handicapped_certificate===null)
            
            <td id="phy_document">
                <form action="{{route('phupload')}} " method="POST" enctype="multipart/form-data" id="ph_upload">
                {{ csrf_field() }}
    
    
                <input type="file" name="physically_handicapped_certificate" onchange="document.getElementById('ph_upload').submit();">
                
                
               
                
                </form>
                


            </td>
            @else
            <td>
                <a href="{{$profile->physically_handicapped_certificate}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#ph">Delete</button>

                    <div class="modal fade" id="ph" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Physically Handicapped Certificate Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Physically Handicapped Certificate  is deleted successfully. Now You can Reupload the Physically Handicapped Certificate here</p>

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

        @if($profile->single_parent =='Yes')
        <tr>
            <td>
                <div class="form-group">
                    <label class="required">Death Certificate</label>
                </div>
            
            </td>
            @if($profile->death_certificate===null)
            <td id="single_document">
                <form action="{{route('deathupload')}} " method="POST" enctype="multipart/form-data" id="death_upload">
                {{ csrf_field() }}
    
    
                <input type="file" name="death_certificate" onchange="document.getElementById('death_upload').submit();">
                
                
                
                </form>     
                
            </td>
            @else
            <td>
                <a href="{{$profile->death_certificate}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#death">Delete</button>

                    <div class="modal fade" id="death" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Death Certificate Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Death Certificate  is deleted successfully. Now You can Reupload the Death Certificate here</p>

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
            @if($profile->domicile_certificate===null)
            
            <td id="dom_document">
                <form action="{{route('domupload')}} " method="POST" enctype="multipart/form-data" id="domicile_upload">
                {{ csrf_field() }}
    
    
                <input type="file" name="domicile_certificate" onchange="document.getElementById('domicile_upload').submit();"  >
                
                
                </form>
                <button class="btn btn-success"  value=" " id="dom_doc">Attach Later </button>     

            </td>
            @else
            <td>
                <a href="{{$profile->domicile_certificate}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#domicile_certificate">Delete</button>

                    <div class="modal fade" id="domicile_certificate" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Domicile Certificate Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Domicile Certificate  is deleted successfully. Now You can Reupload the Domicile Certificate here</p>

                                
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
            @if($profile->income_certificate===null)
            
            <td id="income_document">
                <form action="{{route('icupload')}} " method="POST" enctype="multipart/form-data" id="income_upload">
                {{ csrf_field() }}
    
    
                <input type="file" name="income_certificate" onchange="document.getElementById('income_upload').submit();"  >
               
                </form>     
               
            </td>
            @else
            <td>
                <a href="{{$profile->income_certificate}}" style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#income_certificate">Delete</button>

                    <div class="modal fade" id="income_certificate" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Income Certificate Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Income Certificate  is deleted successfully. Now You can Reupload the Income Certificate here</p>

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
            @if($profile->bank_passbook===null)
            
            <td id="bank_document">
                <form action="{{route('passbookupload')}} " method="POST" enctype="multipart/form-data" id="bank_upload">
                {{ csrf_field() }}
    
    
                <input type="file" name="bank_passbook" onchange="document.getElementById('bank_upload').submit();"  >
               
                
                </form>     
                 
            </td>
            @else
            <td>
                <a href="{{$profile->bank_passbook}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                 <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#bank_passbook">Delete</button>

                    <div class="modal fade" id="bank_passbook" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Bank Passbook Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Bank Passbook  is deleted successfully. Now You can Reupload the Bank Passbook here</p>
                                
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
                <div class="required">
                    <label class="required">College/School ID Card</label>
                </div>
            
             </td>
            @if($profile->clg_id_card===null)
            
            <td id="id_document">
                <form action="{{route('clgidupload')}} " method="POST" enctype="multipart/form-data" id="clg_id_card_upload">
                {{ csrf_field() }}
    
    
                <input type="file" name="clg_id_card"  onchange="document.getElementById('clg_id_card_upload').submit();"  >
                
                
                </form>
                <button class="btn btn-success"  value=" " id="id_doc">Attach Later </button>      

            </td>
            @else
            <td>
                <a href="{{$profile->clg_id_card}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a>
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#idcard">Delete</button>

                    <div class="modal fade" id="idcard" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2> ID Card Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your ID Card deleted successfully. Now You can Reupload the ID Card here</p>
                                
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
                    <label class="required">Bonafide</label>
                </div>
              
            </td>
            @if($profile->bonafide_certificate===null)
            
            <td id="bonafide_document">
                <form action="{{route('bonafideupload')}} " method="POST" enctype="multipart/form-data" id="bonafide_upload">
                {{ csrf_field() }}
    
    
                <input type="file" name="bonafide_certificate" onchange="document.getElementById('bonafide_upload').submit();" >
                
                
                </form>     
                 <button class="btn btn-success"  value=" " id="bonafide_doc">Attach Later </button> 
            </td>
            @else
            <td>
                <a href="{{$profile->bonafide_certificate}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#bonafide">Delete</button>

                    <div class="modal fade" id="bonafide" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2> Bonafide Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Bonafide deleted successfully. Now You can Reupload the Bonafide here</p>

                                <form action="{{route('bonafideupload')}} " method="POST" enctype="multipart/form-data">
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

            <td >
                <div class="form-group">
                    <label class="required">Admission Letter/ Allotment Letter</label>
                    <br>
                    <small>This document is compulsory required for Engineering Student</small>
                </div>
            
            </td>
            @if($profile->admission_letter===null)
            
            <td id="addm_document">
                <form action="{{route('admissionupload')}} " method="POST" enctype="multipart/form-data" id="admission_upload">
                {{ csrf_field() }}
    
    
                <input type="file" name="admission_letter" onchange="document.getElementById('admission_upload').submit();" >
                
                
                </form>     
                <button class="btn btn-success"  value=" " id="addm_doc">Attach Later </button> 
            </td>
            @else
            <td>
                <a href="{{$profile->admission_letter}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a>

                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#admission">Delete</button>

                    <div class="modal fade" id="admission" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2> Admission Letter Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Admission Letter  deleted successfully. Now You can Reupload the it here</p>

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
            @if($profile->currentyear_fees_reciept===null)
            
            <td id="fees_document">
                <form action="{{route('cfupload')}} " method="POST" enctype="multipart/form-data" id="cf_upload">
                {{ csrf_field() }}
    
    
                <input type="file" name="currentyear_fees_reciept" onchange="document.getElementById('cf_upload').submit();" >
                
                
                </form> 
                   

            </td>
            @else
            <td>
                <a href="{{$profile->currentyear_fees_reciept}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a>

                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#fees">Delete</button>

                    <div class="modal fade" id="fees" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2> Fees Reciept Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Fees Reciept is  deleted successfully. Now You can Reupload the it here</p>

                                
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
        @if($profile->course_type_id != '1')
        <tr>

            <td>
                <div class="form-group">
                    <label class="required">Class 10 Marksheet</label>    
                </div>
                
             
            </td>

            @if(($profile->class10_marksheet===null))
            
            <td id="class10_document">
                <form action="{{route('class10upload')}} " method="POST" enctype="multipart/form-data" id="class10_marksheet_upload">
                {{ csrf_field() }}
    
    
                <input type="file" name="class10_marksheet" onchange="document.getElementById('class10_marksheet_upload').submit();" >
               
                
                </form>
                    

            </td>
            @else
            <td>
                <a href="{{$profile->class10_marksheet}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#class10">Delete</button>

                    <div class="modal fade" id="class10" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2> Class 10 Marksheet Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Class 10 Marksheet is  deleted successfully. Now You can Reupload the it here</p>

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
        @if((($profile->course_type_id >3) && ($profile->course_type_id <6) ) || ($profile->course_type_id==7) )
        <tr>

            <td>
                <div class="form-group">
                    <label class="required">Class 12 Marksheet</label>
                </div>
                
             </td>
            @if($profile->class12_marksheet===null)
            
            <td id="class12_document">
                <form action="{{route('class12upload')}} " method="POST" enctype="multipart/form-data" id="class12_upload">
                {{ csrf_field() }}
    
    
                <input type="file" name="class12_marksheet" onchange="document.getElementById('class12_upload').submit();">
                
                
                </form>     
                 
            </td>
            @else
            <td>
                <a href="{{$profile->class12_marksheet}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#class12">Delete</button>

                    <div class="modal fade" id="class12" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2> Class 12 Marksheet Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Class 12 Marksheet is  deleted successfully. Now You can Reupload the it here</p>

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
        @if((($profile->course_type_id >3) && ($profile->course_type_id <6) ) || ($profile->course_type_id==7) )
        <tr>

            <td>
                <div class="form-group">
                    <label class="required">Diploma Marksheet</label>
                </div>
                
                
             </td>
            @if($profile->diploma_marksheet===null)
            
            <td id="diploma_document">
                <form action="{{route('diplomaupload')}} " method="POST" enctype="multipart/form-data" id="diploma_upload">
                {{ csrf_field() }}
    
    
                <input type="file" name="diploma_marksheet" onchange="document.getElementById('diploma_upload').submit();" > 
                
                
                </form>
                      

            </td>
            @else
            <td>
                <a href="{{$profile->diploma_marksheet}}" style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#diploma">Delete</button>

                    <div class="modal fade" id="diploma" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Diploma Marksheet Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Diploma Marksheet is  deleted successfully. Now You can Reupload the it here</p>

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
        @if($profile->course_type_id == '5')
        <tr>

            <td>
                <div class="form-group">
                    <label class="required">Graduation Marksheet (Only for PG Students)</label>
                </div>
                
            </td>
            @if($profile->graduation_marksheet===null)
            
            <td id="pg_document">
                <form action="{{route('gradupload')}} " method="POST" enctype="multipart/form-data" id="grad_upload">
                {{ csrf_field() }}
    
    
                <input type="file" name="graduation_marksheet" onchange="document.getElementById('grad_upload').submit();"  >
                
                
                
                </form>
                     

            </td>
            @else
            <td>
                <a href="{{$profile->graduation_marksheet}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#grad">Delete</button>

                    <div class="modal fade" id="grad" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Graduation Marksheet Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Graduation Marksheet is  deleted successfully. Now You can Reupload the it here</p>

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
            @if($profile->previous_marksheet===null)
            
            <td id="previous_document">
                <form action="{{route('prevupload')}} " method="POST" enctype="multipart/form-data" id="prev_upload">
                {{ csrf_field() }}
    
    
                <input type="file" name="previous_marksheet" onchange="document.getElementById('prev_upload').submit();" >
                
                
                </form>
                     

            </td>
            @else
            <td>
                <a href="{{$profile->previous_marksheet}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#previous">Delete</button>

                    <div class="modal fade" id="previous" role="dialog">
                            <div class="modal-dialog">
    
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Previous Marksheet Deleted Successfully</h2>
          
                                </div>
                            <div class="modal-body">
                                <p>Your Previous Marksheet is  deleted successfully. Now You can Reupload the it here</p>

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
            @if($profile->pan_card===null)
            
            <td id="previous_document">
                <form action="{{route('recommendation')}} " method="POST" enctype="multipart/form-data" id="pan_card">
                {{ csrf_field() }}
    
    
                <input type="file" name="pan_card" onchange="document.getElementById('pan_card').submit();" >
                
                
                </form>
                     

            </td>
            @else
            <td>
                <a href="{{$profile->pan_card}} " style="text-decoration: none;" target="_blank" class="btn btn-primary">View</a> 
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#previous">Delete</button>

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

        
        
        
        
    </tbody>
</table>

<div class="form-group ">
    @if(($profile->course_type_id==1) && (!empty($profile->previous_percentage)))
        @if(!empty($profile->photo) && !empty($profile->aadhar_card)
                                        && !empty($profile->address_proof) && !empty($profile-> income_certificate) && !empty($profile->bank_passbook)
                                        && !empty($profile->currentyear_fees_reciept) && !empty($profile->previous_marksheet))
            <a class="btn btn-danger btn-lg btn-block " href="{{route('preview')}}">Complete Profile
                </a>
        @endif

    @endif
    @if(($profile->course_type_id=== 2) || ($profile->course_type_id=== 3) || ($profile->course_type_id==8) || ($profile->course_type_id==6) ) && (!empty($profile->school_percentage)))
        @if(!empty($profile->photo) && !empty($profile->aadhar_card)
                                        && !empty($profile->address_proof) && !empty($profile-> income_certificate) && !empty($profile->bank_passbook)
                                        && !empty($profile->currentyear_fees_reciept) && !empty($profile->class10_marksheet))
                 <a class="btn btn-danger btn-lg btn-block " href="{{route('preview')}}">Complete Profile
                </a>                       
        @endif
    @endif
    @if((($profile->course_type_id=== 4)||  ($profile->course_type_id===7)) && (!empty($profile->class_12_percentage) || (!empty($profile->diploma_percentage)) ) )
                                        @if(!empty($profile->photo) && !empty($profile->aadhar_card)
                                        && !empty($profile->address_proof) && !empty($profile-> income_certificate) && !empty($profile->bank_passbook)
                                        && !empty($profile->currentyear_fees_reciept) && (!empty($profile->class12_marksheet) || !empty($profile->diploma_marksheet)))
        <a class="btn btn-danger btn-lg btn-block " href="{{route('preview')}}">Complete Profile
                </a>  

    @endif
    @endif

    @if(($profile->course_type_id=== 5) && (!empty($profile->grad_percentage)  ) ) 
                                        @if(!empty($profile->photo) && !empty($profile->aadhar_card)
                                        && !empty($profile->address_proof) && !empty($profile-> income_certificate) && !empty($profile->bank_passbook)
                                        && !empty($profile->currentyear_fees_reciept) )

        <a class="btn btn-danger btn-lg btn-block " href="{{route('preview')}}">Complete Profile
                </a>  
    @endif
    @endif
                
</div>

@endsection
@section('scripts')
<script type="text/javascript">
$("#caste_doc").on("click",caste_doc);  

function caste_doc ()
{
  
  $('#caste_document').hide();
}

$("#dom_doc").on("click",dom_doc);  

function dom_doc ()
{
  
  $('#dom_document').hide();
}

$("#id_doc").on("click",id_doc);  

function id_doc ()
{
  
  $('#id_document').hide();
}

$("#bonafide_doc").on("click",bonafide_doc);  

function bonafide_doc ()
{
  
  $('#bonafide_document').hide();
}
$("#addm_doc").on("click",addm_doc);  

function addm_doc ()
{
  
  $('#addm_document').hide();
}
</script>


@endsection