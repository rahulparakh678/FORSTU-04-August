<?php

use App\Http\Controllers\HomeController;

Route::view('demo','demo')->name('demo');
Route::PUT('/users/hide/{id}', 'Admin\ProfilesController@hide');
Route::get('/apcoer','HompageController@apcoer')->name('apcoer');
Route::GET('/college_register','HompageController@college_register')->name('college_register');
Route::get('/sndcoe','HompageController@sndcoe')->name('sndcoe');

Route::get('/paidplanstudents','Admin\ProfilesController@paidplanstudents')->name('paidplanstudents');


Route::get('/bitbarshi','HompageController@bitbarshi')->name('bitbarshi');
Route::get('/msscet','HompageController@msscet')->name('msscet');

Route::get('/aboutus','HompageController@aboutus')->name('aboutus');
Route::get('/roshni','HompageController@roshni')->name('roshni');
Route::get('/rpcoe','HompageController@rpcoe')->name('rpcoe');
Route::get('/success','HompageController@success')->name('success');
Route::get('/kasturbai','HompageController@kasturbai')->name('kasturbai');
Route::get('/vidyaseva','HompageController@vidyaseva')->name('vidyaseva');
Route::get('/mcn','HompageController@mcn')->name('mcn');
Route::get('/dddpc','HompageController@dddpc')->name('dddpc');
Route::get('/ktpcop','HompageController@ktpcop')->name('ktpcop');
Route::get('/ktpcomba','HompageController@ktpcomba')->name('ktpcomba');
Route::get('/ktpcet','HompageController@ktpcomba')->name('ktpcet');
Route::get('/ktpccs','HompageController@ktpccs')->name('ktpccs');
Route::get('/skncoe','HompageController@skncoe')->name('skncoe');
Route::get('/svpmcoe','HompageController@svpmcoe')->name('svpmcoe');
Route::get('/svpmcop','HompageController@svpmcop')->name('svpmcop');
Route::get('/svpmioe','HompageController@svpmioe')->name('svpmioe');
Route::get('/svpmiom','HompageController@svpmiom')->name('svpmiom');
Route::get('/svpmccsce','HompageController@svpmccsce')->name('svpmccsce');
Route::get('/svpmccsce','HompageController@svpmccsce')->name('svpmccsce');
Route::get('/giop','HompageController@giop')->name('giop');
Route::get('/gcop','HompageController@gcop')->name('gcop');
Route::get('/gcoe','HompageController@gcoe')->name('gcoe');
Route::get('/rcpit','HompageController@rcpit')->name('rcpit');
Route::get('/hrpiop','HompageController@hrpiop')->name('hrpiop');
Route::get('/hrpiper','HompageController@hrpiper')->name('hrpiper');
Route::get('/rcpiper','HompageController@rcpiper')->name('rcpiper');
Route::get('/rcpiop','HompageController@rcpiop')->name('rcpiop');
Route::get('/ktpcop','HompageController@ktpcop')->name('ktpcop');
Route::get('/sanjeevani','HompageController@sanjeevani')->name('sanjeevani');
Route::get('/contactus','HompageController@contactus')->name('contactus');
Route::get('/ulf','HompageController@ulf');
Route::get('/coep','HompageController@coep');
Route::get('/sveriengg','HompageController@sveriengg');
Route::get('/sverimba','HompageController@sverimba');
Route::get('/sveripoly','HompageController@sveripoly');
Route::get('/sveribpharm','HompageController@sveribpharm');
Route::get('/sveridpharm','HompageController@sveridpharm');
Route::get('/vedant','HompageController@vedant');
Route::get('/ismrp','HompageController@ismrp');
Route::get('/famt','HompageController@famt');
Route::get('/dcpgri','HompageController@dcpgri');
Route::get('/educo','HompageController@educo');
Route::get('/rsml','HompageController@rsml');
Route::get('/amp','HompageController@amp');
Route::get('/exec','HompageController@executive');
Route::get('/sparsha','HompageController@sparsha');
Route::get('/spti','HompageController@spti');
Route::get('/yug','HompageController@yug');
Route::get('/edifice','HompageController@edifice');
Route::get('/isbm','HompageController@isbm');
Route::get('/vjti','HompageController@vjti');
Route::get('/spce','HompageController@spce');
Route::get('/wce','HompageController@wce');
Route::get('/sandipani','HompageController@sandipani');
Route::get('/adcet','HompageController@adcet');
Route::get('/adcdp','HompageController@adcdp');
Route::get('/adcbp','HompageController@adcbp');
Route::get('/adamc','HompageController@adamc');
Route::get('/mwf','HompageController@muman');
Route::get('/sw','HompageController@sw');
Route::get('/vijay','HompageController@vijay');
Route::get('/ms','HompageController@ms');
Route::get('/hrpawc','HompageController@hrpawc');
Route::get('/jrrsml','HompageController@jrrsml');
Route::get('/tarpan','HompageController@tarpan');
Route::get('/at','HompageController@at');
Route::get('/mcon','HompageController@mcon');
Route::get('/svip','HompageController@svip');
Route::get('/armietdp','HompageController@armietdp');
Route::get('/armietengg','HompageController@armietengg');
Route::get('/snjbengg','HompageController@snjbengg');
Route::get('/snjbpharmacy','HompageController@snjbpharmacy');
Route::get('/snjbacs','HompageController@snjbacs');
Route::get('/vapm','HompageController@vapm');
Route::get('/scop','HompageController@scop');
Route::get('/aissmscoe','HompageController@aissmscoe');
Route::get('/aissmsioit','HompageController@aissmsioit');
Route::get('/aissmsioit','HompageController@aissmsioit');

