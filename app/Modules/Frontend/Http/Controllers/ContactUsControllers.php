<?php namespace App\Http\Controllers;

use App\Entities\ContactUs;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;

class ContactUsControllers extends Controller {

    use \TraitsFunc;

    public function index(){
        $pages = [];
        return view('Frontend::contactUs',compact('pages'));
    }

    public function store(ContactUsRequest $request){
        $input = $request->validated();

        $checkObj = ContactUs::where([
            ['email',$input['email']],
            ['status' , 1]
        ])->orWhere([
            ['phone',$input['phone']],
            ['status' , 1]
        ])->first();

        if($checkObj){
            \Session::flash('error',trans('Frontend::home.sentBefore'));
            return redirect()->back()->withInput();
        }

        $input['status'] = 1;
        ContactUs::create($input);

        $sendEmails = config('modules.general_configs.enable_emails');
        if($sendEmails){
            $emailData = [
                'name' => $input['name'],
                'subject' => 'New Message Form Contact Us Form',
                'template' => "frontend.emailUsers.emailReplied",
                'to'    => $input['email'],
                'content' => $input['message'],
            ];
            \MailHelper::sendMail($emailData);
        }
        
        \Session::flash('success',trans('Frontend::home.sentSuccess'));
        return redirect()->back();
    }
}
