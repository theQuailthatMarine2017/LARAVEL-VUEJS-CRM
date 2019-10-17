<?php

namespace App\Http\Controllers\Admin;

use Calendar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    //
    public function index() {

    	$all_projects = DB::table('tblprojects')->get();

    	$projects = [];

    	foreach ($all_projects as $all => $project) {
    		
    		$assigned_first = DB::table('tblstaff')->where('staffid', $project->addedfrom)->value('firstname');

    		$assigner_last = DB::table('tblstaff')->where('staffid', $project->addedfrom)->value('lastname');

    		$client = DB::table('tblclients')->where('userid', $project->clientid)->value('company');

    		$added_by = $assigned_first.' '.$assigner_last;

    		$project->addedfrom = $added_by;

    		$project->clientid = $client;	

    	}

    	return view('admin.projects.overview')->with('all',['projects'=> $all_projects]);
    }
}
