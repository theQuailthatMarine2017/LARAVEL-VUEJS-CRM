@extends('admin.app')
@section('title') Dashboard @endsection
@section('content')

    <div class="row">
        
        <div class="col-sm-6">
                <div class="dashboard-widgets">
                	<h1 class='title is-4'>Projects Created Monthly</h1>
                <div class="id">
			    	<latest-activity :months='{!! json_encode($default["bar-chart"]) !!}' ></latest-activity>
			    </div>
			</div>
				 
            
        </div>

        <div class="col-sm-6">

        	<div class="dashboard-widgets">
        		<h2 class='title is-4'>Project Completion Insight</h2>
        	<div class="id">
			    	<inprogess-pie></inprogess-pie>
			    </div>
			</div>
        	
        </div>

    </div>

    <div class="col-sm-13">
        	<div class="dashboard-widgets">
        	<h1 class='title is-4'>Your Tasks Overview</h1>
            <ul class="nav nav-pills">
            	<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#newtasks">Ongoing Tasks</a></li>
                
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">Completed Tasks</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#createtask">Create Task</a></li>
                

            </ul>
            <div class="tab-content">
            	<div id="newtasks" class="tab-pane fade active show">

		            <div class="table-responsive">
		              <div id="app">
		              	
			              <stats-chart :mytasks='{!! json_encode($default["tasks"]) !!}'></stats-chart>
			              
			              
			            </div>
            </div>
         </div>

               <!-- Modal -->
		

         <div id="profile" class="tab-pane fade">
            <div id="app">
            	<completed-task :completedtasks='{!! json_encode($default["completed_tasks"]) !!}'></completed-task>
		            </div>
                 </div>

            <div id="createtask" class="tab-pane fade">

            	<div id="app">
            	
            <create-task-form :staffmember='{!! json_encode($default["staff"]) !!}'></create-task-form>
            	
        		</div>

             </div>

                 

             </div>
             
				
			</div>
        </div>

            <div class="col-sm-13">
        	<div class="dashboard-widgets">
			<h1 class='title is-4'>To Do Items Overview</h1>
			<ul class="nav nav-pills">
            	<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#active">To Do List</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#complete">Completed</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#complete">Create Item</a></li>
            </ul>
            <div class="tab-content">
            <div id="active" class="tab-pane fade active show">
            <div class="table-responsive">

		              <to-do :todos='{!! json_encode($default["todo_not"]) !!}'></to-do>
		            </div>
		            
		        </div>


		        <div class="modal fade" id="addItem">
					  <div class="modal-dialog modal-notify modal-info">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-body">
					        <div class="form-group">
							    <h4>Create To Do Item</h4>
							    <input type="email" class="form-control" id="email" placeholder="Enter Item Name" class="text-center">
							  </div>
					      </div>
					      <div class="modal-footer">
					      	
					      	<div class="pop-up-btn">
							  <a href="#" class="btn btn-success" data-dismiss="modal">Add Item</a>
							  <a href="#" class="btn btn-danger" data-dismiss="modal">Cancel</a>
							</div>
						
					      </div>
					    </div>

					  </div>
					</div>

		    <div id="complete" class="tab-pane fade">
            <div class="table-responsive">
		              <table class="table">
		                <thead>
		                  <tr>
		                    <th>Title</th>
		                    <th>Date Added</th>
		                    <th>Date Completed</th>
		                  </tr>
		                </thead>
		                <tbody>
		                  @foreach($default['todo'] as $todo => $item)
		                  @if (!is_null($item->datefinished))
		                  <tr>
		                  
		                    <td>{{$item->description}}</td>
		                    <td>{{Carbon\Carbon::parse($item->dateadded)->toFormattedDateString()}}</td>
		                    <td>{{Carbon\Carbon::parse($item->datefinished)->toFormattedDateString()}}</td>
		                    
		                  </tr>
		                  @endif
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