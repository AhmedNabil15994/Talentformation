<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
	<!--begin::Header-->
	<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
		<h3 class="font-weight-bold m-0">{{ trans('Dashboard::dashboard.profile') }}</h3>
		<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
			<i class="ki ki-close icon-xs text-muted"></i>
		</a>
	</div>
	<!--end::Header-->
	<!--begin::Content-->
	<div class="offcanvas-content pr-5 mr-n5">
		<!--begin::Header-->
		<div class="d-flex align-items-center mt-5">
			<div class="symbol symbol-100 mr-5">
				<div class="symbol-label" style="background-image:url('{{IMAGE}}')"></div>
				<i class="symbol-badge bg-success"></i>
			</div>
			<div class="d-flex flex-column">
				<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ ucwords(NAME) }}</a>
				<div class="text-muted mt-1">{{ ucwords(ROLE) }}</div>
				<div class="navi mt-2">
					<a href="{{URL::to('/dashboard/logout')}}" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">{{ trans('Dashboard::dashboard.logout') }}</a>
				</div>
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Separator-->
		<div class="separator separator-dashed mt-8 mb-5"></div>
		<!--end::Separator-->
		<!--begin::Nav-->
		<div class="navi navi-spacer-x-0 p-0">
			<!--begin::Item-->
			<a href="{{URL::to('/dashboard/profile')}}" class="navi-item">
				<div class="navi-link">
					<div class="symbol symbol-40 bg-light mr-3">
						<div class="symbol-label">
							<span class="svg-icon svg-icon-md svg-icon-success">
								<!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
										<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold">{{ trans('Dashboard::dashboard.myAccount') }}</div>
						<div class="text-muted">{{trans('Dashboard::dashboard.account_setting')}}
						<span class="label label-light-danger label-inline font-weight-bold">{{ trans('Dashboard::dashboard.update') }}</span></div>
					</div>
				</div>
			</a>
			<!--end:Item-->
		</div>
		<!--end::Nav-->
		<!--begin::Separator-->
		<div class="separator separator-dashed my-7"></div>
		<!--end::Separator-->
	</div>
	<!--end::Content-->
</div>
<!-- end::User Panel-->