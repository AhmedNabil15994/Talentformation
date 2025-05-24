<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model {
    use SoftDeletes,\TraitsFunc;
    protected $fillable = ['code','discount_type','discount_value','valid_type','valid_until','status','created_at','updated_at','deleted_at',];

    protected $guarded = [
        // Guarded fields here
    ];

    protected $dates = [
        // Dates here
    ];

    protected $appends = ['discount_type_text'];

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    protected $table = 'coupons';

    public function getDiscountTypeTextAttribute(){
        return trans('Coupon::coupon.form.type_'.$this->discount_type);
    }

}