Route::get('/jrmmcp','HompageController@jrmmcp');
Route::get('/srmmcp','HompageController@srmmcp');
Route::get('/nwimsr','HompageController@nwimsr');
Route::get('/aissmspoly','HompageController@aissmspoly');
Route::get('/aissmschmct','HompageController@aissmschmct');
Route::get('/aissmsiom','HompageController@aissmsiom');
Route::get('/dkkkpiti','HompageController@dkkkpiti');
Route::get('/dkkkpmim','HompageController@dkkkpmim');
Route::get('/dkkkpjrcls','HompageController@dkkkpjrcls');
Route::get('/dkkkpbpp','HompageController@dkkkpbpp');
Route::get('/dkkkpcop','HompageController@dkkkpcop');
Route::get('/scoev','HompageController@scoev');
Route::get('/siom','HompageController@siom');
Route::get('/sfjpc','HompageController@sfjpc');
Route::get('/moderncoe','HompageController@moderncoe');
Route::get('/indiapost','HompageController@indiapost');
Route::get('/coap','HompageController@coap');
Route::get('/coarc','HompageController@coarc');
Route::get('/mpim','HompageController@mpim');
Route::get('/sgrspoly','HompageController@sgrspoly');
Route::get('/sgrscop','HompageController@sgrscop');
Route::get('/sucop','HompageController@sucop');
Route::get('/sucdip','HompageController@sucdip');
Route::get('/coph','HompageController@coph');
Route::get('/coem','HompageController@coem');
Route::get('/iotm','HompageController@iotm');
Route::get('/iterm','HompageController@iterm');
Route::get('/lch','HompageController@lch');
Route::get('/amc','HompageController@amc');
Route::get('/rmacs','HompageController@rmacs');
Route::get('/bgc','HompageController@bgc');
Route::get('/bgjc','HompageController@bgjc');
Route::get('/wcacs','HompageController@wcacs');
Route::get('/jrwcacs','HompageController@jrwcacs');
Route::get('/awcacs','HompageController@awcacs');
Route::get('/jrawcacs','HompageController@jrawcacs');
Route::get('/apc','HompageController@apc');
Route::get('/sbc','HompageController@sbc');
Route::get('/jramc','HompageController@jramc');
Route::get('/eon','HompageController@eon');
Route::get('/jrca','HompageController@jrca');
Route::get('/smvjc','HompageController@smvjc');
Route::get('/vssjc','HompageController@vssjc');
Route::get('/lmvjc','HompageController@lmvjc');
Route::get('/ssvjc','HompageController@ssvjc');
Route::get('/pesjc','HompageController@pesjc');
Route::get('/pnjc','HompageController@pnjc');
Route::get('/sstjc','HompageController@sstjc');
Route::get('/njc','HompageController@njc');
Route::get('/ssvjcb','HompageController@ssvjcb');
Route::get('/ssjcb','HompageController@ssjcb');
Route::get('/smvs','HompageController@smvs');
Route::get('/scsjc','HompageController@scsjc');
Route::get('/mgvjc','HompageController@mgvjc');
Route::get('/snjc','HompageController@snjc');
Route::get('/swjc','HompageController@swjc');
Route::get('/nesjc','HompageController@nesjc');
Route::get('/nessjc','HompageController@nessjc');
Route::get('/skjc','HompageController@skjc');
Route::get('/smvujc','HompageController@smvujc');
Route::get('/spjca','HompageController@spjca');
Route::get('/nesjcc','HompageController@nesjcc');
Route::get('/skvk','HompageController@skvk');
Route::get('/sbjc','HompageController@sbjc');
Route::get('/shjc','HompageController@shjc');
Route::get('/cydpson','HompageController@cydpson');
Route::get('/profilesexport','Admin\ProfilesController@profilesexport')->name('profilesexport');
Route::get('/usersexport','Admin\ProfilesController@usersexport')->name('usersexport');

