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
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#create-todo">Create Item</a></li>
            </ul>
            <div class="tab-content">
            <div id="active" class="tab-pane fade active show">
            <div class="table-responsive">

		              <to-do :todos='{!! json_encode($default["todo_not"]) !!}'></to-do>
		            </div>
		            
		        </div>

		    <div id="complete" class="tab-pane fade">
            <div class="table-responsive">

		               <to-do-complete :todosdone='{!! json_encode($default["todo"]) !!}'></to-do-complete>

		            </div>
		            
		        </div>

		        <div id="create-todo" class="tab-pane fade">
            <div class="table-responsive">
            	<create-todo-form></create-todo-form>
            </div>
        </div>


		    </div>

		   
            	
			</div>
        </div>


	
    </div>

    
@endsection