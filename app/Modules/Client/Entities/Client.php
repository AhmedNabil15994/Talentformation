<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model {
    use SoftDeletes,\TraitsFunc;
    protected $fillable = ['image','sort','status','created_at','updated_at','deleted_at',];

    protected $guarded = [
        // Guarded fields here
    ];

    protected $dates = [
        // Dates here
    ];

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    protected $table = 'clients';
    protected $appends = ['image_url'];
    public function getImageUrlAttribute(){
        return \FilesHelper::getImagePath('clients',$this->id,$this->image,true);
    }
}
