@extends('mowaslaty.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!---Internal  Prism css-->
<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
<!---Internal Input tags css-->
<link href="{{URL::asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">
<!--- Custom-scroll -->
<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">مواصلاتــى ...الخطوط العاملة - inActive Lines </h2>
                <p class="mg-b-0">Summary For Current inActive Lines</p>
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
                <h6 class="card-title">السيارت - خط</h6><span class="d-block mg-b-10 text-muted tx-12">عدد السيارات الوجودة فى الموقف بكل خط</span>
                <div class="list-group">
                    <div class="list-group-item border-top-0">
                        <p>أســيــوط</p><span>10 Vehicles</span>
                    </div>
                    <div class="list-group-item">
                        <p>الــقــاهــــرة</p><span>30 Vehicles</span>
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
					<!--div-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">سيارات الطوارئ - Emergency vehicles</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Cars Registered & Drivers operate by phone calls at any time</p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>
												<th class="border-bottom-0">#</th>
												<th class="border-bottom-0">الـخـط</th>
												<th class="border-bottom-0">رقم السيارة</th>
												<th class="border-bottom-0">عدد الرحلات الشهر الحالى</th>
												<th class="border-bottom-0">متوسط عدد الرحلات</th>
												<th class="border-bottom-0">وقت أخر رحلة</th>
                                                <th class="border-bottom-0">مالك السيارة</th>
                                                <th class="border-bottom-0">رقم الهاتف</th>
                                                <th class="border-bottom-0">نهاية الرخصة</th>
                                                <th class="border-bottom-0">ملاحظات : </th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>أسيوط</td>
												<td>ي د أ 654</td>
												<td>3</td>
												<td>80</td>
												<td>2023/10/25</td>
                                                <td>أمجد ابراهيم</td>
                                                <td>010141414156</td>
                                                <td>2024/04/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
											</tr>
                                            <tr>
                                                <td>2</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>القاهرة</td>
                                                <td>ب ق د أ 124</td>
                                                <td>5</td>
                                                <td>17</td>
                                                <td>2023/10/30</td>
                                                <td>أحمد رمضان</td>
                                                <td>010710486856</td>
                                                <td>2024/08/25</td>
                                                <td>الملاحظة على السائق انه غير ملتزم بالمواعيد</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>أسيوط</td>
                                                <td>ج د أ 122</td>
                                                <td>12</td>
                                                <td>15</td>
                                                <td>2023/10/10</td>
                                                <td>فؤاد يحيى</td>
                                                <td>010047458856</td>
                                                <td>2024/05/12</td>
                                                <td>لا توجد ملاحظة</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>القاهرة</td>
                                                <td>ي ب أ 111</td>
                                                <td>2</td>
                                                <td>8</td>
                                                <td>2023/10/10</td>
                                                <td>خالد محمد</td>
                                                <td>010142021506</td>
                                                <td>2025/01/25</td>
                                                <td>لا توجد ملاحظات</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>بنى محمديات</td>
                                                <td>ي ج أ 410</td>
                                                <td>12</td>
                                                <td>79</td>
                                                <td>2023/10/23</td>
                                                <td>حداد ابراهيم</td>
                                                <td>012091488856</td>
                                                <td>2024/06/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection
