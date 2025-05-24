<div class="col-lg-4 col-md-6">
    <!-- featured-imagebox-blog -->
    <div class="featured-imagebox featured-imagebox-post style1 box-shadow2">
        <div class="ttm-box-view-overlay">
            <div class="featured-thumbnail">
                <!-- featured-thumbnail -->
                <img class="img-fluid" src="{{ $blog->image_url }}" alt="">
            </div>
            <div class="ttm-media-link">
                <a href="{{ URL::to('/blogs',['id'=>$blog->id]) }}" tabindex="0" class="ttm-icon ttm-icon_element-border ttm-icon_element-style-round ttm-icon_element-color-skincolor ttm-icon_element-size-xs">
                    <i class="flaticon flaticon-right-arrow"></i>
                </a>
            </div>
        </div>
        <div class="featured-content">
            <!-- featured-content -->
            <div class="post-meta post-category">
                <!-- post-meta -->
                <span class="ttm-entry-date">
                    <time class="entry-date" datetime="{{ $blog->date }}">{{ date('d',strtotime($blog->date)) }} <span class="entry-month entry-year">{{ date('M, Y',strtotime($blog->date)) }}</span></time>
                </span>
            </div>
            <div class="featured-title">
                <!-- featured-title -->
                <h3><a href="{{ URL::to('/blogs',['id'=>$blog->id]) }}">{{ $blog->title }}</a></h3>
            </div>

        </div>
    </div><!-- featured-imagebox-blog end -->
</div>