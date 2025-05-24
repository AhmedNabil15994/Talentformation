<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use App\Entities\Country;
use App\Http\Requests\CountryValidator;
use App\Repositories\EloquentCountryRepository;
use App\Transformers\CountryResource;
use DataTables;
use Illuminate\Http\Request;

class CountryController extends CrudBaseController {

    protected static $repoFile = EloquentCountryRepository::class;
    protected static $modelFile = Country::class;
    protected static $moduleName = 'Country';
    protected static $resourceFile = CountryResource::class;
    protected static $validatorFile = CountryValidator::class;
    protected static $indexURL = '/dashboard/countries';
    protected static $uploadFolder = '';
}
