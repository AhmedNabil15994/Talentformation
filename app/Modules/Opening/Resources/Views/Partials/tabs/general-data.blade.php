@include('dashboard.Layouts.crud.localize_inputs')
<div class="tab-content mt-5" id="myTabContent">
    @foreach($available_locales as $key => $lang)
    <div class="tab-pane fade {{$key == 0 ? 'active show' : '' }}" id="home-{{$key+1}}" role="tabpanel" aria-labelledby="home-tab-{{$key+1}}">
        <div class="form-group p-0 m-0 mb-5 pt-5">
            <label class="col-form-label">{{ trans('Opening::opening.form.title_'.$lang['prefix']) }} :</label>
            <input type="text" class="form-control col-md-8" name="title_{{$lang['prefix']}}" value="{{ isset($model) ? $model->{'title_'.$lang['prefix']} : old('title_'.$lang['prefix']) }}" placeholder="{{ trans('Opening::opening.form.title_'.$lang['prefix']) }}">
        </div>
        <div class="form-group p-0 m-0 mb-5 pt-5">
            <label class="col-form-label">{{ trans('Opening::opening.form.brief_'.$lang['prefix']) }} :</label>
            <textarea  class="form-control col-md-8 ckeditor5" name="brief_{{$lang['prefix']}}" placeholder="{{ trans('Opening::opening.form.brief_'.$lang['prefix']) }}" cols="30" rows="10">{{ isset($model) ? $model->{'brief_'.$lang['prefix']} : old('brief_'.$lang['prefix']) }}</textarea>
        </div>
        <div class="form-group p-0 m-0 mb-5 pt-5">
            <label class="col-form-label">{{ trans('Opening::opening.form.description_'.$lang['prefix']) }} :</label>
            <textarea  class="form-control col-md-8 ckeditor5" name="description_{{$lang['prefix']}}" placeholder="{{ trans('Opening::opening.form.description_'.$lang['prefix']) }}" cols="30" rows="10">{{ isset($model) ? $model->{'description_'.$lang['prefix']} : old('description_'.$lang['prefix']) }}</textarea>
        </div>
    </div>
    @endforeach
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
