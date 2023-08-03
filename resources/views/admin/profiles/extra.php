@if( !empty($profile->aadharnumber) && empty($profile->annual_income) && empty($profile->permanent_state) && empty($profile->bank_ifsc))
                                    <h6>15% Completed</h6>

                                

                                @elseif(!empty($profile->aadharnumber) && !empty($profile->annual_income) && empty($profile->permanent_state) && empty($profile->bank_ifsc))
                                    <h6>30% Completed</h6>
                                

                                @elseif(!empty($profile->aadharnumber) && !empty($profile->annual_income) && !empty($profile->permanent_state) && empty($profile->bank_ifsc) )
                                    <h6>45% Completed</h6>

                                @elseif(!empty($profile->aadharnumber) && !empty($profile->annual_income) && !empty($profile->permanent_state) && !empty($profile->bank_ifsc) && empty($profile->course_type_id) )
                                    <h6>60% Completed</h6>

                                @elseif(!empty($profile->aadharnumber) && !empty($profile->annual_income) && !empty($profile->permanent_state) && !empty($profile->bank_ifsc) && !empty($profile->course_type_id) && empty($profile->school_percentage) && empty($profile->class_12_percentage)  && empty($profile->diploma_percentage) && empty($profile->grad_percentage))
                                    
                                    @if(($profile->course_type_id=== 1) && (!empty($profile->previous_percentage)))

                                        @if(!empty($profile->photo) && !empty($profile->aadhar_card)
                                        && !empty($profile->address_proof) && !empty($profile-> income_certificate) && !empty($profile->bank_passbook)
                                        && !empty($profile->currentyear_fees_reciept) && !empty($profile->previous_marksheet))
                                            <h6><span class="badge badge-success">100% Completed</span></h6>
                                        @else
                                            <h6>90% Completed</h6>
                                        @endif
                                    

                                    @elseif(($profile->course_type_id=== 1) && (empty($profile->previous_percentage)))

                                        <h6>80% Completed</h6>

                                    
                                    @else
                                        <h6>70% Completed</h6>
                                    @endif

                                @elseif(!empty($profile->aadharnumber) && !empty($profile->annual_income) && !empty($profile->permanent_state) && !empty($profile->bank_ifsc) && !empty($profile->course_type_id) && !empty($profile->school_percentage) && empty($profile->class_12_percentage)  && empty($profile->diploma_percentage) && empty($profile->grad_percentage))

                                    @if(($profile->course_type_id=== 2) && (!empty($profile->school_percentage)))
                                        @if(!empty($profile->photo) && !empty($profile->aadhar_card)
                                        && !empty($profile->address_proof) && !empty($profile-> income_certificate) && !empty($profile->bank_passbook)
                                        && !empty($profile->currentyear_fees_reciept) && !empty($profile->previous_marksheet))
                                            <h6><span class="badge badge-success">100% Completed</span></h6>
                                        @else
                                            <h6>90% Completed</h6>
                                        @endif

                                    @elseif(($profile->course_type_id=== 2)) && (empty($profile->school_percentage)))
                                    <h6>80% Completed</h6>

                                    @elseif(($profile->course_type_id=== 3) && (!empty($profile->school_percentage)))
                                        @if(!empty($profile->photo) && !empty($profile->aadhar_card)
                                        && !empty($profile->address_proof) && !empty($profile-> income_certificate) && !empty($profile->bank_passbook)
                                        && !empty($profile->currentyear_fees_reciept) && !empty($profile->previous_marksheet))
                                            <h6><span class="badge badge-success">100% Completed</span></h6>
                                        @else
                                            <h6>90% Completed</h6>
                                        @endif
                                    @elseif(($profile->course_type_id=== 3) && (empty($profile->school_percentage)))
                                        <h6>80% Completed</h6>
                                    @else
                                        <h6>70% Completed</h6>
                                    @endif

                                


                                @elseif(!empty($profile->aadharnumber) && !empty($profile->annual_income) && !empty($profile->permanent_state) && !empty($profile->bank_ifsc) && !empty($profile->course_type_id) && !empty($profile->school_percentage) && (!empty($profile->class_12_percentage) || !empty($profile->diploma_percentage) )&& empty($profile->grad_percentage))

                                    @if(($profile->course_type_id=== 4) && (!empty($profile->class_12_percentage) || (!empty($profile->diploma_percentage)) ) )
                                        @if(!empty($profile->photo) && !empty($profile->aadhar_card)
                                        && !empty($profile->address_proof) && !empty($profile-> income_certificate) && !empty($profile->bank_passbook)
                                        && !empty($profile->currentyear_fees_reciept) && !empty($profile->previous_marksheet))
                                            <h6><span class="badge badge-success">100% Completed</span></h6>
                                        @else
                                            <h6>90% Completed</h6>
                                        @endif

                                    @elseif(($profile->course_type_id=== 4)  && (empty($profile->class_12_percentage) || (empty($profile->diploma_percentage)) ) )
                                    <h6>80% Completed</h6>
                                    @else
                                        <h6>70% Completed</h6>
                                    @endif

                                @elseif(!empty($profile->aadharnumber) && !empty($profile->annual_income) && !empty($profile->permanent_state) && !empty($profile->bank_ifsc) && !empty($profile->course_type_id) && !empty($profile->school_percentage) && (!empty($profile->class_12_percentage) || !empty($profile->diploma_percentage) )&& !empty($profile->grad_percentage))

                                    @if(($profile->course_type_id=== 5) && (!empty($profile->grad_percentage)  ) ) 
                                        @if(!empty($profile->photo) && !empty($profile->aadhar_card)
                                        && !empty($profile->address_proof) && !empty($profile-> income_certificate) && !empty($profile->bank_passbook)
                                        && !empty($profile->currentyear_fees_reciept) && !empty($profile->previous_marksheet))
                                            <h6><span class="badge badge-success">100% Completed</span></h6>
                                        @else
                                            <h6>90% Completed</h6>
                                        @endif
                                    @elseif(($profile->course_type_id=== 5) && (empty($profile->grad_percentage)  ) ) )
                                        <h6>80% Completed</h6>
                                    @else
                                        <h6>80% Completed</h6>
                                    @endif

                                @else
                                    <h6><span class="badge badge-danger">Incomplete Profile</span></h6>
                                @endif