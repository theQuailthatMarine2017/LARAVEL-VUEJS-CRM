@extends('admin.app')
@section('title') Projects @endsection
@section('content')


<div class="row">

	<div class="col-sm-12">
		
		<div class="tile">
		<div class="tile-title-w-btn">
              <h3 class="title">Projects Overview</h3>
              @if(Auth::user()->admin == 0)
              <p><a class="btn btn-primary icon-btn" href="https://select2.github.io/examples.html" target="_blank"><i></i>Create Project</a></p>
              @endif
            </div>

            <ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a class="nav-link active" href="#" data-toggle="tab">All Projects</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#" data-toggle="tab">In Progress</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#" data-toggle="tab">Complete</a>
			  </li>
			</ul>


        </div>
		

	</div>

</div>

@endsection