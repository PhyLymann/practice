@extends('admin.layout.master')

    @section('content')

    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">

				    <div class="col-auto">
			            <h3 class="app-page-title mb-0">Users</h3>
				    </div>
                    
				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">
								    <form class="table-search-form row gx-1 align-items-center">
					                    <div class="col-auto">
					                        <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
					                    </div>
					                    <div class="col-auto">
					                        <button type="submit" class="btn app-btn-secondary">Search</button>
					                    </div>
					                </form>
					                
							    </div><!--//col-->
						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->
				
				
				<div class="tab-content" id="orders-table-tab-content">
			        
					    
							        <table class="table app-table-hover mb-0 text-left my-auto">
										<thead>
											<tr>
												<th class="cell">ID</th>
												<th class="cell">Username</th>                               
                                                <th class="cell">Email</th>
												<th class="cell">Actions</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($users as $user)
                                                <tr>
                                                    <td class="cell">{{$user->id}}</td>
                                                    <td class="cell"><span class="truncate">{{$user->name}}</span></td>                                                 
                                                    <td class="cell"><span class="truncate">{{$user->email}}</span></td>
                                                    <td class="cell">
                                                        <a href="/admin/user/{{$user->id}}/edit" class="btn btn-success">Edit</a>&nbsp;
                                                        <a href="/admin/user/{{$user->id}}/delete" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
										</tbody>
									</table>
                    </div>	      
                </div>
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	

    @endsection