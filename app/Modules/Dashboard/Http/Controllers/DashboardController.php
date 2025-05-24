<?php namespace App\Http\Controllers;

use App\Abstracts\ModuleManager;
use App\Entities\JoinTeam;
use App\Entities\Opening;
use App\Entities\Service;
use App\Http\Controllers\Controller;
use DB;

class DashboardController extends Controller{

	public function __construct(ModuleManager $manager)
    {
        $this->manager = $manager;
    }

	public function index()
	{
        $counts['openings'] = Opening::active()->count();
        $counts['jobRequests'] = JoinTeam::active()->where('opening_id','!=',null)->count();
        $counts['joinTeams'] = JoinTeam::active()->where('opening_id',null)->count();
        $counts['services'] = Service::active()->count();

        $counts['month_job_applications'] = JoinTeam::active()->where('opening_id','!=',null)->select(DB::raw('count(id) as `data`'),DB::raw('YEAR(created_at) year, MONTH(created_at) month'))->groupby('year','month')->get('data');
        $counts['month_join_team'] = JoinTeam::active()->where('opening_id',null)->select(DB::raw('count(id) as `data`'),DB::raw('YEAR(created_at) year, MONTH(created_at) month'))->groupby('year','month')->get('data');

		return view('Dashboard::index',compact('counts'));
	}

	public function postPublish($group = null)
    {
        $json = false;
        if($group === '_json'){
            $json = true;
        }
        $modules = config('modules.modules');
        if(in_array($group,$modules)){
        	$this->manager->exportTranslations($group,$json,true);
        }else{
	        $this->manager->exportTranslations($group, $json);
        }
        return ['status' => 'ok'];
    }

}