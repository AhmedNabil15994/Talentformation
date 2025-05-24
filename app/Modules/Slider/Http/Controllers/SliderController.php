<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use App\Entities\Page;
use App\Entities\Slider;
use App\Http\Requests\SliderValidator;
use App\Repositories\EloquentSliderRepository;
use App\Transformers\SliderResource;
use DataTables;
use Illuminate\Http\Request;

class SliderController extends CrudBaseController {

    protected static $repoFile = EloquentSliderRepository::class;
    protected static $modelFile = Slider::class;
    protected static $moduleName = 'Slider';
    protected static $resourceFile = SliderResource::class;
    protected static $validatorFile = SliderValidator::class;
    protected static $indexURL = '/dashboard/sliders';
    protected static $uploadFolder = 'sliders';

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