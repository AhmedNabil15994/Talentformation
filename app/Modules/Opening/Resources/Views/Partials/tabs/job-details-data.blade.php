<ul class="nav nav-tabs nav-primary nav-tabs-space-lg nav-tabs-bold" role="tablist">
    @foreach($available_locales as $key => $lang)
    <li class="nav-item mx-2">
        <a class="nav-link {{$key == 0 ? 'active' : ''}}" id="details-tab-{{$key+1}}" data-toggle="tab" href="#details-{{$key+1}}">
            <span class="nav-icon text-white">
                <i class="la la-language icon-xl"></i>
            </span>
            <span class="nav-text"> {{trans('Dashboard::dashboard.'.$lang['name'])}}</span>
        </a>
    </li>
    @endforeach
</ul>
<div class="tab-content mt-5 mb-5" id="myTabContent2">
    @foreach($available_locales as $key => $lang)
    <div class="tab-pane fade {{$key == 0 ? 'active show' : '' }}" id="details-{{$key+1}}" role="tabpanel" aria-labelledby="details-tab-{{$key+1}}">
        <div class="form-group p-0 m-0 mb-5 pt-5">
            <label class="col-form-label">{{ trans('Opening::opening.form.location') }} :</label>
            <input type="text" class="form-control col-md-8" name="job_details[location][{{$lang['prefix']}}]" value="{{ isset($model) ? $model->job_details['location'][$lang['prefix']] : old('job_details[location]['.$lang['prefix'].']') }}" placeholder="{{ trans('Opening::opening.form.location') }}">
        </div>
        <div class="form-group p-0 m-0 mb-5 pt-5">
            <label class="col-form-label">{{ trans('Opening::opening.form.qualifications') }} :</label>
            <input type="text" class="form-control col-md-8" name="job_details[qualifications][{{$lang['prefix']}}]" value="{{ isset($model) ? $model->job_details['qualifications'][$lang['prefix']] : old('job_details[qualifications]['.$lang['prefix'].']') }}" placeholder="{{ trans('Opening::opening.form.qualifications') }}">
        </div>
        <div class="form-group p-0 m-0 mb-5 pt-5">
            <label class="col-form-label">{{ trans('Opening::opening.form.career_level') }} :</label>
            <input type="text" class="form-control col-md-8" name="job_details[career_level][{{$lang['prefix']}}]" value="{{ isset($model) ? $model->job_details['career_level'][$lang['prefix']] : old('job_details[career_level]['.$lang['prefix'].']') }}" placeholder="{{ trans('Opening::opening.form.career_level') }}">
        </div>
        <div class="form-group p-0 m-0 mb-5 pt-5">
            <label class="col-form-label">{{ trans('Opening::opening.form.salary') }} :</label>
            <input type="text" class="form-control col-md-8" name="job_details[salary][{{$lang['prefix']}}]" value="{{ isset($model) ? $model->job_details['salary'][$lang['prefix']] : old('job_details[salary]['.$lang['prefix'].']') }}" placeholder="{{ trans('Opening::opening.form.salary') }}">
        </div>
        <div class="form-group p-0 m-0 mb-5 pt-5">
            <label class="col-form-label">{{ trans('Opening::opening.form.nationality') }} :</label>
            <input type="text" class="form-control col-md-8" name="job_details[nationality][{{$lang['prefix']}}]" value="{{ isset($model) ? $model->job_details['nationality'][$lang['prefix']] : old('job_details[nationality]['.$lang['prefix'].']') }}" placeholder="{{ trans('Opening::opening.form.nationality') }}">
        </div>
        <div class="form-group p-0 m-0 mb-5 pt-5">
            <label class="col-form-label">{{ trans('Opening::opening.form.language') }} :</label>
            <input type="text" class="form-control col-md-8" name="job_details[language][{{$lang['prefix']}}]" value="{{ isset($model) ? $model->job_details['language'][$lang['prefix']] : old('job_details[language]['.$lang['prefix'].']') }}" placeholder="{{ trans('Opening::opening.form.language') }}">
        </div>
    </div>
    @endforeach
</div>

<div class="form-group p-0 m-0 mb-5 col-md-8">
    <label class="">{{ trans('Opening::opening.form.job_status') }} :</label>
    <select name="job_details[job_status]" class="form-control" data-toggle="select2">
        <option value="">{{trans('Dashboard::dashboard.choose')}}</option>        
        <option value="1" {{ '1' == ( isset($model) ? $model->job_details['job_status'] : old('job_details[job_status]') ) ? 'selected' : '' }}>{{ trans('Opening::opening.form.job_status_1') }}</option>
        <option value="2" {{ '2' == ( isset($model) ? $model->job_details['job_status'] : old('job_details[job_status]') ) ? 'selected' : '' }}>{{ trans('Opening::opening.form.job_status_2') }}</option>
        <option value="3" {{ '3' == ( isset($model) ? $model->job_details['job_status'] : old('job_details[job_status]') ) ? 'selected' : '' }}>{{ trans('Opening::opening.form.job_status_3') }}</option>
    </select>
</div>