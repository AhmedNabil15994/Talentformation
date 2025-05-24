<?php namespace App\Repositories;

use App\Base\CrudBaseRepository;
use App\Interfaces\EntityRepositoryInterface;
use App\Entities\Testimonial as Model;
use Illuminate\Support\Facades\Request;

class EloquentTestimonialRepository extends CrudBaseRepository implements EntityRepositoryInterface {

    protected $model;
    protected static $uploadFolder = 'testimonials';

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function searchTable($source){
        $input = Request::all();
        if(isset($input['name']) && !empty($input['name'])){
            $source = $source->where('name','LIKE','%'.$input['name'].'%');
        }
        if(isset($input['position']) && !empty($input['position'])){
            $source = $source->where('position','LIKE','%'.$input['position'].'%');
        }
        return $source;
    }
}