Route::get('notifications','Admin\ProfilesController@notifications')->name('notifications');
Route::get('/invoice','Student\ProfileController@invoice')->name('invoice');



Route::get('/demotable','Admin\ProfilesController@demotable')->name('demotable');
/*Route::get('/send-email',function(){
    $details=[
        'title'=>'Mail from FORSTU',
        'body'=>'This is the testing email',
    ];
    \Mail::to('rahul@forstu.co')->send(new App\Mail\StudentRegistered($details));

    echo "Email has been sent";
});*/
//Route::get('/send-email','HomeController@sendemail')->name('send-email');
//Route::get('/studentemail','HomeController@studentemail')->name('studentemail');
Route::get('stumail',[HomeController::class,'stumail']);
Route::POST('interviewschedule','ScholarshipProvider\InterviewController@index')->name('interviewschedule');
Route::POST('allstatus','Admin\ProfilesController@allstatus')->name('allstatus');

Route::get('documents','Admin\DocumentsController@index')->name('documents.index');
Route::POST('storedocname','Admin\DocumentsController@storedocname')->name('storedocname');
Route::POST('updocname/{id}','Admin\DocumentsController@updocname')->name('updocname');
Route::GET('deletedocument/{id}','Admin\DocumentsController@deletedocument')->name('deletedocument');

Route::get('studenpartnerindex','Admin\Studentpartnercontroller@index')->name('studenpartnerindex');


 Route::get('studstatus','Admin\ProfilesController@scholarshipstatus')->name('studstatus');
 Route::get('smsstatus','Admin\ProfilesController@smsstatus')->name('smsstatus');
 Route::GET('/updatescholarshipstatus/{id}','Admin\ProfilesController@updatescholarshipstatus')->name('updatescholarshipstatus');
 Route::DELETE('deletescholarshipstatus/{id}','Admin\ProfilesController@deletescholarshipstatus')->name('deletescholarshipstatus');
 Route::get('/editstudstatus','Admin\ProfilesController@editscholarshipstatus')->name('editstudstatus');
Route::get('/editstudentprofile/{id}','Admin\ProfilesController@edit')->name('editstudentprofile');
 Route::POST('storestatus','Admin\ProfilesController@storestatus')->name('storestatus');
Route::POST('storesmsstatus','Admin\ProfilesController@storesmsstatus')->name('storesmsstatus');


Route::POST('/updatestatus/{id}','Admin\ProfilesController@updatestatus')->name('updatestatus');
Route::POST('searchstatus','Admin\ProfilesController@searchstatus')->name('searchstatus');

