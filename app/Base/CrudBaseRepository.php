<?php namespace App\Base;
use App\Interfaces\EntityRepositoryInterface;
use DB;

class CrudBaseRepository implements EntityRepositoryInterface{

    public $errors;

    public function getAll($request) {
        return $this->model->all();
    }

    public function create($request) {
        $createData = $request->validated();

        DB::beginTransaction();
        try {
            $model = $this->model->create($createData);
            $this->handleUploads($model,$request);
            DB::commit();
            return $model;
        } catch (PDOException $e) {
            DB::rolleback();
            throw $e;
        }
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
        if(!isset($updateData['status'])){
            $updateData['status'] = 0;
        }

        DB::beginTransaction();
        try {
            $model->update($updateData);
            $this->handleUploads($model,$request);
            DB::commit();
            return $model;
        } catch (PDOException $e) {
            DB::rolleback();
            throw $e;
        }
    }

    public function delete($id) {
        $model = $this->getById($id);
        if(!$model){
            $this->errors = [trans('Dashboard::dashboard.notExits')];
            return false;
        }

        DB::beginTransaction();
        try {
            if ($model->trashed()){
                $model = $model->forceDelete();
            }else{
                $model = $model->delete();
            }
            DB::commit();
            return $model;
        } catch (PDOException $e) {
            DB::rolleback();
            throw $e;
        }
    }

    public function restoreSoftDelte($id)
    {
        $model = $this->getById($id);
        if(!$model){
            $this->errors = [trans('Dashboard::dashboard.notExits')];
            return false;
        }

        DB::beginTransaction();
        try {
            $model = $model->restore();
            DB::commit();
            return $model;
        } catch (PDOException $e) {
            DB::rolleback();
            throw $e;
        }
    }

    public function deleteManyById($request){
        $records = $request->data;
        if(is_array($records)){
            foreach ($records as $record) {
                $this->delete($record);
            }
            return true;
        }
        return false;
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

    public function handleUploads($model,$request){
        $updateData = [];

        DB::beginTransaction();
        try {
            if($request->hasFile('image')){
                $updateData['image'] = \FilesHelper::uploadFile(static::$uploadFolder,$request->file('image'),$model->id);
            }
            if($request->hasFile('file')){
                $updateData['file'] = \FilesHelper::uploadFile(static::$uploadFolder,$request->file('file'),$model->id);
            }
            if(!empty($updateData)){
                $model->update($updateData);
            }
            DB::commit();
            return $model;
        } catch (PDOException $e) {
            DB::rolleback();
            throw $e;
        }        
    }

    public function upload($request,$id){
        $model = $this->getById($id);
        if(!$model){
            $this->errors = [trans('Dashboard::dashboard.notExits')];
            return false;
        }

        return $this->handleUploads($model,$request);
    }

    public function dataList($request,$sortKey = 'id' , $sortBy = 'DESC'){
        $source = $this->model;
        $input = $request->all();
        $source = $this->searchTable($source); 

        if(isset($input['deleted_at']) && !empty($input['deleted_at'])){
            $source = $source->onlyTrashed();
        }
        if(isset($input['id']) && !empty($input['id'])){
            $source = $source->where('id',$input['id']);
        }        
        if(isset($input['status']) && !empty($input['status'])){
            $source = $source;
        }else{
            $source = $source->where('status',1);
        }

        if(isset($input['from']) && !empty($input['from']) && isset($input['to']) && !empty($input['to'])){
            $source = $source->where([
                ['created_at' , '>=' , date('Y-m-d H:i:s',strtotime($input['from'] . " 00:00:00"))],
                ['created_at' , '<=' , date('Y-m-d H:i:s',strtotime($input['to'] . " 23:59:59"))],
            ]);
        } 
        
        return $source->orderBy($sortKey,$sortBy)->get();
    }
    
    public function searchTable($source){
        return $source;
    }
}
