<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\EloquentUserRepository;
use App\Repositories\UserCrudRepository;
use Illuminate\Http\Request;
use URL;

class SettingController extends Controller{
    protected $mainData;

    public function __construct() {
        $this->site_settings = [
            'title' => trans('Dashboard::dashboard.site_settings'),
            'url' => 'dashboard/'.'settings',
            'name' => 'settings',
            'nameOne' => '',
            'modelName' => '',
            'icon' => ' fas fa-cogs',
            'sortName' => '',
            'addOne' => '',
        ];
    }

	public function index()
	{
        $designElems['mainData'] = $this->site_settings;
        $configs1 = config('modules.site_configs');
        $configs2 = config('modules.general_configs');
        $data = array_merge($configs1,$configs2);
		return view('Dashboard::settings.index',compact('designElems','data'));
	}

	public function updateSiteSettings(Request $request) {
		$input = $request->all();
        $newData = config('modules.site_configs');

        if($request->hasFile('app_white_logo')){
            $app_white_logo = \FilesHelper::uploadFile('settings',$request->file('app_white_logo'),1);
            $newData['app_white_logo'] = '/uploads/settings/1/'. $app_white_logo;
        }
        if($request->hasFile('app_dark_logo')){
            $app_dark_logo = \FilesHelper::uploadFile('settings',$request->file('app_dark_logo'),1);
            $newData['app_dark_logo'] = '/uploads/settings/1/'. $app_dark_logo;
        }
        if($request->hasFile('app_favicon')){
            $app_favicon = \FilesHelper::uploadFile('settings',$request->file('app_favicon'),2);
            $newData['app_favicon'] = '/uploads/settings/2/'. $app_favicon;
        }
        if($request->hasFile('default_upload_img')){
            $default_upload_img = \FilesHelper::uploadFile('settings',$request->file('default_upload_img'),3);
            $newData['default_upload_img'] = '/uploads/settings/3/'. $default_upload_img;
        }
        if($request->hasFile('company_profile')){
            $company_profile = \FilesHelper::uploadFile('settings',$request->file('company_profile'),4);
            $newData['company_profile'] = '/uploads/settings/4/'. $company_profile;
        }
        if(isset($input['app_name_ar']) && !empty($input['app_name_ar'])){
            $newData['app_name_ar'] = (string)$input['app_name_ar'];
        }
        if(isset($input['app_name_en']) && !empty($input['app_name_en'])){
            $newData['app_name_en'] = (string)$input['app_name_en'];
        }
        if(isset($input['app_desc_ar']) && !empty($input['app_desc_ar'])){
            $newData['app_desc_ar'] = $input['app_desc_ar'];
        }
        if(isset($input['app_desc_en']) && !empty($input['app_desc_en'])){
            $newData['app_desc_en'] = $input['app_desc_en'];
        }
        if(isset($input['work_days_desc_ar']) && !empty($input['work_days_desc_ar'])){
            $newData['work_days_desc_ar'] = $input['work_days_desc_ar'];
        }
        if(isset($input['work_days_desc_en']) && !empty($input['work_days_desc_en'])){
            $newData['work_days_desc_en'] = $input['work_days_desc_en'];
        }
        if(isset($input['limitted_size']) && !empty($input['limitted_size'])){
            $newData['limitted_size'] = (int)$input['limitted_size'];
        }
        if(isset($input['pagination']) && !empty($input['pagination'])){
            $newData['pagination'] = (int)$input['pagination'];
        }

        \Helper::updateConfigFile('modules','site_configs',$newData);
        $this->updateGeneralSettings($request);

        \Session::flash('success',trans('Dashboard::dashboard.editSuccess'));
        return redirect()->back()->withInput();
    }

    public function updateGeneralSettings(Request $request){
        $input = $request->all();
        $newData = config('modules.general_configs');
        if(isset($input['phone']) && !empty($input['phone'])){
            $newData['phone'] = (string)$input['phone'];
        }
        if(isset($input['email']) && !empty($input['email'])){
            $newData['email'] = (string)$input['email'];
        }
        if(isset($input['location']) && !empty($input['location'])){
            $newData['location'] = $input['location'];
        }
        if(isset($input['sender_email']) && !empty($input['sender_email'])){
            $newData['sender_email'] = $input['sender_email'];
        }
        if(isset($input['sender_name']) && !empty($input['sender_name'])){
            $newData['sender_name'] = $input['sender_name'];
        }
        if(isset($input['whatsapp']) && !empty($input['whatsapp'])){
            $newData['whatsapp'] = $input['whatsapp'];
        }
        if(isset($input['latitude']) && !empty($input['latitude'])){
            $newData['latitude'] = $input['latitude'];
        }
        if(isset($input['longitude']) && !empty($input['longitude'])){
            $newData['longitude'] = $input['longitude'];
        }
        if(isset($input['calendly_url']) && !empty($input['calendly_url'])){
            $newData['calendly_url'] = $input['calendly_url'];
        }
        $newSocials = [];
        if(isset($input['socials']) && !empty($input['socials'])){
            foreach ($input['socials'] as $key => $value) {
                if(!empty($value) && $value['key'] != null && $value['value'] != null && $value['icon'] != null){
                    $newSocials[]= $value;
                }
            }
        }
        $newData['socials'] = $newSocials;
        $newRecepients = [];
        if(isset($input['recepients']) && !empty($input['recepients'])){
            foreach ($input['recepients'] as $key => $value) {
                if(!empty($value) && $value['value']){
                    $newRecepients[]= $value;
                }
            }
        }
        $newData['recepients'] = $newRecepients;
        $newData['enable_emails'] = isset($input['enable_emails']) ? $input['enable_emails'] : 0;
        if(isset($input['driver']) && !empty($input['driver'])){
            $newData['driver'] = $input['driver'];
        }
        if(isset($input['host']) && !empty($input['host'])){
            $newData['host'] = $input['host'];
        }
        if(isset($input['port']) && !empty($input['port'])){
            $newData['port'] = $input['port'];
        }
        if(isset($input['encryption']) && !empty($input['encryption'])){
            $newData['encryption'] = $input['encryption'];
        }
        if(isset($input['username']) && !empty($input['username'])){
            $newData['username'] = $input['username'];
        }
        if(isset($input['password']) && !empty($input['password'])){
            $newData['password'] = $input['password'];
        }
        
        return \Helper::updateConfigFile('modules','general_configs',$newData);
    }
}