Route::get('showapp/{id}','Admin\ScholarshipsController@showapplications')->name('showapp');

Route::GET('export','Admin\ProfilesController@export')->name('export');
Route::GET('profileremarks','Admin\ProfilesController@profileremarks')->name('profileremarks');
Route::POST('uploadUsers','Admin\ProfilesController@uploadUsers')->name('uploadUsers');

Route::POST('studentprofileimport','Admin\ProfilesController@studentprofileimport')->name('studentprofileimport');


Route::GET('profileimport','Admin\ProfilesController@profileimport')->name('profileimport');
Route::get('/sdetails/{id}','HompageController@showsdetails')->name('scholarshipdetails'); 
//Route::POST('/upload','HompageController@upload')->name('upload');
Route::get('/achievers','HompageController@achievers')->name('achievers');
Route::get('/services','HompageController@services')->name('services');
Route::POST('/enquiry','Admin\EnquiryController@create')->name('enquiry');
Route::get('enquiryform','Admin\EnquiryController@index')->name('enquiryform');
Route::delete('deleteenquiry/{id}','Admin\EnquiryController@destroy')->name('deleteenquiry');
Route::get('/terms','HompageController@terms')->name('terms');
Route::get('/privacy','HompageController@privacy')->name('privacy');
Route::get('/disclaimer','HompageController@disclaimer')->name('disclaimer');
Route::get('active','HompageController@activescholarships')->name('activescholarships');
Route::get('course/get_coursetype','HompageController@getcourses')->name('getcourses');
Route::get('/faq','HompageController@faq')->name('faq');

Route::get('/','HompageController@index');

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});






//Auth::routes(['register' => true]);
// Admin

Auth::routes(['verify' => true]);

Route::GET('filterview','Admin\ProfilesController@filterview')->name('filterview');
Route::GET('edit_course/{id}','Admin\StudentCourseController@edit')->name('edit_course');
Route::GET('/studentcourses','Admin\StudentCourseController@index')->name('student_courses');
Route::GET('/student_course_create','Admin\StudentCourseController@create')->name('student_course_create');
Route::POST('student_course_store','Admin\StudentCourseController@store')->name('student_course_store');
Route::POST('student_course_update/{id}','Admin\StudentCourseController@update')->name('student_course_update');

Route::GET('sfcprojectsindex','Admin\SFCScholarshipProjectController@sfcprojectsindex')->name('sfcprojectsindex');
Route::POST('sfcprojectuserassignment','Admin\SFCScholarshipProjectController@sfcprojectuserassignment')->name('sfcprojectuserassignment');


Route::GET('sfcpayments','Admin\ProfilesController@sfcpayments')->name('sfcpayments');

Route::GET('paid/{id}','Admin\ProfilesController@paid')->name('paid');
Route::GET('sfcpaid/{id}','Admin\ProfilesController@sfcpaid')->name('sfcpaid');
Route::GET('sfcshowprofile/{id}','Admin\ProfilesController@sfcshowprofile')->name('sfcshowprofile');
Route::DELETE('deletesfcentry/{id}','Admin\ProfilesController@deletesfcentry')->name('deletesfcentry');



Route::GET('profile_completed/{id}','Admin\ProfilesController@profile_completed')->name('profile_completed');
Route::GET('kyc_completed/{id}','Admin\ProfilesController@kyc_completed')->name('kyc_completed');
Route::GET('freeplan','Admin\ProfilesController@freeplan')->name('freeplan');

Route::POST('storeremarks/{id}','Admin\ProfilesController@storeremarks')->name('storeremarks');

Route::GET('sfcstu/{id}','Admin\ProfilesController@sfcstu')->name('sfcstu');
Route::GET('uptodate/{id}','Admin\ProfilesController@uptodate')->name('uptodate');

Route::GET('activeprofile/{id}','Admin\ProfilesController@activeprofile')->name('activeprofile');
Route::GET('inactiveprofile/{id}','Admin\ProfilesController@inactiveprofile')->name('inactiveprofile');

