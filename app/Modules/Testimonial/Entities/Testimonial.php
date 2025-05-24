<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model {
    use SoftDeletes,\TraitsFunc;
    protected $fillable = ['name','description','position','image','status','created_at','updated_at','deleted_at',];
    protected $appends = ['image_url'];

    protected $guarded = [
        // Guarded fields here
    ];

    protected $dates = [
        // Dates here
    ];

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    protected $table = 'testimonials';

    public function getImageUrlAttribute(){
        return \FilesHelper::getImagePath('testimonials',$this->id,$this->image,true);
    }
}
