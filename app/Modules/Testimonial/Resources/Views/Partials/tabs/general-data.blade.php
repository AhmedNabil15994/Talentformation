<div class="form-group p-0 m-0 mb-5 pt-5">
    <label class="col-form-label">{{ trans('Testimonial::testimonial.form.name') }} :</label>
    <input type="text" class="form-control col-md-8" name="name" value="{{ isset($model) ? $model->name : old('name') }}" placeholder="{{ trans('Testimonial::testimonial.form.name') }}">
</div>
<div class="form-group p-0 m-0 mb-5 pt-5">
    <label class="col-form-label">{{ trans('Testimonial::testimonial.form.position') }} :</label>
    <input type="text" class="form-control col-md-8" name="position" value="{{ isset($model) ? $model->position : old('position') }}" placeholder="{{ trans('Testimonial::testimonial.form.position') }}">
</div>
<div class="form-group p-0 m-0 mb-5 pt-5">
    <label class="col-form-label">{{ trans('Testimonial::testimonial.form.description') }} :</label>
    <textarea  class="form-control col-md-8 ckeditor5" name="description" placeholder="{{ trans('Testimonial::testimonial.form.name') }}" cols="30" rows="10">{{ isset($model) ? $model->description : old('description') }}</textarea>
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

<div class="form-group row p-0 m-0 mb-5">
    <label class="col-form-label">{{trans('Blog::blog.form.image')}}</label>
    <div class="col-12 p-0">
        <div class="image-input image-input-outline" id="kt_image_5" style="background-image: url({{ isset($model) ? $model->image_url : asset(config('modules.site_configs.default_upload_img'))  }})">
            <div class="image-input-wrapper"></div>
            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="{{trans('Blog::blog.form.change_image_p')}}">
                <i class="fa fa-pen icon-sm text-muted"></i>
                <input type="file" name="image"/>
                <input type="hidden" name="image_remove"/>
            </label>

            @if(isset($model) && $model->image_url != '')
                <div class="my-gallery" itemscope="" itemtype="" data-pswp-uid="1">
                    <figure itemprop="associatedMedia" itemscope="" itemtype="">
                        <a href="{{ $model->image_url }}" itemprop="contentUrl" data-size="555x370"><i class="fa fa-search"></i></a>
                        <img src="{{ $model->image_url }}" itemprop="thumbnail" style="display: none;">
                    </figure>
                </div>
            @endif

            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel"><i class="ki ki-bold-close icon-xs text-muted"></i></span>
            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove Background"><i class="ki ki-bold-close icon-xs text-muted"></i></span>
        </div>
    </div>
</div>
