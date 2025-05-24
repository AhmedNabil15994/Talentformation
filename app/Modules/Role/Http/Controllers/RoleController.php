<?php namespace App\Http\Controllers;

use App\Entities\Role;
use App\Base\CrudBaseController;
use App\Http\Requests\RoleValidator;
use App\Repositories\EloquentRoleRepository;
use App\Transformers\RoleResource;
use DataTables;
use Illuminate\Http\Request;

class RoleController extends CrudBaseController {

    protected static $repoFile = EloquentRoleRepository::class;
    protected static $modelFile = Role::class;
    protected static $moduleName = 'Role';
    protected static $resourceFile = RoleResource::class;
    protected static $validatorFile = RoleValidator::class;
    protected static $indexURL = '/dashboard/roles';
    protected static $uploadFolder = '';
}
