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
                                            <th class="border-bottom-0">الاسم </th>
                                                <th class="border-bottom-0">الهاتف</th>
                                                <th class="border-bottom-0">البريد الالكترونى</th>
                                                <th class="border-bottom-0">مواعيد العمل ( ساعات من - الى )</th>
                                                <th class="border-bottom-0">ملاحظات</th>
                                                <th class="border-bottom-0">مواعيد العمل (ايام الاسبوع)</th>
											</tr>
										</thead>
										<tbody>
											<tr>
                                                <!-- Add these elements to your HTML file -->
												<td></td>
												<!-- Add these placeholders to your HTML where you want to display the parameters -->
                                                <td><span id="nameDisplay"></span></td>
                                                <td> <span id="phoneDisplay"></span></td>
                                                <td> <span id="emailDisplay"></span></td>
                                                <td> <span id="TIME"></span></td>
                                                <td> <span id="notesDisplay"></span></td>
                                                <td> <ul id="weekdaysDisplay"></ul></td>

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
<!-- Add this script to your HTML file -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the URL parameters
        const urlParams = new URLSearchParams(window.location.search);

        // Get individual parameter values
        const name = urlParams.get('name');
        const phone = urlParams.get('phone');
        const email = urlParams.get('email');
        const notes = urlParams.get('notes');
        const timee = urlParams.get('TIME');
        const weekdays = urlParams.getAll('weekday'); // Use getAll for multiple values

        // Display the parameter values on the page
        document.getElementById('nameDisplay').textContent = name;
        document.getElementById('phoneDisplay').textContent = phone;
        document.getElementById('emailDisplay').textContent = email;
        document.getElementById('notesDisplay').textContent = notes;
        document.getElementById('TIME').textContent = timee;
        
        // Display weekdays as a list
        const weekdaysList = document.getElementById('weekdaysDisplay');
        weekdays.forEach(day => {
            const listItem = document.createElement('li');
            listItem.textContent = day;
            weekdaysList.appendChild(listItem);
        });
    });
</script>

