<div class="form-group p-0 m-0 mb-5 pt-5">
    <label for="inputEmail3">{{ trans('JobRequest::jobRequest.form.name') }} :</label>                     
    <input type="text" class="form-control col-md-8" name="name" value="{{isset($model) ? $model->name :old('name')}}" placeholder="{{ trans('JobRequest::jobRequest.form.name') }}">
</div>
<div class="form-group p-0 m-0 mb-5 pt-5">
    <label for="inputEmail3">{{ trans('JobRequest::jobRequest.form.email') }} :</label>                     
    <input type="email" class="form-control col-md-8" name="email" value="{{isset($model) ? $model->email :old('email')}}" placeholder="{{ trans('JobRequest::jobRequest.form.email') }}">
</div>
<div class="form-group p-0 m-0 mb-5 pt-5">
    <label for="inputEmail3">{{ trans('JobRequest::jobRequest.form.phone') }} :</label>                     
    <input type="text" class="form-control col-md-8" name="phone" value="{{isset($model) ? $model->phone :old('phone')}}" placeholder="{{ trans('JobRequest::jobRequest.form.phone') }}">
</div>
@if(isset($model))
@foreach($model->designation_arr as $key => $one)
    <div class="row m-0">
        <div class="form-group p-0 m-0 mb-5 col-md-3 pt-5">
            <label for="inputEmail3">{{ trans('JobRequest::jobRequest.form.designation') }} :</label>
            <input type="text" class="form-control col-md-9" name="designation[]" value="{{$model->designation_arr[$key]}}" placeholder="{{ trans('JobRequest::jobRequest.form.designation') }}">
        </div>
        <div class="form-group p-0 m-0 mb-5 col-md-3 pt-5">
            <label for="inputEmail3">{{ trans('JobRequest::jobRequest.form.company_name') }} :</label>
            <input type="text" class="form-control col-md-9" name="company_name[]" value="{{$model->company_name_arr[$key] ?? ''}}" placeholder="{{ trans('JobRequest::jobRequest.form.company_name') }}">
        </div>
        <div class="form-group p-0 m-0 mb-5 col-md-3 pt-5">
            <label for="inputEmail3">{{ trans('JobRequest::jobRequest.form.work_from') }} :</label>
            <div class="input-group date" >
                <input type="text" name="work_from[]" value="{{$model->work_from_arr[$key] ?? ''}}" class="form-control col-md-9" placeholder="{{ trans('JobRequest::jobRequest.form.work_from') }}" data-target="#kt_datetimepicker_100">
            </div>
        </div>
        <div class="form-group p-0 m-0 mb-5 col-md-3 pt-5">
            <label for="inputEmail3">{{ trans('JobRequest::jobRequest.form.work_to') }} :</label>
            <div class="input-group date"  data-target-input="nearest">
                <input type="text" name="work_to[]" value="{{$model->work_to_arr[$key] ?? ''}}" class="form-control col-md-9" placeholder="{{ trans('JobRequest::jobRequest.form.work_to') }}" data-target="#kt_datetimepicker_200">
            </div>
        </div>
    </div>
@endforeach
@else
    <div class="form-group p-0 m-0 mb-5 pt-5">
        <label for="inputEmail3">{{ trans('JobRequest::jobRequest.form.designation') }} :</label>
        <input type="text" class="form-control col-md-8" name="designation[]" value="{{old('designation[]')}}" placeholder="{{ trans('JobRequest::jobRequest.form.designation') }}">
    </div>
    <div class="form-group p-0 m-0 mb-5 pt-5">
        <label for="inputEmail3">{{ trans('JobRequest::jobRequest.form.company_name') }} :</label>
        <input type="text" class="form-control col-md-8" name="company_name[]" value="{{old('company_name[]')}}" placeholder="{{ trans('JobRequest::jobRequest.form.company_name') }}">
    </div>
    <div class="form-group p-0 m-0 mb-5 pt-5">
        <label for="inputEmail3">{{ trans('JobRequest::jobRequest.form.work_from') }} :</label>
        <div class="input-group date" >
            <input type="text" name="work_from[]" value="{{old('work_from[]')}}" class="form-control col-md-8" placeholder="{{ trans('JobRequest::jobRequest.form.work_from') }}" data-target="#kt_datetimepicker_100">
        </div>
    </div>
    <div class="form-group p-0 m-0 mb-5 pt-5">
        <label for="inputEmail3">{{ trans('JobRequest::jobRequest.form.work_to') }} :</label>
        <div class="input-group date"  data-target-input="nearest">
            <input type="text" name="work_to[]" value="{{old('work_to[]')}}" class="form-control col-md-8" placeholder="{{ trans('JobRequest::jobRequest.form.work_to') }}" data-target="#kt_datetimepicker_200">
        </div>
    </div>
@endif

<div class="form-group p-0 m-0 mb-5 pt-5">
    <label for="inputEmail3">{{ trans('JobRequest::jobRequest.form.current_salary') }} :</label>                     
    <input type="text" class="form-control col-md-8" name="current_salary" value="{{isset($model) ? $model->current_salary :old('current_salary')}}" placeholder="{{ trans('JobRequest::jobRequest.form.current_salary') }}">
</div>
<div class="form-group p-0 m-0 mb-5 pt-5">
    <label for="inputEmail3">{{ trans('JobRequest::jobRequest.form.expected_salary') }} :</label>                     
    <input type="text" class="form-control col-md-8" name="expected_salary" value="{{isset($model) ? $model->expected_salary :old('expected_salary')}}" placeholder="{{ trans('JobRequest::jobRequest.form.expected_salary') }}">
</div>

<div class="form-group  p-0 m-0 mb-5">
    <label class="">{{ trans('JobRequest::jobRequest.form.opening') }} :</label>
    <select name="opening_id" class="form-control col-md-8" data-toggle="select2">
        <option value="">{{trans('Dashboard::dashboard.choose')}}</option>        
        @foreach($data->openings as $opening)
        <option value="{{$opening->id}}" {{$opening->id == ( isset($model) ? $model->opening_id : old('opening_id') ) ? 'selected' : ''}} >{{ $opening->display_name }}</option>
        @endforeach
    </select>
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
    <label>{{ trans('JobRequest::jobRequest.form.cv') }}</label>
    <div></div>
    <div class="custom-file col-md-8">
        <input type="file" name="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label selected" for="customFile"></label>
    </div>
</div>

@if(isset($model) &&  $model->file)
<a href="{{ $model->file_url }}" class="btn btn-sm btn-secondary" data-toggle="tooltip" data-original-title="{{ $model->file }}" target="_blank"> <i class="la la-eye"></i> {{ trans('Dashboard::dashboard.view') }}</a>
@endif


@push('js')
<script>
    $(function(){

    })
</script>
@endpush