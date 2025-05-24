@php
   $statistics = \App\Entities\Section::active()->wherePageId(1)->orderBy('id','desc')->take(4)->get();
@endphp
<!-- padding_bottom_zero-section -->
<section class="ttm-row padding_zero-section  ttm-bgcolor-white clearfix">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="ttm-bgcolor-white spacing-7 position-relative z-index-1  box-shadow2 border-rad_5">
                    <!-- slick_slider -->
                    <div class="row">
                        @foreach($statistics as $statistic)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <!-- ttm-fid -->
                            <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon style1">
                                <div class="ttm-fid-contents">
                                    <h4 class="ttm-fid-inner">
                                        <span data-appear-animation="animateDigits" data-from="0" data-to="{{ strip_tags($statistic->description) }}" data-interval="5" data-before="" data-before-style="sup" data-after="%" data-after-style="sub" class="numinate">{{ strip_tags($statistic->description) }}
                                        </span>
                                        <span>+</span>
                                    </h4>
                                    <h3 class="ttm-fid-title">{{ $statistic->title }}</h3>
                                </div>
                            </div><!-- ttm-fid end -->
                        </div>
                        @endforeach
                    </div><!-- row end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- padding_bottom_zero-section end -->
