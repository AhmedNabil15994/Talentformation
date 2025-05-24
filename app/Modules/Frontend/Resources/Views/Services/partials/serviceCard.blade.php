<div class="col-lg-4 col-md-6">
    <div class="featured-imagebox featured-imagebox-sevices b-r style1">
        <div class="featured-thumbnail">
            <a href="{{ URL::to('/services',['id'=>$service->id]) }}"> <img class="img-fluid" src="{{ $service->image_url }}" alt="">
            </a>
        </div>
        <div class="featured-content">
            <div class="featured-title">
                <h3><a href="services-details.php">{{ $service->title }}</a></h3>
            </div>
            <div class="featured-desc">
                {{mb_substr(strip_tags($service->description), 0, 200)}}....
            </div>
            <div class="featured-icon">
                <a class="ttm-btn ttm-btn-size-md  ttm-btn-shape-rounded ttm-btn-style-fill ttm-icon-btn-right ttm-btn-color-skincolor" href="{{ URL::to('/services',['id'=>$service->category_id]) }}">{{ trans('Frontend::home.pages.home.read_more') }}</a>
            </div>
        </div>
    </div>
</div>