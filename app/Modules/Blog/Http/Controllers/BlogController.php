<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use App\Entities\Blog;
use App\Entities\Category;
use App\Http\Requests\BlogValidator;
use App\Repositories\EloquentBlogRepository;
use App\Transformers\BlogResource;
use DataTables;
use Illuminate\Http\Request;

class BlogController extends CrudBaseController {

    protected static $repoFile = EloquentBlogRepository::class;
    protected static $modelFile = Blog::class;
    protected static $moduleName = 'Blog';
    protected static $resourceFile = BlogResource::class;
    protected static $validatorFile = BlogValidator::class;
    protected static $indexURL = '/dashboard/blogs';
    protected static $uploadFolder = 'blogs';
    
}
