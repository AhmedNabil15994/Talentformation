<?php namespace App\Base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;

use App\Repositories\EloquentStateRepository;
use App\Transformers\StateResource;
use App\Entities\Country;
use App\Http\Requests\StateValidator;
use App;
use Illuminate\Support\MessageBag;

class CrudBaseController extends Controller {
    protected $repo;

    public function __construct() {
        $this->repo = new static::$repoFile( new static::$modelFile );
    }

    public function index(Request $request) {
        $resource = static::$resourceFile;
        if($request->ajax()){
            $data = $this->repo->dataList($request);
            return Datatables::of($resource::collection($data))->make(true);
        }
        $data = $this->repo->getAll($request);
        return view(static::$moduleName.'::index', compact('data'));
    }

    public function create() {
        $data = $this->withViewData()['add'] ?? [];
        return view(static::$moduleName.'::create',compact('data'));
    }

    public function store(Request $request) {
        $request = App::make(static::$validatorFile);
        try {
            $state = $this->repo->create($request);
            \Session::flash('success',trans('Dashboard::dashboard.addSuccess'));
        } catch (Exception $e) {
            \Session::flash('success',trans('Dashboard::dashboard.notExits')); 
        }
        return redirect()->back();
    }

    public function edit($id) {
        $model = $this->repo->getById($id);
        if(!$model){
            return redirect()->to(static::$indexURL)->with(['errors'=> new MessageBag($this->repo->errors)]);
        }
        $data = $this->withViewData()['edit'] ?? [];
        return view(static::$moduleName.'::edit', compact('model','data'));
    }

    public function update(Request $request, $id) {
        $request = App::make(static::$validatorFile);
        try {
            $state = $this->repo->update($request,$id);
            \Session::flash('success',trans('Dashboard::dashboard.editSuccess'));
        } catch (Exception $e) {
            \Session::flash('success',trans('Dashboard::dashboard.notExits')); 
        }
        return redirect()->back();
    }

    public function delete(Request $request,$id) {
        try {
            $state = $this->repo->delete($id);
            if(!$state){
                return redirect()->to(static::$indexURL)->with(['errors'=> new MessageBag($this->repo->errors)]);
            }

            if($request->ajax()){
                return \TraitsFunc::SuccessMessage(trans('Dashboard::dashboard.deleteSuccess'));
            }

            \Session::flash('success',trans('Dashboard::dashboard.deleteSuccess'));
        } catch (Exception $e) {
            \Session::flash('success',trans('Dashboard::dashboard.notExits')); 
        }
        return redirect()->back();
    }

    public function restore($id) {
        try {
            $state = $this->repo->restoreSoftDelte($id);
            if(!$state){
                return redirect()->to(static::$indexURL)->with(['errors'=> new MessageBag($this->repo->errors)]);
            }
            \Session::flash('success',trans('Dashboard::dashboard.restoreSuccess'));
        } catch (Exception $e) {
            \Session::flash('success',trans('Dashboard::dashboard.notExits')); 
        }
        return redirect()->back();
    }

    public function fastEdit(Request $request) {
        try {
            $state = $this->repo->quickEdit($request);
            if(!$state){
                return redirect()->to(static::$indexURL)->with(['errors'=> new MessageBag($this->repo->errors)]);
            }

            if($request->ajax()){
                return \TraitsFunc::SuccessMessage(trans('Dashboard::dashboard.editSuccess'));
            }

            \Session::flash('success',trans('Dashboard::dashboard.editSuccess'));
        } catch (Exception $e) {
            \Session::flash('success',trans('Dashboard::dashboard.notExits')); 
        }
        return redirect()->back();
    }

    public function deleteSelected(Request $request) {
        try {
            $state = $this->repo->deleteManyById($request);
            if(!$state){
                return redirect()->to(static::$indexURL)->with(['errors'=> new MessageBag($this->repo->errors)]);
            }

            if($request->ajax()){
                return \TraitsFunc::SuccessMessage(trans('Dashboard::dashboard.deleteSuccess'));
            }

            \Session::flash('success',trans('Dashboard::dashboard.deleteSuccess'));
        } catch (Exception $e) {
            \Session::flash('success',trans('Dashboard::dashboard.notExits')); 
        }
        return redirect()->back();
    }

    public function uploadImg(Request $request){
        try {
            $user = $this->repo->upload($request,$request->id);
            if(!$user){
                return redirect()->to(static::$indexURL)->with(['errors'=> new MessageBag($this->repo->errors)]);
            }

            if($request->ajax()){
                return \TraitsFunc::SuccessMessage(trans('Dashboard::dashboard.editSuccess'));
            }

            \Session::flash('success',trans('Dashboard::dashboard.editSuccess'));
        } catch (Exception $e) {
            \Session::flash('success',trans('Dashboard::dashboard.notExits')); 
        }
        return redirect()->back();    
    }

     public function withViewData(){
        return [];
    }
}
