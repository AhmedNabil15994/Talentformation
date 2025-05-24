<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use Illuminate\Http\Request;
use DataTables;
use App\Repositories\EloquentTestimonialRepository;
use App\Transformers\TestimonialResource;
use App\Entities\Testimonial;
use App\Http\Requests\TestimonialValidator;

class TestimonialController extends CrudBaseController {

    protected static $repoFile = EloquentTestimonialRepository::class;
    protected static $modelFile = Testimonial::class;
    protected static $moduleName = 'Testimonial';
    protected static $resourceFile = TestimonialResource::class;
    protected static $validatorFile = TestimonialValidator::class;
    protected static $indexURL = '/dashboard/testimonials';
    protected static $uploadFolder = 'testimonials';

    public function withViewData(){
        return [];
    } 
}
