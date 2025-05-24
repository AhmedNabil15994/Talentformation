<?php namespace App\Repositories;

use App\Base\CrudBaseRepository;
use App\Interfaces\EntityRepositoryInterface;
use App\Entities\Opening as Model;
use Illuminate\Support\Facades\Request;

class EloquentOpeningRepository extends CrudBaseRepository implements EntityRepositoryInterface {

    protected $model;
    protected static $uploadFolder = 'openings';

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function searchTable($source){
        $input = Request::all();
        if(isset($input['location']) && !empty($input['location'])){
            $source = $source->where('job_details->location->'.LANGUAGE_PREF,'LIKE','%'.$input['location'].'%');
        }
        if(isset($input['qualifications']) && !empty($input['qualifications'])){
            $source = $source->where('job_details->qualifications->'.LANGUAGE_PREF,'LIKE','%'.$input['qualifications'].'%');
        }
        if(isset($input['career_level']) && !empty($input['career_level'])){
            $source = $source->where('job_details->career_level->'.LANGUAGE_PREF,'LIKE','%'.$input['career_level'].'%');
        }
        if(isset($input['salary']) && !empty($input['salary'])){
            $source = $source->where('job_details->salary->'.LANGUAGE_PREF,'LIKE','%'.$input['salary'].'%');
        }
        if(isset($input['nationality']) && !empty($input['nationality'])){
            $source = $source->where('job_details->nationality->'.LANGUAGE_PREF,'LIKE','%'.$input['nationality'].'%');
        }
        if(isset($input['language']) && !empty($input['language'])){
            $source = $source->where('job_details->language->'.LANGUAGE_PREF,'LIKE','%'.$input['language'].'%');
        }
        if(isset($input['job_status']) && !empty($input['job_status'])){
            $source = $source->where('job_details->job_status',$input['job_status']);
        }
        return $source;
    }
}
