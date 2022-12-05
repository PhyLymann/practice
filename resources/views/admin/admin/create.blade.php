@extends('admin.layout.master')

@section('content')

    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
			
		    <div class="container-xl">		

                <h1 class="app-page-title">Create Admin</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <form class="settings-form" method="post" action="/admin/admin/store/create">
                                    @csrf
								    <div class="mb-3">
									    <label for="setting-input-1" class="form-label">Name:</label>
									    <input type="text" class="form-control"  id="setting-input-1" name="name" required>
									</div>

                                    <div class="mb-3">
									    <label for="setting-input-2" class="form-label">Email:</label>
									    <input type="email" class="form-control"  id="setting-input-2" name="email" required>
									</div>

                                    <div class="mb-3">
									    <label for="setting-input-3" class="form-label">Password:</label>
									    <input type="password" class="form-control" id="setting-input-3" name="password" required>
									</div>
                                        
                                    <div class="mb-3">
									    <label for="setting-input-4" class="form-label">Confirm Password:</label>
									    <input type="password" class="form-control" id="setting-input-4" name="password_confirmation" required>
									</div>
									<button type="submit" class="btn btn-primary">Create Admin</button>
							    </form>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
            </div>
        </div>
    </div>
@endsection