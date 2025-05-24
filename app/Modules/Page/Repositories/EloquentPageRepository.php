<?php

namespace App\Repositories;

use App\Base\CrudBaseRepository;
use App\Interfaces\EntityRepositoryInterface;
use App\Entities\Page as Model;
use Illuminate\Support\Facades\Request;

class EloquentPageRepository extends CrudBaseRepository implements EntityRepositoryInterface {

    protected $model;
    protected static $uploadFolder = '';

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function searchTable($source){
        $input = Request::all();
        if(isset($input['name_ar']) && !empty($input['name_ar'])){
            $source = $source->where('name_ar','LIKE','%'.$input['name_ar'].'%');
        }
        if(isset($input['name_en']) && !empty($input['name_en'])){
            $source = $source->where('name_en','LIKE','%'.$input['name_en'].'%');
        }
        return $source;
    }
}
