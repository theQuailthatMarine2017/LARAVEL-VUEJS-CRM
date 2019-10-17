@extends('admin.app')
@section('title') Projects @endsection
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<br><script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

<div class="row">

	<div class="col-sm-12">
		
		<div class="tile">
		<div class="tile-title-w-btn">
              
              @if(Auth::user()->admin == 0)
              <p><a class="btn btn-primary icon-btn" href="https://select2.github.io/examples.html" target="_blank"><i></i>Create Project</a></p>
              @endif
            </div>
            <div class="tabs-space">
            <ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a class="nav-link active" href="#allprojects" data-toggle="tab">All Projects</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#inprogress" data-toggle="tab">In Progress</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#complete" data-toggle="tab">Completed</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#" data-toggle="tab">Statistics</a>
			  </li>
			</ul>
			</div>

			<div class="tab-content">

			<div id="allprojects" class="tab-pane fade active show">
				<div class="table-responsive">
				<table id="sampleTable" class="table table-hover table-bordered">
                <thead>
                  <tr>
                  	<th>ID</th>
                    <th>Project Title</th>
                    <th>Company</th>
                    <th>Added From</th>
                    <th>Project Cost</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($all['projects'] as $project)
                  <tr>
                  	<td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->clientid }}</td>
                    <td>{{ $project->addedfrom }}</td>
                    <td>{{ $project->project_cost }}</td>
                    <td>{{ $project->status }}</td>
                  </tr>
                  @endforeach
              	</tbody>
          		</table>
          	</div>
          	</div>

          	<div id="inprogress" class="tab-pane fade">
				<div class="table-responsive">
				<table id="sampleTable" class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th>Project Title</th>
                    <th>Company</th>
                    <th>Added From</th>
                    <th>Start Date</th>
                    <th>Project Cost</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($all['projects'] as $project)
                @if (is_null($project->date_finished))
                  <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->clientid }}</td>
                    <td>{{ $project->addedfrom }}</td>
                    <td>{{ $project->start_date}}</td>
                    <td>{{ $project->project_cost }}</td>
                    <td>{{ $project->status }}</td>
                  </tr>
                  @endif
                  @endforeach
              	</tbody>
          		</table>
          	</div>
          	</div>

          	<div id="complete" class="tab-pane fade">
				<div class="table-responsive">
				<table id="sampleTable" class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th>Project Title</th>
                    <th>Company</th>
                    <th>Added From</th>
                    <th>Start Date</th>
                    <th>Date Completed</th>
                    <th>Project Cost</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($all['projects'] as $project)
                @if (!is_null($project->date_finished))
                  <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->clientid }}</td>
                    <td>{{ $project->addedfrom }}</td>
                    <td>{{ $project->start_date}}</td>
                    <td>{{ $project->date_finished }}</td>
                    <td>{{ $project->project_cost }}</td>
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

<script>
	$(document).ready(function() {

    	$('#sampleTable').DataTable();

	} );
</script>



@endsection