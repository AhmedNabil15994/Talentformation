<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use App\Entities\ContactUs;
use App\Http\Requests\ContactUsValidator;
use App\Repositories\EloquentContactUsRepository;
use App\Transformers\ContactUsResource;
use DataTables;
use Illuminate\Http\Request;

class ContactUsController extends CrudBaseController {
    protected static $repoFile = EloquentContactUsRepository::class;
    protected static $modelFile = ContactUs::class;
    protected static $moduleName = 'ContactUs';
    protected static $resourceFile = ContactUsResource::class;
    protected static $validatorFile = ContactUsValidator::class;
    protected static $indexURL = '/dashboard/contactUs';
    protected static $uploadFolder = '';
    
}
