<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use Illuminate\Http\Request;
use DataTables;
use App\Repositories\EloquentClientRepository;
use App\Transformers\ClientResource;
use App\Entities\Client;
use App\Http\Requests\ClientValidator;

class ClientController extends CrudBaseController {

    protected static $repoFile = EloquentClientRepository::class;
    protected static $modelFile = Client::class;
    protected static $moduleName = 'Client';
    protected static $resourceFile = ClientResource::class;
    protected static $validatorFile = ClientValidator::class;
    protected static $indexURL = '/dashboard/clients';
    protected static $uploadFolder = 'clients';

    public function withViewData(){
        return [];
    } 
}
