<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use Illuminate\Http\Request;
use DataTables;
use App\Repositories\EloquentJoinTeamRepository;
use App\Transformers\JoinTeamResource;
use App\Entities\JoinTeam;
use App\Http\Requests\JoinTeamValidator;

class JoinTeamController extends CrudBaseController {

    protected static $repoFile = EloquentJoinTeamRepository::class;
    protected static $modelFile = JoinTeam::class;
    protected static $moduleName = 'JoinTeam';
    protected static $resourceFile = JoinTeamResource::class;
    protected static $validatorFile = JoinTeamValidator::class;
    protected static $indexURL = '/dashboard/joinTeams';
    protected static $uploadFolder = 'join_teams';

    public function withViewData(){
        return [];
    } 
}
