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


        //QUERING TO DO ITEMS FOR LOGGED IN USER
        $done_to_do = [];
        $not_done = [];
        $to_do = DB::table('tbltodoitems')->where('staffid', $data)->get();


        foreach ($to_do as $item) {
            # code...
            if (is_null($item->datefinished)) {
                # code...
                array_push($not_done, $item);

            } elseif (!is_null($item->datefinished)){
                # code...
                array_push($done_to_do, $item);
            }
        }


        //GETTING ALL PROJECTS
        $total_projects = DB::table('tblprojects')->get();

        //Quering all projects per month
        // QUERY PROJECTS BY MONTH
        $jan_projects = [];
        $feb_projects = [];
        $mar_projects = [];
        $apr_projects = [];
        $may_projects = [];
        $jun_projects = [];
        $jul_projects = [];
        $aug_projects = [];
        $sep_projects = [];
        $oct_projects = [];
        $nov_projects = [];
        $dec_projects = [];


        foreach ($total_projects as $project) {
            if (Carbon::parse($project->project_created)->format('F') == 'January') {
                # code...
                array_push($jan_projects, $project);
            
            } elseif (Carbon::parse($project->project_created)->format('F') == 'February') {
                # code...
                array_push($feb_projects, $project);

            } elseif (Carbon::parse($project->project_created)->format('F') == 'March') {
                # code...
                array_push($mar_projects, $project);

            } elseif (Carbon::parse($project->project_created)->format('F') == 'April') {
                # code...
                array_push($apr_projects, $project);

            } elseif (Carbon::parse($project->project_created)->format('F') == 'May') {
                # code...
                array_push($may_projects, $project);

            } elseif (Carbon::parse($project->project_created)->format('F') == 'June') {
                # code...
                array_push($jun_projects, $project);
            } elseif (Carbon::parse($project->project_created)->format('F') == 'July') {
                # code...
                array_push($jul_projects, $project);

            } elseif (Carbon::parse($project->project_created)->format('F') == 'August') {
                # code...
                array_push($aug_projects, $project);
            } elseif (Carbon::parse($project->project_created)->format('F') == 'September') {
                # code...
                array_push($sep_projects, $project);

            } elseif (Carbon::parse($project->project_created)->format('F') == 'October') {
                # code...
                array_push($oct_projects, $project);

            } elseif (Carbon::parse($project->project_created)->format('F') == 'November') {
                # code...
                array_push($nov_projects, $project);

            } elseif (Carbon::parse($project->project_created)->format('F') == 'December') {
                # code...
                array_push($dec_projects, $project);
            }

        }

        $tasks_assigned = DB::table('tblstafftaskassignees')->where('staffid', $data)->get();

        $completed_projects = DB::table('tblprojects')->whereNotNull('date_finished')->get();

        $in_progress_projects = DB::table('tblprojects')->whereNull('date_finished')->get();

    	$project_activity = DB::table('tblprojectactivity')->latest()->get();

        $staff_mem = [];

        $names = [];

        $all_staff = DB::table('tblstaff')->get();


        foreach ($all_staff as $staff) {
            # code...
            $member = $staff->firstname.' '.$staff->lastname;

            $staff->fullnames = $member;
        }

        $details = [];
        $asigner = [];
        $completed = [];

        foreach ($tasks_assigned as $tasks) {

            $task_details = DB::table('tblstafftasks')->where('id', $tasks->taskid)->get();

            $assigner_first = DB::table('tblstaff')->where('staffid', $tasks->assigned_from)->value('firstname');

            $assigner_last = DB::table('tblstaff')->where('staffid', $tasks->assigned_from)->value('lastname');

            $task_details[0]->fullnames = $assigner_first.' '.$assigner_last;

            foreach ($task_details as $task) {
                # code...
            }

            if (is_null($task_details[0]->datefinished)) {

                array_push($details , $task);

            } elseif (!is_null($task_details[0]->datefinished)) {
                # code...
                array_push($completed , $task);
            }
            
            

        }


        $bar_chart_data = [count($jan_projects),count($feb_projects),count($mar_projects),count($apr_projects),count($may_projects),count($jun_projects),count($jul_projects),count($aug_projects),count($sep_projects),count($oct_projects),count($nov_projects),count($dec_projects)];

    	$not_member = 'You Are Not Invloved In Any Projects!';
        $test = 'Another data';

        return view('admin.dashboard.index')->with('default', ['not_member' => $not_member, 'activity' => $project_activity, 'time' => $current_time, 'total_projects' => $total_projects, 'complete' => $completed_projects, 'in_progress' => $in_progress_projects, 'todo' => $done_to_do,'todo_not'=>$not_done, 'tasks' => $details,'number' => $tasks_assigned, 'task_from' => $asigner, 'all_tasks' => $all_tasks,'calendar' => $calendar_details,'bar-chart'=>$bar_chart_data,'staff'=>$all_staff,'completed_tasks'=>$completed]);

    	
    }


}
