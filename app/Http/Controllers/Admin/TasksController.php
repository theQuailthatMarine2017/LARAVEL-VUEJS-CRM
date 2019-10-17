<?php

namespace App\Http\Controllers\Admin;


use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    //
    public function index() {

    	$all_tasks = DB::table('tblstafftasks')->get();

    	foreach ($all_tasks as $all => $task) {

    		$assignees = DB::table('tblstafftaskassignees')->where('taskid', $task->id)->value('staffid');

    		$assigned_to_first = DB::table('tblstaff')->where('staffid', $assignees)->value('firstname');

    		$assigned_to_last = DB::table('tblstaff')->where('staffid', $assignees)->value('lastname');


    		$assigned_first = DB::table('tblstaff')->where('staffid', $task->addedfrom)->value('firstname');

    		$assigned_last = DB::table('tblstaff')->where('staffid', $task->addedfrom)->value('lastname');

    		$task_assigned_to = $assigned_to_first.' '.$assigned_to_last;

    		$task_assigned_from = $assigned_first.' '.$assigned_last;

    		$task->addedfrom = $task_assigned_from;

    		$task->addedfor = $task_assigned_to;
    	}

    	return view('admin.tasks.tasks')->with('all',['tasks'=> $all_tasks]);
    }
}
