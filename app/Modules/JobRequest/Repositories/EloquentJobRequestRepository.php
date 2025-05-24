<?php namespace App\Repositories;

use App\Base\CrudBaseRepository;
use App\Interfaces\EntityRepositoryInterface;
use App\Entities\JoinTeam as Model;
use Illuminate\Support\Facades\Request;

class EloquentJobRequestRepository extends CrudBaseRepository implements EntityRepositoryInterface {

    protected $model;
    protected static $uploadFolder = 'join_teams';

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function searchTable($source){
        $input = Request::all();
        $source = $source->where('opening_id','!=',null);
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
        if(isset($input['company_name']) && !empty($input['company_name'])){
            $source = $source->where('company_name',$input['company_name']);
        }
        if(isset($input['work_from']) && !empty($input['work_from'])){
            $source = $source->where('work_from',$input['work_from']);
        }
        if(isset($input['work_to']) && !empty($input['work_to'])){
            $source = $source->where('work_to',$input['work_to']);
        }
        if(isset($input['current_salary']) && !empty($input['current_salary'])){
            $source = $source->where('current_salary',$input['current_salary']);
        }
        if(isset($input['expected_salary']) && !empty($input['expected_salary'])){
            $source = $source->where('expected_salary',$input['expected_salary']);
        }
        if(isset($input['opening_id']) && !empty($input['opening_id'])){
            $source = $source->where('opening_id',$input['opening_id']);
        }
        return $source;
    }
}
