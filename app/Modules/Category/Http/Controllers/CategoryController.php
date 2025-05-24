<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use App\Entities\Category;
use App\Http\Requests\CategoryValidator;
use App\Repositories\EloquentCategoryRepository;
use App\Transformers\CategoryResource;
use DataTables;
use Illuminate\Http\Request;

class CategoryController extends CrudBaseController {
    protected static $repoFile = EloquentCategoryRepository::class;
    protected static $modelFile = Category::class;
    protected static $moduleName = 'Category';
    protected static $resourceFile = CategoryResource::class;
    protected static $validatorFile = CategoryValidator::class;
    protected static $indexURL = '/dashboard/categories';
    protected static $uploadFolder = 'categories';

    public function withViewData(){
        $parents = CategoryResource::collection($this->repo->getActiveParents());
        return [
            'add' => (object)[
                'parents' => $parents,
            ],
            'edit' => (object)[
                'parents' => $parents,
            ],
        ];
    }
}
