@extends('admin.app')
@section('title') Dashboard @endsection
@section('content')

    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> My Dashboard </h1>
            <p>{{ $default['time']->toDayDateTimeString()}}</p>
        </div>
    </div>
    <div class="row">
        
        <div class="col-sm-3">
                <div class="dashboard-widgets">
                <h4>Overall Projects</h4>
                 <div>
				  <div>
				  	<h5>18</h5>
				  </div>
				</div>
				 
            </div>
        </div>
        <div class="col-sm-3">
        	<div class="dashboard-widgets">
            <h4>In Progress</h4>
                 <div>
				  <div>
				    <h5>5</h5>
				  </div>
				</div>
        </div>


    </div>
    <div class="col-sm-3">
        	<div class="dashboard-widgets">
            <h4>Completed</h4>
                 <div>
				  <div>
				    <h5>13</h5>
				  </div>
				</div>
        </div>


    </div>
    <div class="col-sm-3">
        	<div class="dashboard-widgets">
            <h4>To Do Items</h4>
                 <div>
				  <div>
				    <h5>3</h5>
				  </div>
				</div>
        </div>
    </div>

    <div class="col-sm-12">
        	<div class="dashboard-widgets">
        	<div class="bs-components">
            <h4>My Tasks</h4>
            <ul class="nav nav-tabs">
            	<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#newtasks">New Tasks</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#home">Ongoing</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">Completed</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#overview">Overview</a></li>
            </ul>
            <div class="tab-content">

            	<div id="newtasks" class="tab-pane fade active show">

		            <div class="table-responsive">
		              <table class="table">
		                <thead>
		                  <tr>
		                    <th>Task Title</th>
		                    <th>Assigned By</th>
		                    <th>Date Created</th>
		                    <th>Actions</th>
		                  </tr>
		                </thead>
		                <tbody>
		                  <tr>
		                    <td>Add Google Docs Functionality</td>
		                    <td>Eric Jackson</td>
		                    <td>12/10/2019</td>
		                    <td><button type="button" class="btn btn-warning btn-sm">Start Task</button></td>
		                  </tr>
		                  <tr>
		                    <tr>
		                    <td>Add RSS Fetch Fetch Functionality</td>
		                    <td>Eric Jackson</td>
		                    <td>12/10/2019</td>
		                    <td><button type="button" class="btn btn-warning btn-sm">Start Task</button></td>
		                  </tr>
		                  </tr>
		                </tbody>
		              </table>
		            </div>
                 </div>
            
            	<div id="home" class="tab-pane fade">

		            <div class="table-responsive">
		              <table class="table">
		                <thead>
		                  <tr>
		                    <th>Task Title</th>
		                    <th>Assigned By</th>
		                    <th>Start Date</th>
		                    <th>Actions</th>
		                  </tr>
		                </thead>
		                <tbody>
		                  <tr>
		                    <td>Modify CRM and Add New Features</td>
		                    <td>Eric Jackson</td>
		                    <td>12/10/2019</td>
		                    <td><button type="button" class="btn btn-success btn-sm">Complete</button></td>
		                  </tr>
		                  <tr>
		                    <tr>
		                    <td>Add Chat Functionality To Other Web Project</td>
		                    <td>Eric Jackson</td>
		                    <td>12/10/2019</td>
		                    <td><button type="button" class="btn btn-success btn-sm">Complete</button></td>
		                  </tr>
		                  </tr>
		                </tbody>
		              </table>
		            </div>
                 </div>

                 <div id="profile" class="tab-pane fade">
            <div class="table-responsive">
		              <table class="table">
		                <thead>
		                  <tr>
		                    <th>Task Title</th>
		                    <th>Assigned By</th>
		                    <th>Start Date</th>
		                    <th>Completed</th>
		                  </tr>
		                </thead>
		                <tbody>

		                  <tr>
		                    <td>Learn Laravel Framework</td>
		                    <td>Eric Jackson</td>
		                    <td>12/07/2019</td>
		                    <td>2/09/2019</td>
		                  </tr>
		                  
		                   <tr>
		                    <td>Learn Vue.js Framework</td>
		                    <td>Eric Jackson</td>
		                    <td>12/4/2019</td>
		                    <td>12/11/2019</td>
		                  </tr>

		                  <tr>
		                    <td>Attend Workshop Meeting and Get SDKs</td>
		                    <td>Eric Jackson</td>
		                    <td>10/7/2019</td>
		                    <td>12/11/2019</td>
		                  </tr>

		                  <tr>
		                    <td>Relax and Enjoy Life</td>
		                    <td>Eric Jackson</td>
		                    <td>20/4/2019</td>
		                    <td>12/10/2019</td>
		                  </tr>
		               
		                </tbody>
		              </table>
		            </div>
                 </div>

                 <div id="overview" class="tab-pane fade">

                 	<div class="tile">
			            <h3 class="tile-title">Support Requests</h3>
			            <div class="embed-responsive embed-responsive-16by9">
			              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
			            </div>
			          </div>
		            
                 </div>

             </div>
             
				</div>
			</div>
        </div>

    
    <div class="col-sm-6">
        	<div class="dashboard-widgets">
            <h4>Latest Projects Activity</h4>
            <div class="container mt-5 mb-5">
	<div class="row">
		<div class="col">
			<ul class="timeline">
				@foreach ($default['activity']->take(20) as $activity)
					<li>
						@if($activity->description_key == 'project_activity_added_team_member')
							<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b> {{ $activity->fullname }}</b> Added Team Member.</p>
						 @elseif($activity->description_key == 'project_activity_created')
						<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b>{{ $activity->fullname }}</b> Created New Project.</p>
						@endif
					</li>
					@endforeach
			</ul>
		</div>
	</div>
</div>
				</div>
        </div>

    

    <div class="col-sm-6">
        	<div class="dashboard-widgets">
            <h4>Task Calendar</h4>
                 
				</div>
        </div>
    </div>
    
@endsection