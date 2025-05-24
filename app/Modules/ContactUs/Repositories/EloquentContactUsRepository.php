<?php namespace App\Repositories;

use App\Base\CrudBaseRepository;
use App\Interfaces\EntityRepositoryInterface;
use App\Entities\ContactUs as Model;
use Illuminate\Support\Facades\Request;

class EloquentContactUsRepository extends CrudBaseRepository implements EntityRepositoryInterface {

    protected $model;
    protected static $uploadFolder = '';

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function searchTable($source){
        $input = Request::all();
        if(isset($input['name']) && !empty($input['name'])){
            $source = $source->where('name','LIKE','%'.$input['name'].'%');
        }
        if(isset($input['email']) && !empty($input['email'])){
            $source = $source->where('email',$input['email']);
        }
        if(isset($input['phone']) && !empty($input['phone'])){
            $source = $source->where('phone',$input['phone']);
        }
        return $source;
    }
}
