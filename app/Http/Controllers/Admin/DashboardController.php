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

    	$current_time = Carbon::now();

    	$project_activity = DB::table('tblprojectactivity')->get()->take(5);

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

    		return view('admin.dashboard.index')->with('default', ['not_member' => $not_member, 'activity' => $project_activity, 'time' => $current_time]);
    	}

    	
    }


}
