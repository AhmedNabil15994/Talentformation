<?php

namespace App\Repositories;

use App\Interfaces\EntityRepositoryInterface;
use App\Entities\User as Model;
use App\Http\Requests\UserValidator as ModelValidator;
use App\Http\Requests\UserUpdateValidator as ModelUpdateValidator;

class EloquentUserRepository implements EntityRepositoryInterface {

    protected $model;
    public $errors;

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function dataList($request){
        $source = $this->model;
        $input = $request->all();

        if(isset($input['deleted_at']) && !empty($input['deleted_at'])){
            $source = $source->onlyTrashed();
        }
        if(isset($input['id']) && !empty($input['id'])){
            $source = $source->where('id',$input['id']);
        }
        if(isset($input['name']) && !empty($input['name'])){
            $source = $source->where('name','LIKE','%'.$input['name'].'%');
        }
        if(isset($input['mobile']) && !empty($input['mobile'])){
            $source = $source->where('mobile',$input['mobile']);
        }
        if(isset($input['role_id']) && !empty($input['role_id'])){
            $source = $source->where('role_id',$input['role_id']);
        }
        if(isset($input['email']) && !empty($input['email'])){
            $source = $source->where('email','LIKE','%'.$input['email'].'%');
        }
        if(isset($input['status']) && !empty($input['status'])){
            $source = $source;
        }else{
            $source = $source->where('status',1);
        }

        return $source->orderBy('id','DESC')->get();
    }

    public function getAll($request) {
        return $this->model->all();
    }

    public function create($request) {
        $createData = $request->validated();
        if(isset($createData['extra_permissions']) && count($createData['extra_permissions']) > 0){
            $createData['extra_permissions'] = serialize($createData['extra_permissions']);
        }
        $model = $this->model->create($createData);
        if($request->hasFile('image')){
            $image = \FilesHelper::uploadFile('users',$request->file('image'),$model->id);
            $model->update(['image'=>$image]);
        }
        return $model;
    }

    public function getById($id) {
        $model = $this->model->withTrashed()->find($id);
        if(!$model){
            $this->errors = [trans('Dashboard::dashboard.notExits')];
            return false;
        }
        return $model;
    }

    public function update($request,$id) {
        $model = $this->getById($id);
        if(!$model){
            $this->errors = [trans('Dashboard::dashboard.notExits')];
            return false;
        }

        $updateData = $request->validated();
        if($request->hasFile('image')){
            $updateData['image'] = \FilesHelper::uploadFile('users',$request->file('image'),$id);
        }

        if(isset($updateData['extra_permissions'])){
            $updateData['extra_permissions'] = serialize($updateData['extra_permissions']);
        }else{
            $updateData['extra_permissions'] = null;
        }
        if(!isset($updateData['password']) || $updateData['password'] == null){
            unset($updateData['password']);
        }
        if(!isset($updateData['status'])){
            $updateData['status'] = 0;
        }
        return $model->update($updateData);
    }

    public function delete($id) {
        $model = $this->getById($id);
        if(!$model){
            $this->errors = [trans('Dashboard::dashboard.notExits')];
            return false;
        }

        if ($model->trashed()){
            \FilesHelper::deleteDirectory(public_path('/').'/uploads/users/'.$id);
            return $model->forceDelete();
        }else{
            return $model->delete();
        }
    }

    public function restoreSoftDelte($id)
    {
        $model = $this->getById($id);
        if(!$model){
            $this->errors = [trans('Dashboard::dashboard.notExits')];
            return false;
        }
        return $model->restore();
    }

    public function quickEdit($request){
        $records = $request->data;
        if(is_array($records)){
            foreach ($records as $record) {
                $this->model->where('id',$record[0])->update([$record[1] => $record[2]]);
            }
            return true;
        }
        return false;
    }

    public function deleteManyById($request){
        $records = $request->data;
        if(is_array($records)){
            foreach ($records as $record) {
                $this->delete($record[0]);
            }
            return true;
        }
        return false;
    }

    public function upload($request,$id){
        $model = $this->getById($id);
        if(!$model){
            $this->errors = [trans('Dashboard::dashboard.notExits')];
            return false;
        }

        if($request->hasFile('image')){
            $updateData['image'] = \FilesHelper::uploadFile('users',$request->file('image'),$id);
        }
        return $model->update($updateData);
    }
}
