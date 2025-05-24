<div class="form-group p-0 m-0 mb-5 pt-5">
    <label for="inputEmail3">{{ trans('JoinTeam::joinTeam.form.name') }} :</label>                     
    <input type="text" class="form-control col-md-8" name="name" value="{{isset($model) ? $model->name :old('name')}}" placeholder="{{ trans('JoinTeam::joinTeam.form.name') }}">
</div>
<div class="form-group p-0 m-0 mb-5 pt-5">
    <label for="inputEmail3">{{ trans('JoinTeam::joinTeam.form.email') }} :</label>                     
    <input type="email" class="form-control col-md-8" name="email" value="{{isset($model) ? $model->email :old('email')}}" placeholder="{{ trans('JoinTeam::joinTeam.form.email') }}">
</div>
<div class="form-group p-0 m-0 mb-5 pt-5">
    <label for="inputEmail3">{{ trans('JoinTeam::joinTeam.form.phone') }} :</label>                     
    <input type="text" class="form-control col-md-8" name="phone" value="{{isset($model) ? $model->phone :old('phone')}}" placeholder="{{ trans('JoinTeam::joinTeam.form.phone') }}">
</div>
<div class="form-group p-0 m-0 mb-5 pt-5">
    <label for="inputEmail3">{{ trans('JoinTeam::joinTeam.form.designation') }} :</label>                     
    <input type="text" class="form-control col-md-8" name="designation" value="{{isset($model) ? $model->designation :old('designation')}}" placeholder="{{ trans('JoinTeam::joinTeam.form.designation') }}">
</div>


<div class="form-group row p-0 m-0 mb-5">
    <label class="col-form-label">{{ trans('Role::role.form.status') }} :</label>
    <div class="col-12 p-0">
        <span class="switch switch-icon">
            <label>
                <input type="checkbox" value="1" name="status" {{ isset($model) ? ($model->status  == 1 ? 'checked' : '') : 'checked' }}/>
                <span></span>
            </label>
        </span>
    </div>
</div>

<div class="form-group p-0 m-0 mb-5">
    <label>{{ trans('JoinTeam::joinTeam.form.cv') }}</label>
    <div></div>
    <div class="custom-file col-md-8">
        <input type="file" name="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label selected" for="customFile"></label>
    </div>
</div>
@if(isset($model) &&  $model->file)
<a href="{{ $model->file_url }}" class="btn btn-sm btn-secondary" data-toggle="tooltip" data-original-title="{{ $model->file }}" target="_blank"> <i class="la la-eye"></i> {{ trans('Dashboard::dashboard.view') }}</a>
@endif
