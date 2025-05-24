<?php namespace App\Http\Controllers;

use App\Entities\Category;
use App\Entities\Service;
use Illuminate\Http\Request;

class ServiceControllers extends Controller {

    use \TraitsFunc;

    public function index(Request $request){
        $sort = $request->sort ? $request->sort : 'ASC';
        $services = Service::active()->where('category_id','>=',1)->orderBy('sort',$sort)->paginate(config('modules.site_configs.pagination'));
        return view('Frontend::Services.index',compact('services'));
    }

    public function show($id){
        $id = (int) $id;
        $category = Category::active()->findOrFail($id);
        $services = Service::active()->whereCategoryId($id)->get();
        return view('Frontend::Services.show',compact('category','services'));
    }
}
