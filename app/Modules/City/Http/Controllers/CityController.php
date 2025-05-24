<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use App\Entities\City;
use App\Entities\Country;
use App\Http\Requests\CityValidator;
use App\Repositories\EloquentCityRepository;
use App\Transformers\CityResource;
use DataTables;
use Illuminate\Http\Request;

class CityController extends CrudBaseController {

    protected static $repoFile = EloquentCityRepository::class;
    protected static $modelFile = City::class;
    protected static $moduleName = 'City';
    protected static $resourceFile = CityResource::class;
    protected static $validatorFile = CityValidator::class;
    protected static $indexURL = '/dashboard/cities';
    protected static $uploadFolder = '';

    public function withViewData(){
        $countries = Country::active()->get(['id',"title_".LANGUAGE_PREF." as display_name"]);
        return [
            'add' => (object)[
                'countries' => $countries,
            ],
            'edit' => (object)[
                'countries' => $countries,
            ],
        ];
    }
    
}
