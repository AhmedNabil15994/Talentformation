<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use App\Entities\Page;
use App\Http\Requests\PageValidator;
use App\Repositories\EloquentPageRepository;
use App\Transformers\PageResource;
use DataTables;
use Illuminate\Http\Request;

class PageController extends CrudBaseController {

    protected static $repoFile = EloquentPageRepository::class;
    protected static $modelFile = Page::class;
    protected static $moduleName = 'Page';
    protected static $resourceFile = PageResource::class;
    protected static $validatorFile = PageValidator::class;
    protected static $indexURL = '/dashboard/pages';
    protected static $uploadFolder = '';

}
