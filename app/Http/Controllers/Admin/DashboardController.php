<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Calendar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index() {

    	$data = Auth::user()->staffid;

        $all_tasks = DB::table('tblstafftasks')->get();

        $task_list = [];

        foreach ($all_tasks as $list => $event) {
            # code...
            $task_list[] = Calendar::event(
                $event->name,
                true,
                new \DateTime($event->startdate),
                new \DateTime($event->duedate.' +1 day'),$event->id
            );
        }

        $calendar_details = Calendar::addEvents($task_list)->setCallbacks([
              'themeSystem' => '"bootstrap4"',
              'eventRender' => 'function(event, element) {
                element.popover({
                  animation: true,
                  html: true,
                  content: $(element).html(),
                  trigger: "hover"
                  });
                }'
              ]);

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

            $assigner_first = DB::table('tblstaff')->where('staffid', $tasks->assigned_from)->value('firstname');

            $assigner_last = DB::table('tblstaff')->where('staffid', $tasks->assigned_from)->value('lastname');

            $task_details['from_first'] = $assigner_first;

            $task_details['from_last'] = $assigner_last;

            array_push($details , $task_details);
            

        }

    	$not_member = 'You Are Not Invloved In Any Projects!';
        $test = 'Another data';

        return view('admin.dashboard.index')->with('default', ['not_member' => $not_member, 'activity' => $project_activity, 'time' => $current_time, 'total_projects' => $total_projects, 'complete' => $completed_projects, 'in_progress' => $in_progress_projects, 'todo' => $to_do, 'tasks' => $details,'number' => $tasks_assigned, 'task_from' => $asigner, 'all_tasks' => $all_tasks,'calendar' => $calendar_details]);

    	
    }


}