Route::get('scholarship-providers/sfc-ngo-create', 'Admin\ScholarshipProvidersController@sfccreate')->name('sfccreate');
Route::POST('scholarship-providers/sfc-ngo', 'Admin\ScholarshipProvidersController@sfcstore')->name('sfcstore');
Route::POST('/updatestudentdetails/{id}','Admin\ProfilesController@updatedetails')->name('updatestudentdetails');
Route::POST('save_data','Admin\ScholarshipProvidersController@save_data')->name('save_data');
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Castes
    Route::delete('castes/destroy', 'CasteController@massDestroy')->name('castes.massDestroy');
    Route::resource('castes', 'CasteController');

    // Coursetypes
    Route::delete('coursetypes/destroy', 'CoursetypeController@massDestroy')->name('coursetypes.massDestroy');
    Route::resource('coursetypes', 'CoursetypeController');

    // Courses
    Route::delete('courses/destroy', 'CoursesController@massDestroy')->name('courses.massDestroy');
    Route::resource('courses', 'CoursesController');

    // Categories
    Route::delete('categories/destroy', 'CategoryController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoryController');

    // Scholarship Providers

   
    Route::delete('scholarship-providers/destroy', 'ScholarshipProvidersController@massDestroy')->name('scholarship-providers.massDestroy');
    Route::resource('scholarship-providers', 'ScholarshipProvidersController');

    // Scholarships

    Route::delete('scholarships/destroy', 'ScholarshipsController@massDestroy')->name('scholarships.massDestroy');
    Route::post('scholarships/media', 'ScholarshipsController@storeMedia')->name('scholarships.storeMedia');
    Route::post('scholarships/ckmedia', 'ScholarshipsController@storeCKEditorImages')->name('scholarships.storeCKEditorImages');
    Route::resource('scholarships', 'ScholarshipsController');

   

    // Profiles
    Route::delete('profiles/destroy', 'ProfilesController@massDestroy')->name('profiles.massDestroy');
    Route::resource('profiles', 'ProfilesController');



    // Scholarship Achievers
    Route::delete('scholarship-achievers/destroy', 'ScholarshipAchieversController@massDestroy')->name('scholarship-achievers.massDestroy');
    Route::post('scholarship-achievers/media', 'ScholarshipAchieversController@storeMedia')->name('scholarship-achievers.storeMedia');
    Route::post('scholarship-achievers/ckmedia', 'ScholarshipAchieversController@storeCKEditorImages')->name('scholarship-achievers.storeCKEditorImages');
    Route::resource('scholarship-achievers', 'ScholarshipAchieversController');

     // Ticketcategories
    Route::delete('ticketcategories/destroy', 'TicketcategoriesController@massDestroy')->name('ticketcategories.massDestroy');
    Route::resource('ticketcategories', 'TicketcategoriesController');

    // Tickets
    Route::delete('tickets/destroy', 'TicketsController@massDestroy')->name('tickets.massDestroy');
    Route::resource('tickets', 'TicketsController');

    // Faq Categories
    Route::delete('faq-categories/destroy', 'FaqCategoryController@massDestroy')->name('faq-categories.massDestroy');
    Route::resource('faq-categories', 'FaqCategoryController');

    // Faq Questions
    Route::delete('faq-questions/destroy', 'FaqQuestionController@massDestroy')->name('faq-questions.massDestroy');
    Route::resource('faq-questions', 'FaqQuestionController');
    
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }
});



Route::get('student_documents','Student\ProfileController@student_documents')->name('student_documents');
Route::get('/collegesociety','CollegeSociety\Home@index')->name('collegesociety');
Route::POST('/storecollegesociety','CollegeSociety\Home@storecollegesociety')->name('storecollegesociety');

Route::POST('/storecollege','CollegeSociety\Home@storecollege')->name('storecollege');
Route::get('/homecollegesociety','CollegeSociety\Home@home')->name('home.collegesociety');
Route::get('/homecollege','CollegeSociety\Home@college')->name('home.college');
Route::get('/listcollege','CollegeSociety\Home@listcollege')->name('listcollege');
Route::Get('/college_detail/{ref_code}','CollegeSociety\Home@college_detail')->name('college_detail');


Route::get('/students','Student\HomeController@index')->name('students.home');

Route::POST('studentsview','Student\HomeController@studentsview')->name('studentsview');

Route::get('/preview','Student\ProfileController@preview')->name('preview');
//Student Profile Controller
Route::group(['prefix' => 'student','namespace' => 'Student'], function(){

Route::get('/createprofile','ProfileController@create')->name('createprofile');
Route::get('/personaldetails','ProfileController@personaldetails')->name('personaldetails');
Route::POST('/details','ProfileController@updatedetails')->name('details');
Route::POST('/servicepreview','ProfileController@servicedetails')->name('servicepreview');


Route::POST('/storepersonal','ProfileController@storepersonal')->name('storepersonal');
Route::GET('/storepersonal','ProfileController@loadfamily')->name('storepersonaldetails');
Route::POST('/storefamily','ProfileController@storefamily')->name('storefamily');
Route::POST('/storbasicdetails','ProfileController@storbasicdetails')->name('storbasicdetails');
Route::GET('/storefamily','ProfileController@loadadd')->name('loadadddetails');

Route::POST('/storeaddress','ProfileController@storeaddress')->name('storeaddress');
Route::GET('/storeaddress','ProfileController@loadbank')->name('loadbank');

Route::POST('/storebankdetails','ProfileController@storebankdetails')->name('storebankdetails');
Route::GET('/storebankdetails','ProfileController@loadcourse')->name('loadcourse');

Route::POST('/storecoursedetails','ProfileController@storecoursedetails')->name('storecoursedetails');
Route::GET('/storecoursedetails' ,'ProfileController@loadeducationaldetails')->name('loadeducationaldetails');

Route::get('/editprofile/{id}','ProfileController@edit')->name('editprofile');
Route::POST('updateprofile/{id}','ProfileController@update')->name('updateprofile');
ROUTE::POST('storedetails','ProfileController@storedetails')->name('storedetails');
ROUTE::GET('storessc','ProfileController@storessc')->name('storessc');
ROUTE::POST('storessc','ProfileController@storesscdetails')->name('storesscdetails');

Route::get('course/get_coursetype','ProfileController@getcourse')->name('getcourse');
Route::get('course/get_stuentcourse','ProfileController@getstudentcourse')->name('getstudentcourse');

Route::get('course/set_coursetype','ProfileController@setcourse')->name('setcourse');
Route::get('course/setstudentcourse','ProfileController@setstudentcourse')->name('setstudentcourse');






Route::get('documents','ProfileController@documents')->name('documents');
Route::POST('aadharupload','ProfileController@aadharupload')->name('aadharupload');

Route::POST('panupload','ProfileController@panupload')->name('panupload');
Route::POST('casteupload','ProfileController@casteupload')->name('casteupload');
Route::POST('phupload','ProfileController@phupload')->name('phupload');
Route::POST('deathupload','ProfileController@deathupload')->name('deathupload');
Route::POST('photoupload','ProfileController@photoupload')->name('photoupload');
Route::POST('paadharupload','ProfileController@paadharupload')->name('paadharupload');

Route::POST('addproofupload','ProfileController@addproofupload')->name('addproofupload');
Route::POST('domupload','ProfileController@domupload')->name('domupload');
Route::POST('icupload','ProfileController@icupload')->name('icupload');
Route::POST('passbookupload','ProfileController@passbookupload')->name('passbookupload');
Route::POST('clgidupload','ProfileController@clgidupload')->name('clgidupload');
Route::POST('bonafideupload','ProfileController@bonafideupload')->name('bonafideupload');
Route::POST('admissionupload','ProfileController@admissionupload')->name('admissionupload');
Route::POST('cfupload','ProfileController@cfupload')->name('cfupload');
Route::POST('hfupload','ProfileController@hfupload')->name('hfupload');
Route::POST('class10upload','ProfileController@class10upload')->name('class10upload');
Route::POST('class12upload','ProfileController@class12upload')->name('class12upload');
Route::POST('diplomaupload','ProfileController@diplomaupload')->name('diplomaupload');
Route::POST('gradupload','ProfileController@gradupload')->name('gradupload');
Route::POST('prevupload','ProfileController@prevupload')->name('prevupload');
Route::POST('recommendation','ProfileController@recommendation')->name('recommendation');
Route::POST('ration_card','ProfileController@ration_card')->name('ration_card');
Route::POST('feestructureupload','ProfileController@feestructureupload')->name('feestructureupload');



//sfc

Route::get('preview','ProfileController@sfc')->name('sfc');



 //Student Search & Apply Scholarship

Route::get('/myscholarship','HomeController@myscholarship')->name('myscholarship');
Route::get('/allscholarships','HomeController@allscholarships')->name('allscholarships');


Route::get('/details/{id}','HomeController@showdetails')->name('showdetails');


//Support Controller
Route::get('/support','TicketsController@index')->name('support');

Route::get('/createquery','TicketsController@create')->name('createquery');
Route::POST('storequery','TicketsController@store')->name('storequery');

Route::get('viewresponse/{id}','TicketsController@show')->name('response');
});

 Route::get('showapplications/{id}','ScholarshipProvider\SetupscholarshipController@showapplications')->name('showapplications');

