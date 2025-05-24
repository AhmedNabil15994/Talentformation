<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use App\Entities\JoinTeam;
use App\Entities\Opening;
use App\Http\Requests\JobRequestValidator;
use App\Repositories\EloquentJobRequestRepository;
use App\Transformers\JoinTeamResource;
use DataTables;
use Illuminate\Http\Request;

class JobRequestController extends CrudBaseController {

    protected static $repoFile = EloquentJobRequestRepository::class;
    protected static $modelFile = JoinTeam::class;
    protected static $moduleName = 'JobRequest';
    protected static $resourceFile = JoinTeamResource::class;
    protected static $validatorFile = JobRequestValidator::class;
    protected static $indexURL = '/dashboard/jobRequests';
    protected static $uploadFolder = 'join_teams';

    public function withViewData(){
        $openings = Opening::active()->get(['id',"title_".LANGUAGE_PREF." as display_name"]);
        return [
            'add' => (object)[
                'openings' => $openings,
            ],
            'edit' => (object)[
                'openings' => $openings,
            ],
        ];
    }
}
