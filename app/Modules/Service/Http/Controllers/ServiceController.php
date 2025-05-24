<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use App\Entities\Service;
use App\Entities\Category;
use App\Http\Requests\ServiceValidator;
use App\Repositories\EloquentServiceRepository;
use App\Transformers\ServiceResource;
use DataTables;
use Illuminate\Http\Request;

class ServiceController extends CrudBaseController {

    protected static $repoFile = EloquentServiceRepository::class;
    protected static $modelFile = Service::class;
    protected static $moduleName = 'Service';
    protected static $resourceFile = ServiceResource::class;
    protected static $validatorFile = ServiceValidator::class;
    protected static $indexURL = '/dashboard/services';
    protected static $uploadFolder = 'services';

    public function withViewData(){
        $categories = Category::active()->where('parent_id','>=',1)->get(['id',"name_".LANGUAGE_PREF." as display_name"]);
        return [
            'add' => (object)[
                'categories' => $categories,
            ],
            'edit' => (object)[
                'categories' => $categories,
            ],
        ];
    }
    
}
