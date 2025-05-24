<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Opening extends Model {
    use SoftDeletes,\TraitsFunc;
    protected $fillable = ['title_ar','title_en','brief_ar','brief_en','description_ar','description_en','job_details','status','created_at','updated_at','deleted_at','views'];

    protected $guarded = [
        // Guarded fields here
    ];

    protected $dates = [
        // Dates here
    ];

    protected $casts = [
        'job_details' => 'array',
    ];


    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    protected $table = 'openings';

    protected $appends = ['brief','title','description','job_status_text','requests_count'];

    public function getTitleAttribute(){
        return $this->{'title_'.LANGUAGE_PREF};
    }

    public function getDescriptionAttribute(){
        return $this->{'description_'.LANGUAGE_PREF};
    }

    public function getBriefAttribute(){
        return $this->{'brief_'.LANGUAGE_PREF};
    }

    public function getJobStatusTextAttribute(){
        return $this->job_details && $this->job_details['job_status'] ? trans('Opening::opening.form.job_status_'.$this->job_details['job_status']) : '';
    }

    public function Applications(){
        return $this->hasMany('App\Entities\JoinTeam','opening_id','id');
    }

    public function getRequestsCountAttribute(){
        return $this->Applications()->count();
    }

    public function increaseViews(){
        return $this->update(['views'=> ($this->views+1) ]);
    }
}
