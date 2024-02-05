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
                            <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة بكل السيارات</span>
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
								<p class="tx-12 tx-gray-500 mb-2">قائمة بكل السيارات المسجلة فى الموقف وعرض البيانات الرئيسية لكل سيارة</p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>
                                            <th class="border-bottom-0"># </th>
                                            <th class="border-bottom-0">رقم المركبه </th>
                                                <th class="border-bottom-0">ماركه السياره</th>
                                                <th class="border-bottom-0"> الطراز</th>
                                                <th class="border-bottom-0">سنه الصنع</th>
                                                <th class="border-bottom-0">رقم الشاسيه</th>
                                                <th class="border-bottom-0">رقم الماتور</th>
                                                <th class="border-bottom-0">السعه اللتريه</th>
                                                <th class="border-bottom-0">بدايه الترخيص</th>
                                                <th class="border-bottom-0">اللون</th>
                                                <th class="border-bottom-0">العنوان</th>
                                                <th class="border-bottom-0">رخصه السياره</th>
                                                <th class="border-bottom-0">السائق</th>
                                                <th class="border-bottom-0">المالك</th>
                                                <th class="border-bottom-0">الخط</th>
                                                <th class="border-bottom-0">ملف رخصه السياره</th>
											</tr>
										</thead>
										<tbody> file
											<tr>
                                                <!-- Add these elements to your HTML file -->
												<td></td>
												<td><span id="carNumberDisplay"></span></td>
												<td><span id="carBrandDisplay"></span></td>
                                                <td><span id="versionDisplay"></span></td>
                                                <td><span id="yearDisplay"></span></td>
                                                <td><span id="numberDisplay"></span></td>
                                                <td><span id="motorNumberDisplay"></span></td>
                                                <td><span id="literDisplay"></span></td>
                                                <td><span id="startDateDisplay"></span></td>
                                                <td><span id="colorDisplay"></span></td>
                                                <td><span id="addressDisplay"></span></td>
                                                <td><span id="drivermultiDisplay"></span></td>
                                                <td><span id="ownermultiDisplay"></span></td>
                                                <td><span id="lineName"></span></td>
                                                <td><span id="rdioDisplay"></span></td>
                                                <td><span id="fileDisplay"></span></td>
                                                
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Parse URL parameters
        const urlParams = new URLSearchParams(window.location.search);

        // Get values from URL parameters
        const carNumber = urlParams.get('carNumber');
        const carBrand = urlParams.get('carBrand');
        const version = urlParams.get('version');
        const year = urlParams.get('year');
        const number = urlParams.get('number');
        const motorNumber = urlParams.get('motorNumber');
        const liter = urlParams.get('liter');
        const startDate = urlParams.get('startDate');
        const color = urlParams.get('color');
        const address = urlParams.get('address');
        const drivermulti = urlParams.get('drivermulti');
        const ownermulti = urlParams.get('ownermulti');
        const rdio = urlParams.get('rdio');
        const file = urlParams.get('file');
        const lineName = urlParams.get('lineName');
        

        // Display the data on the page
        displayFormData(lineName,carNumber, carBrand, version, year, number, motorNumber, liter, startDate, color, address, drivermulti, ownermulti, rdio, file);
    });

    function displayFormData(lineName,carNumber, carBrand, version, year, number, motorNumber, liter, startDate, color, address, drivermulti, ownermulti, rdio, file) {
        // Update the content of the page with the form data
        document.getElementById('carNumberDisplay').textContent = carNumber;
        document.getElementById('carBrandDisplay').textContent = carBrand;
        document.getElementById('versionDisplay').textContent = version;
        document.getElementById('yearDisplay').textContent = year;
        document.getElementById('numberDisplay').textContent = number;
        document.getElementById('motorNumberDisplay').textContent = motorNumber;
        document.getElementById('literDisplay').textContent = liter;
        document.getElementById('startDateDisplay').textContent = startDate;
        document.getElementById('colorDisplay').textContent = color;
        document.getElementById('addressDisplay').textContent = address;
        document.getElementById('drivermultiDisplay').textContent = drivermulti;
        document.getElementById('ownermultiDisplay').textContent = ownermulti;
        document.getElementById('rdioDisplay').textContent = rdio;
        document.getElementById('fileDisplay').textContent = file;
        document.getElementById('lineName').textContent = lineName;
        
    }
</script>

