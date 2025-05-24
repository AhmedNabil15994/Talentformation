<?php

namespace App\Http\Controllers;

use App\Entities\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateValidator;
use App\Http\Requests\UserValidator;
use App\Repositories\EloquentUserRepository;
use App\Transformers\UserResource;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;


class UserController extends Controller {

    protected $userRepo;
    protected $errors;

    public function __construct(EloquentUserRepository $userRepo) {
        $this->userRepo = $userRepo;
    }

    public function index(Request $request) {
        if($request->ajax()){
            $Users = $this->userRepo->dataList($request);
            return Datatables::of(UserResource::collection($Users))->make(true);
        }
        $Users = $this->userRepo->getAll($request);
        return view('User::index', compact('Users'));
    }

    public function create() {
        $roles = Role::get(['id',"name_".LANGUAGE_PREF." as display_name"]);
        return view('User::create',compact('roles'));
    }

    public function store(UserValidator $request) {
        $user = $this->userRepo->create($request);
        \Session::flash('success',trans('Dashboard::dashboard.addSuccess'));
        return redirect()->back();
    }

    public function edit($id) {
        $model = $this->userRepo->getById($id);
        if(!$model){
            return redirect()->back()->with(['errors'=> new MessageBag($this->userRepo->errors)]);
        }
        $roles = Role::get(['id',"name_".LANGUAGE_PREF." as display_name"]);
        return view('User::edit', compact('model','roles'));
    }

    public function update(UserUpdateValidator $request, $id) {
        $user = $this->userRepo->update($request,$id);
        \Session::flash('success',trans('Dashboard::dashboard.editSuccess'));
        return redirect()->back();
    }

    public function delete(Request $request,$id) {
        $user = $this->userRepo->delete($id);
        if(!$user){
            return redirect()->back()->with(['errors'=> new MessageBag($this->userRepo->errors)]);
        }

        if($request->ajax()){
            return \TraitsFunc::SuccessMessage(trans('Dashboard::dashboard.deleteSuccess'));
        }

        \Session::flash('success',trans('Dashboard::dashboard.deleteSuccess'));
        return redirect()->back();
    }

    public function restore($id) {
        $user = $this->userRepo->restoreSoftDelte($id);
        if(!$user){
            return redirect()->back()->with(['errors'=> new MessageBag($this->userRepo->errors)]);
        }
        \Session::flash('success',trans('Dashboard::dashboard.restoreSuccess'));
        return redirect()->back();
    }

    public function fastEdit(Request $request) {
        $user = $this->userRepo->quickEdit($request);
        if(!$user){
            return redirect()->back()->with(['errors'=> new MessageBag($this->userRepo->errors)]);
        }

        if($request->ajax()){
            return \TraitsFunc::SuccessMessage(trans('Dashboard::dashboard.editSuccess'));
        }

        \Session::flash('success',trans('Dashboard::dashboard.editSuccess'));
        return redirect()->back();
    }

    public function deleteSelected(Request $request) {
        $user = $this->userRepo->deleteManyById($request);
        if(!$user){
            return redirect()->back()->with(['errors'=> new MessageBag($this->userRepo->errors)]);
        }

        if($request->ajax()){
            return \TraitsFunc::SuccessMessage(trans('Dashboard::dashboard.deleteSuccess'));
        }

        \Session::flash('success',trans('Dashboard::dashboard.deleteSuccess'));
        return redirect()->back();
    }

    public function uploadImg(Request $request){
        $user = $this->userRepo->upload($request,$request->id);
        if(!$user){
            return redirect()->back()->with(['errors'=> new MessageBag($this->userRepo->errors)]);
        }

        if($request->ajax()){
            return \TraitsFunc::SuccessMessage(trans('Dashboard::dashboard.editSuccess'));
        }

        \Session::flash('success',trans('Dashboard::dashboard.editSuccess'));
        return redirect()->back();    
    }
}
