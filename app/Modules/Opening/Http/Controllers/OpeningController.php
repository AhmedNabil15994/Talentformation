<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use Illuminate\Http\Request;
use DataTables;
use App\Repositories\EloquentOpeningRepository;
use App\Transformers\OpeningResource;
use App\Entities\Opening;
use App\Http\Requests\OpeningValidator;

class OpeningController extends CrudBaseController {

    protected static $repoFile = EloquentOpeningRepository::class;
    protected static $modelFile = Opening::class;
    protected static $moduleName = 'Opening';
    protected static $resourceFile = OpeningResource::class;
    protected static $validatorFile = OpeningValidator::class;
    protected static $indexURL = '/dashboard/openings';
    protected static $uploadFolder = 'openings';

    public function withViewData(){
        return [];
    } 
}
