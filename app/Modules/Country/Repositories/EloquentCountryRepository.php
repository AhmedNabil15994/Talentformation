<?php namespace App\Repositories;

use App\Base\CrudBaseRepository;
use App\Interfaces\EntityRepositoryInterface;
use App\Entities\Country as Model;
use Illuminate\Support\Facades\Request;

class EloquentCountryRepository extends CrudBaseRepository implements EntityRepositoryInterface {

    protected $model;
    protected static $uploadFolder = '';

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function searchTable($source){
        $input = Request::all();
        return $source;
    }
}
