<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use Illuminate\Http\Request;

use App\Repositories\EloquentStateRepository;
use App\Transformers\StateResource;
use App\Http\Requests\StateValidator;
use App\Entities\State;

use App\Entities\Country;
use App\Entities\City;
use DataTables;

class StateController extends CrudBaseController {
    protected static $repoFile = EloquentStateRepository::class;
    protected static $modelFile = State::class;
    protected static $moduleName = 'State';
    protected static $resourceFile = StateResource::class;
    protected static $validatorFile = StateValidator::class;
    protected static $indexURL = '/dashboard/states';
    protected static $uploadFolder = '';

    public function withViewData(){
        $countries = Country::active()->get(['id',"title_".LANGUAGE_PREF." as display_name"]);
        $cities = City::active()->get(['id',"title_".LANGUAGE_PREF." as display_name"]);
        
        return [
            'add' => (object)[
                'countries' => $countries,
            ],
            'edit' => (object)[
                'countries' => $countries,
                'cities' => $cities,
            ],
        ];
    }
}
