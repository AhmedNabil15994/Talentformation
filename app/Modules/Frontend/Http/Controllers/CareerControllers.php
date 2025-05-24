<?php namespace App\Http\Controllers;
use App\Entities\JoinTeam;
use App\Entities\Opening;
use App\Http\Requests\JobApplicationRequest;
use App\Http\Requests\JoinTeamRequest;
use Illuminate\Http\Request;

class CareerControllers extends Controller {

    use \TraitsFunc;

    public function index(Request $request){
        $search = $request->search ?? '';
        $openings = Opening::active()->where(function ($whereQuery) use ($search){
            $whereQuery->where('job_details->location','LIKE','%'.$search.'%')
                        ->orWhere('job_details->qualifications','LIKE','%'.$search.'%')
                        ->orWhere('job_details->career_level','LIKE','%'.$search.'%');
        })->paginate(config('modules.site_configs.pagination'));
        return view('Frontend::Careers.index',compact('openings'));
    }

    public function show($id){
        $id = (int) $id;
        $opening = Opening::active()->findOrFail($id);
        $opening->increaseViews();
        return view('Frontend::Careers.show',compact('opening'));
    }

    public function cv(){
        return view('Frontend::Careers.cv');
    }

    public function post_cv($id,JobApplicationRequest $request){
        $input = $request->validated();
        $id = (int) $id;
        $opening = Opening::active()->findOrFail($id);

        $checkObj = JoinTeam::where([
            ['email',$input['email']],
            ['opening_id' , $id],
            ['status' , 1]
        ])->orWhere([
            ['phone',$input['phone']],
            ['opening_id' , $id],
            ['status' , 1]
        ])->first();

//        if($checkObj){
//            \Session::flash('error',trans('Frontend::home.sentBefore'));
//            return redirect()->back()->withInput();
//        }

        $input['name'] = $input['first_name'] . ' ' . $input['last_name'];
        $input['status'] = 1;
        $input['opening_id'] = $id;

        unset($input['first_name']);
        unset($input['last_name']);
        unset($input['file']);
        $model = JoinTeam::create($input);

        if($request->hasFile('file')){
            $updateData['file'] = \FilesHelper::uploadFile('join_teams',$request->file('file'),$model->id);
            $model->update($updateData);
        }
        
        \Session::flash('success',trans('Frontend::home.sentSuccess'));
        return redirect()->back();
    }

    public function our_team(){
        return view('Frontend::Careers.our_team');
    }

    public function join_our_team(JoinTeamRequest $request){
        $input = $request->validated();
        $checkObj = JoinTeam::where([
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

        unset($input['file']);
        $input['status'] = 1;
        $model = JoinTeam::create($input);

        if($request->hasFile('file')){
            $updateData['file'] = \FilesHelper::uploadFile('join_teams',$request->file('file'),$model->id);
            $model->update($updateData);
        }
        
        \Session::flash('success',trans('Frontend::home.sentSuccess'));
        return redirect()->back();
    }

}
