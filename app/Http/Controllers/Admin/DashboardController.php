<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index() {

    	$data = Auth::user()->staffid;

    	$members_projects = DB::table('tblprojectmembers')->where('staff_id', $data)->value('project_id');

    	$current_time = Carbon::now('Africa/Nairobi');

        $to_do = DB::table('tbltodoitems')->where('staffid', $data)->get();

        $total_projects = DB::table('tblprojects')->get();

        $tasks_assigned = DB::table('tblstafftaskassignees')->where('staffid', $data)->get();

        $completed_projects = DB::table('tblprojects')->whereNotNull('date_finished')->get();

        $in_progress_projects = DB::table('tblprojects')->whereNull('date_finished')->get();

    	$project_activity = DB::table('tblprojectactivity')->latest()->get();

        // TASKS - IF RECIEVED OBJECTS FOR USER MORE THAN ONE COUNT LOOP THROUGH TASKS ASSIGNED TO GET STAFF IF OF ADDED_FROM FIELD

        $details = [];
        $asigner = [];

        foreach ($tasks_assigned as $tasks) {

            $task_details = DB::table('tblstafftasks')->where('id', $tasks->taskid)->get();

            $assigner = DB::table('tblstaff')->where('staffid', $tasks->assigned_from)->value('firstname');

            $task_details['from'] = $assigner;

            array_push($details , $task_details);
            

        }

        
        

    	if (!empty($members_projects)) {

    		if ($members_projects->count() > 1) {

    			foreach ($$members_projects as $projects) {

    				$project = DB::table('tblprojects')->where('id', $projects->project_id)->value('name');
    			
    			}

    		} else {

    			$project = $project = DB::table('tblprojects')->where('id', $members_projects->project_id)->value('name');

    			return view('admin.dashboard.index', $project);

    		}

    	} else {

    		$not_member = 'You Are Not Invloved In Any Projects!';
    		$test = 'Another data';

    		return view('admin.dashboard.index')->with('default', ['not_member' => $not_member, 'activity' => $project_activity, 'time' => $current_time, 'total_projects' => $total_projects, 'complete' => $completed_projects, 'in_progress' => $in_progress_projects, 'todo' => $to_do, 'tasks' => $details,'number' => $tasks_assigned, 'task_from' => $asigner]);
    	}

    	
    }


}
