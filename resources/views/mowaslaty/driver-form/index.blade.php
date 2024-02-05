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
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">السيارات</h4>
                            <td><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة بكل السيارات</span></td>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row opened -->
				<div class="row row-sm">
					<!--div-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">السيارات المسجلة</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								="tx-12 tx-gray-500 mb-2">قائمة بكل السيارات المسجلة فى الموقف وعرض البيانات الرئيسية لكل سيارة
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>
                                                <th class="border-bottom-0"># </th>
                                              
                                                <th class="border-bottom-0">ادارة مرور</th>
                                                <th class="border-bottom-0">وحدة مرور</th>
                                                <th class="border-bottom-0">الاسم</th>
                                                <th class="border-bottom-0">الجنسية</th>
                                                <th class="border-bottom-0">رقم الرخصة</th>
                                                <th class="border-bottom-0">رقم الهاتف</th>
                                                <th class="border-bottom-0">نهاية الترخيص</th>
                                                <th class="border-bottom-0">صورة من الرخصة </th>                                           </tr>
										</thead>
										<tbody>
											<tr>
                                                <!-- Add these elements to your HTML file -->
												<td></td>
												<td><span id="govDisplay"></span></td>
                                                <td><span id="ownerDisplay"></span></td>
                                                <td><span id="nameDisplay"></span></td>
                                                <td><span id="natDisplay"></span></td>
                                                <td><span id="enddateDisplay"></span></td>
                                                <td><span id="numberLiDisplay"></span></td>
                                                <td><span id="phonenumnerDisplay"></span></td>
                                                <td><span id="fileDisplay"></span></td>

                                                
                                            </tr>


<!-- Add these placeholders to your HTML where you want to display the parameters -->




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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const urlParams = new URLSearchParams(window.location.search);

        const gov = urlParams.get('gov');
        const owner = urlParams.get('owner');
        const name = urlParams.get('name');
        const nat = urlParams.get('nat');
        const enddate = urlParams.get('enddate');
        const numberLi = urlParams.get('numberLi');
        const phonenumner = urlParams.get('phonenumner');
        const file = urlParams.get('file');

        document.getElementById('govDisplay').textContent = gov;
        document.getElementById('ownerDisplay').textContent = owner;
        document.getElementById('nameDisplay').textContent = name;
        document.getElementById('natDisplay').textContent = nat;
        document.getElementById('enddateDisplay').textContent = enddate;
        document.getElementById('numberLiDisplay').textContent = numberLi;
        document.getElementById('phonenumnerDisplay').textContent = phonenumner;
        document.getElementById('fileDisplay').textContent = file;
    });
</script>
