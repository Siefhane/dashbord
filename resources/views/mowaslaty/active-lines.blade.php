@extends('mowaslaty.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">مواصلاتــى ...الخطوط العاملة - Active Lines </h2>
						  <p class="mg-b-0">Summary For Current Active Lines</p>
						</div>
					</div>
				</div>
				<!-- /breadcrumb -->
@endsection
@section('content')

                <!-- row opened -->
                <div class="row row-sm row-deck">
                    <div class="col-md-12 col-lg-4 col-xl-4">
                        <div class="card card-dashboard-eight pb-2">
                            <h6 class="card-title">السيارت - خط</h6>
                            <h6 class="card-title"> Cars - Lines </h6>
                            <span class="d-block mg-b-10 text-muted tx-12">عدد السيارات الوجودة فى الموقف بكل خط</span>
                            <span class="d-block mg-b-10 text-muted tx-12">Cars Number For Each Line Stayed at the Station At the Current Time</span>
                            <div class="list-group">
                                <div class="list-group-item border-top-0">
                                    <p>أســيــوط</p><p> - Asuit</p><span>10 Vehicles</span>
                                </div>
                                <div class="list-group-item">
                                    <p>الــقــاهــــرة</p><p> - Cairo </p><span>30 Vehicles</span>
                                </div>
                                <div class="list-group-item">
                                    <p>الــمــعــابـدة</p><span>7 ســيــارة</span>
                                </div>
                                <div class="list-group-item">
                                    <p>بنى محمديات</p><span>1 - Vehicle </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 col-xl-8">
                        <div class="card card-table-two">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mb-1">زمن دخول الموقف</h4>
                            </div>
                            <span class="tx-12 tx-muted mb-3 ">زمن دخول الموقف لكل خط</span>
                            <div class="table-responsive country-table">
                                <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                                    <thead>
                                    <tr>
                                        <th class="wd-lg-25p">الخط</th>
                                        <th class="wd-lg-25p tx-right">رقم السيارة</th>
                                        <th class="wd-lg-25p tx-right">اسم السائق</th>
                                        <th class="wd-lg-25p tx-right">وقت الوصول</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>أسيوط - Asuit</td>
                                        <td class="tx-right tx-medium tx-inverse">ي ط ج 123</td>
                                        <td class="tx-right tx-medium tx-inverse">مايكل جون</td>
                                        <td class="tx-right tx-medium tx-inverse">7:00 ص</td>
                                    </tr>
                                    <tr>
                                        <td>القاهرة - Cairo</td>
                                        <td class="tx-right tx-medium tx-inverse">ي ط ا 584</td>
                                        <td class="tx-right tx-medium tx-inverse">ميلاد فتحى</td>
                                        <td class="tx-right tx-medium tx-danger">8:00 ص</td>
                                    </tr>
                                    <tr>
                                        <td>المعابدة</td>
                                        <td class="tx-right tx-medium tx-inverse">ي ب و 231</td>
                                        <td class="tx-right tx-medium tx-inverse">ابراهيم محمود</td>
                                        <td class="tx-right tx-medium tx-danger">10:12 ص</td>
                                    </tr>
                                    <tr>
                                        <td>أسيوط - Asuit</td>
                                        <td class="tx-right tx-medium tx-inverse">ي م م 165</td>
                                        <td class="tx-right tx-medium tx-inverse">فتحى سعد</td>
                                        <td class="tx-right tx-medium tx-danger">10:14 ص</td>
                                    </tr>
                                    <tr>
                                        <td>بنى محمديات</td>
                                        <td class="tx-right tx-medium tx-inverse">ي س ا 458</td>
                                        <td class="tx-right tx-medium tx-inverse">محمد جمعة</td>
                                        <td class="tx-right tx-medium tx-danger">10:22 ص</td>
                                    </tr>
                                    <tr>
                                        <td>القاهرة - Cairo</td>
                                        <td class="tx-right tx-medium tx-inverse">و ا ت 457</td>
                                        <td class="tx-right tx-medium tx-inverse">ايوب فؤاد</td>
                                        <td class="tx-right tx-medium tx-danger">1:10 م</td>
                                    </tr>
                                    <tr>
                                        <td>أسيوط - Asuit</td>
                                        <td class="tx-right tx-medium tx-inverse">ي ب ع 471</td>
                                        <td class="tx-right tx-medium tx-inverse">جمعة رمضان</td>
                                        <td class="tx-right tx-medium tx-danger">2:15 م</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-4 col-md-12 col-lg-12">
						<div class="card">
							<div class="card-header pb-1">
								<h3 class="card-title mb-2">الدور الحالى - Current Turn</h3>
								<p class="tx-12 mb-0 text-muted">Vehicle Main Data</p>
							</div>
							<div class="card-body p-0 customers mt-1">
								<div class="list-group list-lg-group list-group-flush">
									<div class="list-group-item list-group-item-action" href="#">
										<div class="media mt-0">
											<div class="media-body">
												<div class="d-flex align-items-center">
													<div class="mt-0">
                                                        <h5 class="mb-1 tx-15">أسيوط - Asuit</h5>
														<p class="mb-0 tx-13 text-muted">رقم السيارة : ي ق ا 124 <span class="text-success ml-2">فريد فتحى </span></p>
                                                        <p class="mb-0 tx-13 text-muted"> Expected Time To leave : <span class="text-success ml-2">10 Min</span></p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item list-group-item-action" href="#">
										<div class="media mt-0">
											<div class="media-body">
												<div class="d-flex align-items-center">
													<div class="mt-1">
                                                        <h5 class="mb-1 tx-15">القاهرة - Cairo</h5>
														<p class="mb-0 tx-13 text-muted">رقم السيارة : ي ف ق 444 <span class="text-danger ml-2">جوب البير</span></p>
                                                        <p class="mb-0 tx-13 text-muted"> Expected Time To leave : <span class="text-success ml-2">30 Min</span></p>
													</div>
												</div>
											</div>
										</div>
									</div>
                                    <div class="list-group-item list-group-item-action" href="#">
                                        <div class="media mt-0">
                                            <div class="media-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-1">
                                                        <h5 class="mb-1 tx-15">المعابدة</h5>
                                                        <p class="mb-0 tx-13 text-muted">رقم السيارة : ي ث ب 555<span class="text-danger ml-2">ابراهيم فريد</span></p>
                                                        <p class="mb-0 tx-13 text-muted"> Expected Time To leave : <span class="text-success ml-2">Now</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action" href="#">
                                        <div class="media mt-0">
                                            <div class="media-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-1">
                                                        <h5 class="mb-1 tx-15">بنى محمديات</h5>
                                                        <p class="mb-0 tx-13 text-muted">رقم السيارة : ي ي س 5877<span class="text-danger ml-2">محمود احمد</span></p>
                                                        <p class="mb-0 tx-13 text-muted"> Expected Time To leave : <span class="text-success ml-2">1 Min</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>

                    <div class="col-xl-4 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header pb-1">
                                <h3 class="card-title mb-2">الدور التالى - 2nd Turn</h3>
                                <p class="tx-12 mb-0 text-muted">Vehicle Main Data for next turn</p>
                            </div>
                            <div class="card-body p-0 customers mt-1">
                                <div class="list-group list-lg-group list-group-flush">
                                    <div class="list-group-item list-group-item-action" href="#">
                                        <div class="media mt-0">
                                            <div class="media-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-0">
                                                        <h5 class="mb-1 tx-15">أسيوط - Asuit</h5>
                                                        <p class="mb-0 tx-13 text-muted">رقم السيارة : ي ق ا 124 <span class="text-success ml-2">فريد فتحى </span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action" href="#">
                                        <div class="media mt-0">
                                            <div class="media-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-1">
                                                        <h5 class="mb-1 tx-15">القاهرة - Cairo</h5>
                                                        <p class="mb-0 tx-13 text-muted">رقم السيارة : ي ف ق 444 <span class="text-danger ml-2">جوب البير</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action" href="#">
                                        <div class="media mt-0">
                                            <div class="media-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-1">
                                                        <h5 class="mb-1 tx-15">المعابدة</h5>
                                                        <p class="mb-0 tx-13 text-muted">رقم السيارة : ي ث ب 555<span class="text-danger ml-2">ابراهيم فريد</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header pb-1">
                                <h3 class="card-title mb-2">الدور الثالث - 3rd Turn</h3>
                                <p class="tx-12 mb-0 text-muted">بيانات السيارة التى لها الدور الثالث لخدمة الركاب</p>
                            </div>
                            <div class="card-body p-0 customers mt-1">
                                <div class="list-group list-lg-group list-group-flush">
                                    <div class="list-group-item list-group-item-action" href="#">
                                        <div class="media mt-0">
                                            <div class="media-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-0">
                                                        <h5 class="mb-1 tx-15">أسيوط - Asuit</h5>
                                                        <p class="mb-0 tx-13 text-muted">رقم السيارة : ي ق ا 124 <span class="text-success ml-2">فريد فتحى </span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action" href="#">
                                        <div class="media mt-0">
                                            <div class="media-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-1">
                                                        <h5 class="mb-1 tx-15">القاهرة - Cairo</h5>
                                                        <p class="mb-0 tx-13 text-muted">رقم السيارة : ي ف ق 444 <span class="text-danger ml-2">جوب البير</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action" href="#">
                                        <div class="media mt-0">
                                            <div class="media-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-1">
                                                        <h5 class="mb-1 tx-15">المعابدة</h5>
                                                        <p class="mb-0 tx-13 text-muted">رقم السيارة : ي ث ب 555<span class="text-danger ml-2">ابراهيم فريد</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

				</div>
				<!-- row close -->


			</div>
		</div>
		<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>
@endsection