Route::get('filteredview/{id}','ScholarshipProvider\SetupscholarshipController@filteredview')->name('filteredview');

Route::get('f1view/{id}','ScholarshipProvider\SetupscholarshipController@f1view')->name('f1view');
Route::get('f2view/{id}','ScholarshipProvider\SetupscholarshipController@f2view')->name('f2view');
Route::get('f3view/{id}','ScholarshipProvider\SetupscholarshipController@f3view')->name('f3view');
Route::get('f4view/{id}','ScholarshipProvider\SetupscholarshipController@f4view')->name('f4view');
Route::get('f5view/{id}','ScholarshipProvider\SetupscholarshipController@f5view')->name('f5view');
Route::get('f6view/{id}','ScholarshipProvider\SetupscholarshipController@f6view')->name('f6view');
Route::get('f7view/{id}','ScholarshipProvider\SetupscholarshipController@f7view')->name('f7view');
Route::get('f8view/{id}','ScholarshipProvider\SetupscholarshipController@f8view')->name('f8view');
Route::get('f9view/{id}','ScholarshipProvider\SetupscholarshipController@f9view')->name('f9view');
Route::get('f10view/{id}','ScholarshipProvider\SetupscholarshipController@f10view')->name('f10view');
Route::get('f11view/{id}','ScholarshipProvider\SetupscholarshipController@f11view')->name('f11view');
Route::get('f12view/{id}','ScholarshipProvider\SetupscholarshipController@f12view')->name('f12view');
Route::get('f13view/{id}','ScholarshipProvider\SetupscholarshipController@f13view')->name('f13view');
Route::get('f14view/{id}','ScholarshipProvider\SetupscholarshipController@f14view')->name('f14view');
Route::get('f15view/{id}','ScholarshipProvider\SetupscholarshipController@f15view')->name('f15view');
Route::get('f16view/{id}','ScholarshipProvider\SetupscholarshipController@f16view')->name('f16view');
Route::get('f17view/{id}','ScholarshipProvider\SetupscholarshipController@f17view')->name('f17view');
Route::get('f18view/{id}','ScholarshipProvider\SetupscholarshipController@f18view')->name('f18view');
Route::get('f19view/{id}','ScholarshipProvider\SetupscholarshipController@f19view')->name('f19view');
Route::get('f20view/{id}','ScholarshipProvider\SetupscholarshipController@f20view')->name('f20view');
Route::get('f21view/{id}','ScholarshipProvider\SetupscholarshipController@f21view')->name('f21view');

Route::get('analyticsview/{id}','ScholarshipProvider\SetupscholarshipController@analyticsview')->name('analyticsview');

