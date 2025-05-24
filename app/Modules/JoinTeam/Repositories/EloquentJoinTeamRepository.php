<?php namespace App\Repositories;

use App\Base\CrudBaseRepository;
use App\Interfaces\EntityRepositoryInterface;
use App\Entities\JoinTeam as Model;
use Illuminate\Support\Facades\Request;

class EloquentJoinTeamRepository extends CrudBaseRepository implements EntityRepositoryInterface {

    protected $model;
    protected static $uploadFolder = 'join_teams';

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function searchTable($source){
        $input = Request::all();
        $source = $source->where('opening_id',null);
        if(isset($input['name']) && !empty($input['name'])){
            $source = $source->where('name','LIKE','%'.$input['name'].'%');
        }
        if(isset($input['email']) && !empty($input['email'])){
            $source = $source->where('email',$input['email']);
        }
        if(isset($input['phone']) && !empty($input['phone'])){
            $source = $source->where('phone',$input['phone']);
        }
        if(isset($input['designation']) && !empty($input['designation'])){
            $source = $source->where('designation',$input['designation']);
        }
        return $source;
    }
}
