<?php namespace App\Http\Controllers;

use App\Base\CrudBaseController;
use App\Entities\Coupon;
use App\Http\Requests\CouponValidator;
use App\Repositories\EloquentCouponRepository;
use App\Transformers\CouponResource;
use DataTables;
use Illuminate\Http\Request;

class CouponController extends CrudBaseController {

    protected static $repoFile = EloquentCouponRepository::class;
    protected static $modelFile = Coupon::class;
    protected static $moduleName = 'Coupon';
    protected static $resourceFile = CouponResource::class;
    protected static $validatorFile = CouponValidator::class;
    protected static $indexURL = '/dashboard/coupons';
    protected static $uploadFolder = '';

}