Route::get('/scholarshipproviders','ScholarshipProvider\HomeController@index')->name('providers.home');


Route::get('/sfcngostudentlist','SFCNGO\HomeController@sfc_student_list')->name('sfc_student_list');

Route::get('sfcfilteredview','SFCNGO\HomeController@sfcfilteredview')->name('sfcfilteredview');

Route::get('/sfcngo','SFCNGO\HomeController@index')->name('sfc.home');

Route::GET('/sfcngo/applications','SFCNGO\HomeController@sfcapplications')->name('sfcapplications');
Route::POST('sfcsearchstatus','SFCNGO\HomeController@searchstatus')->name('sfcsearchstatus');
Route::GET('profileshow1/{id}','SFCNGO\HomeController@profileshow1')->name('profileshow1');

Route::group(['prefix'=>'provider','namespace'=>'ScholarshipProvider'],function(){

     Route::delete('setupscholarships/destroy', 'SetupscholarshipController@massDestroy')->name('massDestroy');
    Route::post('setupscholarships/media', 'SetupscholarshipController@storeMedia')->name('setupscholarships.storeMedia');
    Route::post('setupscholarships/ckmedia', 'SetupscholarshipController@storeCKEditorImages')->name('setupscholarships.storeCKEditorImages');
    Route::resource('setupscholarships', 'SetupscholarshipController');

    Route::get('promotion','SetupscholarshipController@promotion')->name('promotion');
    Route::get('setup','SetupscholarshipController@index')->name('setup');
    Route::get('listscheme','SetupscholarshipController@listscheme')->name('listscheme');
     Route::get('createschol','SetupscholarshipController@create')->name('createscholarship');
       Route::POST('createschol','SetupscholarshipController@store')->name('storescholarship');

    Route::get('show/{id}','SetupscholarshipController@show')->name('showscholarship');
    Route::get('edit/{id}','SetupscholarshipController@edit')->name('editscholarship');
    Route::POST('edit/{id}','SetupscholarshipController@update')->name('updatescholarship');
    Route::DELETE('delete/{id}','SetupscholarshipController@destroy')->name('deletescholarship');

    Route::get('showp/{id}/{scholarship_id}','SetupscholarshipController@showprofile')->name('showprofile');

    Route::get('profileshow/{id}','SetupscholarshipController@profileshow')->name('profileshow');
    Route::get('showapplications/{id}','SetupscholarshipController@showapplications')->name('showapplications');



});
Route::POST('applications/{id}','Student\HomeController@apply')->name('apply');
Route::post('/scholarship/check-documents/{id}','Student\HomeController@checkDocuments')->name('scholarship.check-documents');

Route::get('/shortlisted/{id}','ScholarshipProvider\HomeController@Shortlised')->name('Shortlised');
Route::get('/funddisbursed/{id}','ScholarshipProvider\HomeController@funddisbursed')->name('funddisbursed');

Route::get('/rejected/{id}','ScholarshipProvider\HomeController@Rejected')->name('Rejected');
Route::get('/awarded/{id}','ScholarshipProvider\HomeController@Awarded')->name('Awarded');
Route::get('scholarships/applications','Admin\ScholarshipsController@applicant')->name('viewapplicant');
Route::get('/sco/{id}','Admin\ScholarshipsController@sco')->name('sco');
Route::get('appliedscholarship','Student\HomeController@appliedscholarship')->name('appliedscholarship');

Route::get('/allscholarship','HompageController@scholarships')->name('allscholarship');
//Route::get('/events/{event}', 'Admin\EventsController@show')->name('events.show');

Route::feeds();
Route::get('/scholarshipfeed','Admin\EventsController@index')->name('scholarshipfeed');
Route::POST('feeds.store','Admin\EventsController@store')->name('feeds.store');
Route::GET('/feeds.edit/{id}','Admin\EventsController@edit')->name('feeds.edit');
Route::POST('/updatefeedstatus/{id}','Admin\EventsController@updatefeedstatus')->name('updatefeedstatus');
//Route::GET('/feed/{event}','Admin\EventsController@show')->name('events.show');



