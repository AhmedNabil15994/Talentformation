<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use App\Entities\Page;
use App\Entities\Section;
use App\Http\Requests\SectionValidator;
use App\Repositories\EloquentSectionRepository;
use App\Transformers\SectionResource;
use DataTables;
use Illuminate\Http\Request;

class SectionController extends CrudBaseController {

    protected static $repoFile = EloquentSectionRepository::class;
    protected static $modelFile = Section::class;
    protected static $moduleName = 'Section';
    protected static $resourceFile = SectionResource::class;
    protected static $validatorFile = SectionValidator::class;
    protected static $indexURL = '/dashboard/sections';
    protected static $uploadFolder = 'sections';

    public function withViewData(){
        $pages = Page::active()->get(['id',"name_".LANGUAGE_PREF." as display_name"]);
        return [
            'add' => (object)[
                'pages' => $pages,
            ],
            'edit' => (object)[
                'pages' => $pages,
            ],
        ];
    }
}
