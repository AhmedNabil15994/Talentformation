<div class="col-lg-4 col-md-12">
    <div class="featured-icon-box icon-align-bottom-content box-shadow style7">
        <div class="featured-content">
            <div class="featured-title">
                <h3>{{ $opening->title }}</h3>
            </div>
            <div class="featured-desc">{{ $opening->job_details['location'][LANGUAGE_PREF] }}</div>
        </div>
        <div class="featured-icon">
            <a class="ttm-btn ttm-btn-size-md  ttm-btn-shape-rounded ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-grey " href="{{ URL::to('/careers/openings',['id'=> $opening->id]) }}">{{ trans('Frontend::home.pages.view_openings.first_section.btn') }}</a>
        </div>
    </div>
</div>