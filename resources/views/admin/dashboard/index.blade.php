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
        
        <div class="col-sm-4">
                <div class="dashboard-widgets">
                <h4>Total Projects</h4>
                 <div>
				  <div>
				  	<h2> {{ $default['total_projects']->count() }}</h2>
				  </div>
				</div>
				 
            </div>
        </div>
        <div class="col-sm-4">
        	<div class="dashboard-widgets">
            <h4>Projects In Progress</h4>
                 <div>
				  <div>
				    <h2> {{ $default['in_progress']->count() }}</h2>
				  </div>
				</div>
        </div>


    </div>
    <div class="col-sm-4">
        	<div class="dashboard-widgets">
            <h4>Completed Projects</h4>
                 <div>
				  <div>
				    <h2>{{ $default['complete']->count() }}</h2>
				  </div>
				</div>
        </div>


    </div>
    

    <div class="col-sm-12">
        	<div class="dashboard-widgets">
        	<div class="bs-components">
        	
            <h4>My Tasks </h4>
            <ul class="nav nav-tabs">
            	<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#newtasks">Tasks</a></li>
                
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
		                @foreach( $default['tasks'] as $task => $value)
		                
		                  <tr>
		                    <td> {{ $value[0]->name }}</td>
		                    <td> {{ $value['from'] }} </td>
		                    <td> {{ Carbon\Carbon::parse($value[0]->dateadded)->toFormattedDateString() }} </td>
		                    @if (!is_null($value[0]->datefinished))
		                    <td><button type="button" class="btn btn-warning btn-sm">Start Task</button></td>
		                    @elseif (is_null($value[0]->datefinished))
		                    <td><button type="button" class="btn btn-success btn-sm">Complete</button></td>
		                    @endif
		                  </tr>
		                  
		                  @endforeach
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
		                  @foreach( $default['tasks'] as $task => $value)
		                  @if (!is_null($value[0]->datefinished))
		                  <tr>
		                    <td>{{ $value[0]->name }}</td>
		                    <td>{{ $value['from'] }}</td>
		                    <td>{{ Carbon\Carbon::parse($value[0]->startdate)->toFormattedDateString() }}</td>
		                    <td> {{ Carbon\Carbon::parse($value[0]->datefinished)->toFormattedDateString() }} </td>
		                  </tr>
		                  @endif  
		                  @endforeach
		                  @if (is_null($value[0]->datefinished))
		                  <tr>
		                  	<td> You Have Not Completed Any Task! </td>
		                  </tr>
		                  @endif
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
				@foreach ($default['activity']->take(10) as $activity)
					<li>
						@if($activity->description_key == 'project_activity_added_team_member')
							<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b> {{ $activity->fullname }}</b> Added Team Member.</p>
						 @elseif($activity->description_key == 'project_activity_created')
						<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b>{{ $activity->fullname }}</b> Created New Project.</p>
						@elseif($activity->description_key == 'project_activity_task_marked_complete')
						<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b>{{ $activity->fullname }}</b> Marked Task As Complete.</p>
						@elseif($activity->description_key == 'project_activity_task_marked_uncomplete')
						<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b>{{ $activity->fullname }}</b> Changed Task From Complete to Uncomplete.</p>
						@elseif($activity->description_key == 'not_project_activity_task_status_changed')
						<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b>{{ $activity->fullname }}</b> Changed Task Status.</p>
						@elseif($activity->description_key == 'project_activity_created_discussion')
						<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b>{{ $activity->fullname }}</b> Created Discussion.</p>
						@elseif($activity->description_key == 'project_activity_commented_on_discussion')
						<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b>{{ $activity->fullname }}</b> Commented On Discussion.</p>
						@elseif($activity->description_key == 'project_activity_new_task_assignee')
						<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b>{{ $activity->fullname }}</b> Assigned A New Task.</p>
						@elseif($activity->description_key == 'project_activity_uploaded_file')
						<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b>{{ $activity->fullname }}</b> Uploaded File.</p>
						@elseif($activity->description_key == 'project_activity_updated')
						<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b>{{ $activity->fullname }}</b> Updated Project.</p>
						@elseif($activity->description_key == 'project_activity_task_assignee_removed')
						<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b>{{ $activity->fullname }}</b> Removed Task.</p>
						@elseif($activity->description_key == 'project_activity_project_file_removed')
						<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b>{{ $activity->fullname }}</b> Removed File From Project.</p>
						@elseif($activity->description_key == 'project_marked_as_finished')
						<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b>{{ $activity->fullname }}</b> Marked Project As Complete.</p>
						@elseif($activity->description_key == 'project_activity_marked_all_tasks_as_complete')
						<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b>{{ $activity->fullname }}</b> Marked All Tasks Complete.</p>
						@elseif($activity->description_key == 'project_activity_new_task_attachment')
						<a target="_blank" href="https://www.totoprayogo.com/#">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</a><p><b>{{ $activity->fullname }}</b> New Attachment For Task.</p>
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