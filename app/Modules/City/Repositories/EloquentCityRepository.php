<?php namespace App\Repositories;

use App\Base\CrudBaseRepository;
use App\Interfaces\EntityRepositoryInterface;
use App\Entities\City as Model;
use Illuminate\Support\Facades\Request;

class EloquentCityRepository extends CrudBaseRepository implements EntityRepositoryInterface {

    protected $model;
    protected static $uploadFolder = '';

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function searchTable($source){
        $input = Request::all();
        if(isset($input['title_ar']) && !empty($input['title_ar'])){
            $source = $source->where('title_ar','LIKE','%'.$input['title_ar'].'%');
        }
        if(isset($input['title_en']) && !empty($input['title_en'])){
            $source = $source->where('title_en','LIKE','%'.$input['title_en'].'%');
        }
        if(isset($input['country_id']) && !empty($input['country_id'])){
            $source = $source->where('country_id',$input['country_id']);
        } 
        return $source;
    }
}
