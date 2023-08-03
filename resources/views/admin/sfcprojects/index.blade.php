@extends('layouts.admin')
@section('content')

<div class="container p-0">

    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-plus"></i>&nbsp Create New Project
    </button>
    <!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      		<form method="POST" action="{{ route('sfcprojectuserassignment') }}" enctype="multipart/form-data">
      			@csrf
      			<div class="modal-body">
      				<label>Enter Scholarship Project Name</label>
       	 			<input type="text" name="scholarship_project_name" class="form-control"  placeholder="Scholarship Project Name">
       	 			<label>Select Account Manager</label>
       	 			<select class="form-control select2 {{ $errors->has('userids') ? 'is-invalid' : '' }}" name="userids[]" id="userids" multiple required>
                    @foreach($userids as $id => $userid)
                        <option value="{{ $id }}" {{ in_array($id, old('userids', [])) ? 'selected' : '' }}>{{$userid }}</option>
                    @endforeach
                </select>
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        			<button type="submit" class="btn btn-primary">Save changes</button>
      			</div>
      		</form>
    		</div>
  		</div>
	</div>
	<h1 class="h3 mb-3">Projects</h1>

	<div class="row">
		<div class="col-12 col-md-6 col-lg-3">
			<div class="card">

				<div class="card-header px-4 pt-4">
					<div class="card-actions float-right">
						<div class="dropdown show">
							<a href="#" data-toggle="dropdown" data-display="static">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
							</a>

							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</div>
					</div>
					<h5 class="card-title mb-0">{{$sfcproject->scholarship_project_name}}</h5>
					<div class="badge bg-success my-2">Finished</div>
				</div>
				<div class="card-body px-4 pt-2">
					<p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque
						sed ipsum.</p>

					<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Avatar" width="28" height="28">
					<img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle mr-1" alt="Avatar" width="28" height="28">
					<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Avatar" width="28" height="28">
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item px-4 pb-4">
						<p class="mb-2 font-weight-bold">Progress <span class="float-right">100%</span></p>
						<div class="progress progress-sm">
							<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		
</div>
<style type="text/css">
	
.card-subtitle, .card-title {
    font-weight: 400;
}
.card-title {
    font-size: .875rem;
    color: #495057;
}
.card {
    margin-bottom: 24px;
    box-shadow: 0 0 0.875rem 0 rgba(33,37,41,.05);
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: initial;
    border: 0 solid transparent;
    border-radius: .25rem;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}
.card-header:first-child {
    border-radius: .25rem .25rem 0 0;
}
.card-header {
    border-bottom-width: 1px;
}
.pb-0 {
    padding-bottom: 0!important;
}
.card-header {
    padding: 1rem 1.25rem;
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 0 solid transparent;
}
</style>
@endsection