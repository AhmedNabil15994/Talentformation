<?php namespace App\Http\Controllers;

use App\Entities\Blog;

class BlogControllers extends Controller {

    use \TraitsFunc;

    public function index(){
        $blogs = Blog::active()->where('category_id',null)->paginate(config('modules.site_configs.pagination'));
        return view('Frontend::Blogs.index',compact('blogs'));
    }

    public function show($id){
        $id = (int) $id;
        $blog = Blog::active()->findOrFail($id);
        $blog->increaseViews();
        return view('Frontend::Blogs.show',compact('blog'));
    }
}
