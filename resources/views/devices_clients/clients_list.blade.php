@extends('layouts.master_teqnia')
@section('css')
    <!--  Owl-carousel css-->
    <link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
    <!-- Maps css -->
    <link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
    <!-- Internal Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">عملاء الشركة</h4>
                            <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ كل العملاء</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0">عرض كل الأجهزة</h4>
                                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                                </div>
                                <p class="tx-12 tx-gray-500 mb-2"> سيتم عرض الملخص لكافة الاجهزة التى تتعامل بها الشركة فى حال مزيد من التفاصيل برجاء زيارة القسم الخاص بالجهاز او الضغط على التفاصيل</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive hoverable-table">
                                    <button id="button" class="btn btn-primary mg-b-20">Delete selected row</button>
                                    <table id="example-delete" class="table text-md-nowrap">
                                        <thead>
                                        <tr>
                                            <th>اسم العميل</th>
                                            <th>client name</th>
                                            <th>عدد الاجهزة</th>
                                            <th>نوع العميل</th>
                                            <th>تخصص العميل</th>
                                            <th>طلبات الصيانة</th>
                                            <th>عنوان المركز الرئيسى</th>
                                            <th>أرقام الهاتف : </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>رامى محمد</td>
                                                <td>ٌRamy Clinic</td>
                                                <td>7</td>
                                                <td>شركة أجهزة طبية</td>
                                                <td>الرمد</td>
                                                <td>0</td>
                                                <td>أبنوب - أسيوط</td>
                                                <td>0222565068 - 0214587963 - 0125478963 - 19688 </td>
                                            </tr>
                                            @foreach($clients_list as $client)
                                                <tr>
                                                    <td>{{ $client -> C_Arabic_Name}}</td>
                                                    <td>{{ $client -> C_English_Name}}</td>
                                                    <td>{{ $client -> C_English_Name }}</td>
                                                    <td>{{ $client -> C_English_Name }}</td>
                                                    <td>{{ $client -> c_major }}</td>
                                                    <td>{{ $client -> C_English_Name}}</td>
                                                    <td>{{ $client -> C_English_Name }}</td>
                                                    <td>{{ $client -> C_English_Name }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>اسم العميل</th>
                                            <th>اسم العميل</th>
                                            <th>عدد الاجهزة</th>
                                            <th>نوع العميل</th>
                                            <th>تخصص العميل</th>
                                            <th>طلبات الصيانة</th>
                                            <th>عنوان المركز الرئيسى</th>
                                            <th>أرقام الهاتف : </th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

				</div>
				<!-- row closed -->
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
