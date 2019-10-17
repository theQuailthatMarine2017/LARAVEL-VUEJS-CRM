@extends('admin.app')
@section('title') Tasks @endsection
@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<br><script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

<div class="row">

	<div class="col-sm-12">
		
		<div class="tile">
		<div class="tile-title-w-btn">
              
              <p><a class="btn btn-primary icon-btn" href="https://select2.github.io/examples.html" target="_blank"><i></i>Create Task</a></p>
            </div>
            <div class="tabs-space">
            <ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a class="nav-link active" href="#allprojects" data-toggle="tab">All Task</a>
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
				<table id="taskTable" class="table table-hover table-bordered">
                <thead>
                  <tr>
                  	<th>ID</th>
                    <th>Task Title</th>
                    <th>Task Description</th>
                    <th>Date Added</th>
                    <th>Assigned To</th>
                    <th>Added From</th>
                  </tr>
                </thead>
                <tbody>
                @foreach( $all['tasks'] as $task)
                  <tr>
                  	<td>{{ $task->id}}</td>
                    <td>{{ $task->name}}</td>
                    <td class="col-md-3">{{ $task->description}}</td>
                    <td>{{ Carbon\Carbon::parse($task->dateadded)->toFormattedDateString()}}</td>
                    <td>{{ $task->addedfor}}</td>
                    <td>{{ $task->addedfrom}}</td>
                  </tr>
                  @endforeach
              	</tbody>
          		</table>
          	</div>
          	</div>

          	<div id="inprogress" class="tab-pane fade">
				<div class="table-responsive">
				<table id="taskTable" class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Task Title</th>
                    <th>Task Description</th>
                    <th>Assigned To</th>
                    <th>Added From</th>
                    <th>Date Started</th>
                  </tr>
                </thead>
                <tbody>
                @foreach( $all['tasks'] as $task)
                @if (is_null($task->datefinished))
                  <tr>
                    <td>{{ $task->id}}</td>
                    <td>{{ $task->name }}</td>
                    <td style="width: 25%">{{ $task->description}}</td>
                    <td>{{ $task->addedfor }}</td>
                    <td>{{ $task->addedfrom}} </td>
                    <td>{{ Carbon\Carbon::parse($task->startdate)->toFormattedDateString()}} </td>
                  </tr>
                 @endif
                 @endforeach
              	</tbody>
          		</table>
          	</div>
          	</div>

          	<div id="complete" class="tab-pane fade">
				<div class="table-responsive">
				<table id="taskTable" class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Task Title</th>
                    <th>Task Description</th>
                    <th>Assigned To</th>
                    <th>Added From</th>
                    <th>Date Started</th>
                    <th>Date Completed</th>
                  </tr>
                </thead>
                <tbody>
                @foreach( $all['tasks'] as $task)
                @if (!is_null($task->datefinished))
                  <tr>
                    <td>{{ $task->id}}</td>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->description}}</td>
                    <td>{{ $task->addedfor }}</td>
                    <td>{{ $task->addedfrom}}</td>
                    <td>{{ Carbon\Carbon::parse($task->startdate)->toFormattedDateString()}}</td>
                    <td>{{ Carbon\Carbon::parse($task->datefinished)->toFormattedDateString()}}</td>
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

    	$('#taskTable').DataTable();

	} );
</script>


@endsection