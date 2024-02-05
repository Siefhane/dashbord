@extends('mowaslaty.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الموقف</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ المسئولين عن الموقف</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-sm-12 col-lg-5 col-xl-4">
						<div class="card custom-card">
							<div class="">
								<div class="main-content-app main-content-contacts pt-0">
									<div class="main-content-left main-content-left-contacts">
										<nav class="nav main-nav-line main-nav-line-chat  pl-3">
											<a class="nav-link active" data-toggle="tab" href="">القائمة كاملة</a>
										</nav>
										<div class="main-contacts-list" id="mainContactList">

											<div class="main-contact-item selected">
												<div class="main-img-user online"><img alt="avatar" src="{{URL::asset('assets/img/faces/2.jpg')}}"></div>
												<div class="main-contact-body">
													<h6>أحمد ابراهيم</h6><span class="phone">048-5251789</span>
												</div>
												<a class="main-contact-star" href="">
													<i class="fe fe-edit-2 mr-1"></i>
													<i class="fe fe-more-vertical"></i>
												</a>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/faces/3.jpg')}}"></div>
												<div class="main-contact-body">
													<h6>بيشوى فضل</h6>
                                                    <span>beshoy@cantones.com</span>
                                                    <br>
                                                    <span>01254789666</span>
												</div>
												<a class="main-contact-star" href="">
													<i class="fe fe-edit-2 mr-1"></i>
													<i class="fe fe-more-vertical"></i>
												</a>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/faces/4.jpg')}}"></div>
												<div class="main-contact-body">
													<h6>هشام محمد</h6><span>011145874596</span>
												</div>
												<a class="main-contact-star" href="">
													<i class="fe fe-edit-2 mr-1"></i>
													<i class="fe fe-more-vertical"></i>
												</a>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user online"><img alt="avatar" src="{{URL::asset('assets/img/faces/5.jpg')}}"></div>
												<div class="main-contact-body">
													<h6>محمد ابراهيم</h6><span>01019585873</span>
												</div>
												<a class="main-contact-star" href="">
													<i class="fe fe-edit-2 mr-1"></i>
													<i class="fe fe-more-vertical"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-7 col-xl-8">
						<div class="">
							<a class="main-header-arrow" href="" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
							<div class="main-content-body main-content-body-contacts card custom-card">
								<div class="main-contact-info-header pt-3">
									<div class="media">
										<div class="main-img-user">
											<img alt="avatar" src="{{URL::asset('assets/img/faces/6.jpg')}}"> <a href=""><i class="fe fe-camera"></i></a>
										</div>
										<div class="media-body">
											<h5>ا/ محمد ابراهيم</h5>
											<p>مسئول موقف ابنوب</p>
											<nav class="contact-info">
												<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Call"><i class="fe fe-phone"></i></a>
												<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Video"><i class="fe fe-video"></i></a>
												<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="message"><i class="fe fe-message-square"></i></a>
												<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Add to Group"><i class="fe fe-user-plus"></i></a>
												<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Block"><i class="fe fe-slash"></i></a>
											</nav>
										</div>
									</div>
									<div class="main-contact-action btn-list pt-3 pr-3">
										<a href="#" class="btn ripple btn-primary text-white btn-icon" data-placement="top" data-toggle="tooltip" title="Edit Profile"><i class="fe fe-edit"></i></a>
										<a href="#" class="btn ripple btn-secondary text-white btn-icon" data-placement="top" data-toggle="tooltip" title="Delete Profile"><i class="fe fe-trash-2"></i></a>
									</div>
								</div>
								<div class="main-contact-info-body p-4">
									<div>
										<h6>السيرة الذاتية</h6>
										<p>مدير موقف سيارات ذو خبرة 5 سنوات في إدارة وتشغيل مواقف السيارات. حاصل على درجة البكالوريوس في إدارة الأعمال من جامعة القاهرة. يتمتع بخبرة في إدارة الموظفين وتطوير العمليات وتحسين الكفاءة.</p>
										<p></p>
									</div>
									<div class="media-list pb-0">
										<div class="media">
											<div class="media-body">
												<div>
													<label>العمل</label> <span class="tx-medium">048-5801254</span>
												</div>
												<div>
													<label>الشخصى</label> <span class="tx-medium">0125478963</span>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-body">
												<div>
													<label>البريد الالكترونى</label> <span class="tx-medium">m.ibrahim@gmail.com</span>
												</div>
												<div>
													<label>بريد الكترونى بديل</label> <span class="tx-medium">me@bootstrapdash.me</span>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-body">
												<div>
													<label>العنوان</label> <span class="tx-medium">أبنوب - درب العمدة</span>
												</div>
											</div>
										</div>
										<div class="media mb-0">
											<div class="media-body">
												<div>
													<label>ملاحظات</label> <span class="tx-medium">الاتصال بعد الساعة الخامسة على رقم 012587444444</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <div class="main-content-body card custom-card">
                                <div class="main-contact-info-header pt-3">
                                    <div class="media">
                                        <div class="main-img-user">
                                            <img alt="avatar" src="{{URL::asset('assets/img/faces/6.jpg')}}"> <a href=""><i class="fe fe-camera"></i></a>
                                        </div>
                                        <div class="media-body">
                                            <h5>ا/ هشام محمد</h5>
                                            <p>مسئول المواقف</p>
                                            <nav class="contact-info">
                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Call"><i class="fe fe-phone"></i></a>
                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Video"><i class="fe fe-video"></i></a>
                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="message"><i class="fe fe-message-square"></i></a>
                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Add to Group"><i class="fe fe-user-plus"></i></a>
                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Block"><i class="fe fe-slash"></i></a>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="main-contact-action btn-list pt-3 pr-3">
                                        <a href="#" class="btn ripple btn-primary text-white btn-icon" data-placement="top" data-toggle="tooltip" title="Edit Profile"><i class="fe fe-edit"></i></a>
                                        <a href="#" class="btn ripple btn-secondary text-white btn-icon" data-placement="top" data-toggle="tooltip" title="Delete Profile"><i class="fe fe-trash-2"></i></a>
                                    </div>
                                </div>
                                <div class="main-contact-info-body p-4">
                                    <div>
                                        <h6>السيرة الذاتية</h6>
                                        <p>مدير موقف سيارات ذو خبرة 5 سنوات في إدارة وتشغيل مواقف السيارات. حاصل على درجة البكالوريوس في إدارة الأعمال من جامعة القاهرة. يتمتع بخبرة في إدارة الموظفين وتطوير العمليات وتحسين الكفاءة.</p>
                                        <p></p>
                                    </div>
                                    <div class="media-list pb-0">
                                        <div class="media">
                                            <div class="media-body">
                                                <div>
                                                    <label>العمل</label> <span class="tx-medium">048-85874569</span>
                                                </div>
                                                <div>
                                                    <label>الشخصى</label> <span class="tx-medium">011187459660</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <div>
                                                    <label>البريد الالكترونى</label> <span class="tx-medium">h.ali@gmail.com</span>
                                                </div>
                                                <div>
                                                    <label>البريد الالكترونى البديل</label> <span class="tx-medium">hesham.ali@egyprocto.me</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <div>
                                                    <label>العنوان</label> <span class="tx-medium">أسيوط - شارع الجمهورية - عمارة رقم 15</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media mb-0">
                                            <div class="media-body">
                                                <div>
                                                    <label>ملاحظات</label> <span class="tx-medium">رقم هاتف العمل يعمل على مدار 24 ساعة</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
				<!-- End Row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Contact js -->
<script src="{{URL::asset('assets/js/contact.js')}}"></script>
@endsection
