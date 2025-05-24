<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JoinTeam extends Model {
    use SoftDeletes,\TraitsFunc;
    protected $fillable = ['name','email','phone','designation','file','company_name','work_from','work_to','current_salary','expected_salary','opening_id','status','created_at','updated_at','deleted_at',];

    protected $guarded = [
        // Guarded fields here
    ];

    protected $dates = [
        // Dates here
    ];

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    protected $table = 'join_teams';

    protected $appends = ['file_url','opening_name','work_from_arr','work_to_arr','designation_arr','company_name_arr'];

    public function setWorkFromAttribute($value){
        $this->attributes['work_from'] = $value != null ? json_encode($value) : '';
    }

    public function setWorkToAttribute($value){
        $this->attributes['work_to'] = $value != null ? json_encode($value) : '';
    }

    public function setDesignationAttribute($value){
        $this->attributes['designation'] = $value != null ? json_encode($value) : '';
    }

    public function setCompanyNameAttribute($value){
        $this->attributes['company_name'] = $value != null ? json_encode($value) : '';
    }

    public function getWorkFromArrAttribute(){
        return $this->work_from != null ? json_decode($this->work_from) : '';
    }

    public function getWorkToArrAttribute(){
        return $this->work_to != null ? json_decode($this->work_to) : '';
    }

    public function getDesignationArrAttribute(){
        return $this->designation != null ? json_decode($this->designation) : '';
    }

    public function getCompanyNameArrAttribute(){
        return $this->company_name != null ? json_decode($this->company_name) : '';
    }


    public function Opening(){
        return $this->belongsTo('App\Entities\Opening','opening_id','id');
    }

    public function getFileUrlAttribute(){
        return \FilesHelper::getImagePath('join_teams',$this->id,$this->file,true);
    }

    public function getOpeningNameAttribute(){
        return $this->opening_id != null ? $this->Opening->title : '';
    }
}
