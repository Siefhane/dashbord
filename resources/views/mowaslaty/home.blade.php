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
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">مواصلاتــى ... أهلاً بــك</h2>
						  <p class="mg-b-0">لوحة التحكم فى الموقف والتطبيقات الخاصة بمواصلاتى</p>
                          <p class="mg-b-0">Dashboard to control Vehicles Station & Different mobile Apps of "MWASLATY"</p>
						</div>
					</div>
				</div>
				<!-- /breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
                                    <a href="{{ url('/' . $page='mowaslaty.driver-list') }}">
									<h6 class="mb-3 tx-12 text-white">عدد السيارات بالموقف</h6>
                                    <h6 class="mb-3 tx-12 text-white">Total Vehicles Count</h6>
                                    </a>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
                                            <a href="{{ url('/' . $page='mowaslaty.driver-list') }}">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">40 سيارة</h4>
											<p class="mb-0 tx-12 text-white op-7">عدد السيارات المنتظرة لكل الخطوط الأن</p>
                                            <p class="mb-0 tx-12 text-white op-7">Total count of cars at the stop at the current time</p>
                                            </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-success-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
                                    <a href="{{ url('/' . $page='mowaslaty.active-lines') }}">
									<h6 class="mb-3 tx-12 text-white">الخطوط الموجودة</h6>
                                    <h6 class="mb-3 tx-12 text-white">Current Active Lines</h6>
                                    </a>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
                                            <a href="{{ url('/' . $page='mowaslaty.active-lines') }}">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">6 خطوط</h4>
											<p class="mb-0 tx-12 text-white op-7">عدد الخطوط التى لها سيارت موجودة بالموقف الان</p>
                                            <p class="mb-0 tx-12 text-white op-7">Total Number Of Lines That Have Cars at the Moment At the Station</p>
                                            </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
                                    <a href="{{ url('/' . $page='mowaslaty.inactive-lines') }}">
									<h6 class="mb-3 tx-12 text-white">الخطوط الغير موجودة</h6>
                                    <h6 class="mb-3 tx-12 text-white">Current INActive Lines</h6>
                                    </a>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
                                            <a href="{{ url('/' . $page='mowaslaty.inactive-lines') }}">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">4 خطوط</h4>
											<p class="mb-0 tx-12 text-white op-7">عدد الخطوط التى ليست لها سيارت بالموقف الان</p>
                                            <p class="mb-0 tx-12 text-white op-7">Total Number Of Lines "NO-Cars" at the Moment At the Station</p>
                                            </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-warning-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">زمن اخر دخول</h6>
                                    <h6 class="mb-3 tx-12 text-white">Last Car Enterance Time</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">10:40 صباحاً</h4>
											<p class="mb-0 tx-12 text-white op-7">زمن دخول اخر سيارة للموقف اليوم</p>
                                            <p class="mb-0 tx-12 text-white op-7">Last Time Recorded for entering the station</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

                <!-- row opened -->
                <div class="row row-sm row-deck">
                    <div class="col-md-12 col-lg-4 col-xl-4">
                        <div class="card card-dashboard-eight pb-2">
                            <h6 class="card-title">السيارت - خط</h6>
                            <h6 class="card-title"> Cars - Lines </h6>
                            <span class="d-block mg-b-10 text-muted tx-12">عدد السيارات الموجودة فى الموقف بكل خط</span>
                            <span class="d-block mg-b-10 text-muted tx-12">Cars Number For Each Line Stayed at the Station At the Current Time</span>
                            <div class="list-group">
                                <div class="list-group-item border-top-0">
                                    <p>أســيــوط</p><p> - Asuit</p><span>10 Vehicles</span>
                                </div>
                                <div class="list-group-item">
                                    <p>الــقــاهــــرة</p><p> - Cairo </p><span>30 Vehicles</span>
                                </div>
                                <div class="list-group-item">
                                    <p>الــمــعــابـدة</p><p> - Moabdah </p><span>7 ســيــارة</span>
                                </div>
                                <div class="list-group-item">
                                    <p>الــحــمــام</p><p> - Hamam </p><span>---- No Cars ---</span>
                                </div>
                                <div class="list-group-item">
                                    <p>بنى محمديات</p><p> - Bany Mohamed</p><span>4 ســيــارة</span>
                                </div>
                                <div class="list-group-item border-bottom-0 mb-0">
                                    <p>عرب العوامر</p><p> - Arab Awamer </p><span>---- No Cars ---</span>
                                </div>
                                <div class="list-group-item border-bottom-0 mb-0">
                                    <p>المدينة الصناعية</p><p> - Industrial City</p><span>---- No Cars ---</span>
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
                            <span class="tx-12 tx-muted mb-3 ">Last Car Entrance time for each line</span>
                            <div class="table-responsive country-table">
                                <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                                    <thead>
                                    <tr>
                                        <th class="wd-lg-25p">Line - الخط</th>
                                        <th class="wd-lg-25p tx-right">Car Plate Number - رقم السيارة</th>
                                        <th class="wd-lg-25p tx-right">Driver Name - اسم السائق</th>
                                        <th class="wd-lg-25p tx-right">ِEntrance Time - وقت الوصول للموقف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>أسيوط</td>
                                        <td class="tx-right tx-medium tx-inverse">ي ط ج 123</td>
                                        <td class="tx-right tx-medium tx-inverse">مايكل جون</td>
                                        <td class="tx-right tx-medium tx-inverse">7:00 ص</td>
                                    </tr>
                                    <tr>
                                        <td>Asuit</td>
                                        <td class="tx-right tx-medium tx-inverse">Y T G 123</td>
                                        <td class="tx-right tx-medium tx-inverse">M. John</td>
                                        <td class="tx-right tx-medium tx-inverse">7:00 AM</td>
                                    </tr>
                                    <tr>
                                        <td>القاهرة</td>
                                        <td class="tx-right tx-medium tx-inverse">ي ط ا 584</td>
                                        <td class="tx-right tx-medium tx-inverse">ميلاد فتحى</td>
                                        <td class="tx-right tx-medium tx-danger">8:00 ص</td>
                                    </tr>
                                    <tr>
                                        <td>Cairo</td>
                                        <td class="tx-right tx-medium tx-inverse">Y T A 584</td>
                                        <td class="tx-right tx-medium tx-inverse">Milad Fathy</td>
                                        <td class="tx-right tx-medium tx-danger">8:00 AM</td>
                                    </tr>
                                    <tr>
                                        <td>المعابدة</td>
                                        <td class="tx-right tx-medium tx-inverse">ي ب و 231</td>
                                        <td class="tx-right tx-medium tx-inverse">ابراهيم محمود</td>
                                        <td class="tx-right tx-medium tx-danger">10:12 ص</td>
                                    </tr>
                                    <tr>
                                        <td>الحمام</td>
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
                                        <td>عرب العوامر</td>
                                        <td class="tx-right tx-medium tx-inverse">و ا ت 457</td>
                                        <td class="tx-right tx-medium tx-inverse">ايوب فؤاد</td>
                                        <td class="tx-right tx-medium tx-danger">1:10 م</td>
                                    </tr>
                                    <tr>
                                        <td>المدينة الصناعية</td>
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
								<h3 class="card-title mb-2">الدور الحالى</h3>
                                <h3 class="card-title mb-2">Row Number</h3>
								<p class="tx-12 mb-0 text-muted">بيانات السيارة التى عليها الدور الان لخدمة الركاب</p>
                                <p class="tx-12 mb-0 text-muted">Details of the car that is now on its turn to serve passengers</p>
							</div>
							<div class="card-body p-0 customers mt-1">
								<div class="list-group list-lg-group list-group-flush">
									<div class="list-group-item list-group-item-action" href="#">
										<div class="media mt-0">
											<div class="media-body">
												<div class="d-flex align-items-center">
													<div class="mt-0">
														<h5 class="mb-1 tx-15">اسيوط</h5>
                                                        <h5 class="mb-1 tx-15">Asuit</h5>
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
														<h5 class="mb-1 tx-15">القاهرة</h5>
                                                        <h5 class="mb-1 tx-15">Cairo</h5>
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
                                    <div class="list-group-item list-group-item-action" href="#">
                                        <div class="media mt-0">
                                            <div class="media-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-1">
                                                        <h5 class="mb-1 tx-15">الحمام</h5>
                                                        <p class="mb-0 tx-13 text-muted">رقم السيارة : ------<span class="text-danger ml-2"></span></p>
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
                                                        <h5 class="mb-1 tx-15">عرب العوامر</h5>
                                                        <p class="mb-0 tx-13 text-muted">رقم السيارة : -----<span class="text-danger ml-2"></span></p>
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
                                                        <h5 class="mb-1 tx-15">المدينة الصناعية</h5>
                                                        <p class="mb-0 tx-13 text-muted">رقم السيارة :  ------ <span class="text-danger ml-2"></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-md-12 col-lg-6">
						<div class="card">
							<div class="card-header pb-0">
								<h3 class="card-title mb-2">نسبة الانتظار</h3>
                                <h3 class="card-title mb-2">Waiting rate</h3>
								<p class="tx-12 mb-0 text-muted">Clarifying the percentage of cars currently waiting in the parking lot compared to the total capacity of the parking lot</p>
                                <p class="tx-12 mb-0 text-muted">توضيح نسبة السيارات المنتظرة الان فى الموقف مقارنة السعة الاجمالية للموقف</p>
							</div>
							<div class="card-body sales-info ot-0 pt-0 pb-0">
								<div id="chart" class="ht-150"></div>
								<div class="row sales-infomation pb-0 mb-0 mx-auto wd-100p">
									<div class="col-md-6 col">
										<p class="mb-0 d-flex">السعة الكلية</p>
                                        <p class="mb-0 d-flex">Total capacity</p>
                                        <h3 class="mb-1">172 Cars</h3>
									</div>
									<div class="col-md-6 col">
										<p class="mb-0 d-flex">السيارت الموجودة</p>
                                        <p class="mb-0 d-flex">Existing cars</p>
                                        <h3 class="mb-1">142 Cars</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="card ">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="d-flex align-items-center pb-2">
                                            <p class="mb-0">Total number of cars</p>
										</div>
                                        <h4 class="font-weight-bold mb-2">742 Cars</h4>
										<div class="progress progress-style progress-sm">
											<div class="progress-bar bg-primary-gradient wd-80p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
										</div>
									</div>
									<div class="col-md-6 mt-4 mt-md-0">
										<div class="d-flex align-items-center pb-2">
											<p class="mb-0">Working cars</p>
										</div>
										<h4 class="font-weight-bold mb-2">318 Cars</h4>
										<div class="progress progress-style progress-sm">
											<div class="progress-bar bg-danger-gradient wd-75" role="progressbar"  aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
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
