@extends('layouts.master_teqnia')
@section('css')

    <!---Internal  Prism css-->
    <link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
    <!---Internal Input tags css-->
    <link href="{{URL::asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">
    <!--- Custom-scroll -->
    <link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
    <!---Internal  Prism css-->
    <link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

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
                <h4 class="content-title mb-0 my-auto">العملاء</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ بيانات العميل </span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <!-- div -->
            <div class="card" id="tabs-style4">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        بيانات :
                        {{ $client_main_info -> C_Arabic_Name }}
                    </div>
                    <p class="mg-b-20">عرض كافة البيانات الخاصة بــ {{ $client_main_info -> C_Arabic_Name }} من الاجهزة ومسئولى الاتصال والعنوان وارقام الهواتف</p>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="d-md-flex">
                                <div class="">
                                    <div class="panel panel-primary tabs-style-4">
                                        <div class="tab-menu-heading">
                                            <div class="tabs-menu ">
                                                <!-- Tabs -->
                                                <ul class="nav panel-tabs ml-3">
                                                    <li class=""><a href="#tab21" class="active" data-toggle="tab"><i class="icon ion-ios-home"></i> البيانات العامة</a></li>
                                                    <li><a href="#tab22" data-toggle="tab"><i class="icon ion-md-laptop"></i> الأجهزة المملوكة للعميل</a></li>
                                                    <li><a href="#tab23" data-toggle="tab"><i class="icon ion-md-paper"></i> العناوين وأرقام الهاتف</a></li>
                                                    <li><a href="#tab24" data-toggle="tab"><i class="fa fa-tasks"></i> طلبات الصيانة </a></li>
                                                    <li><a href="#tab25" data-toggle="tab"><i class="mdi mdi-account-multiple"></i> مسئولى الاتصال</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-style-4 ">
                                    <div class="panel-body tabs-menu-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab21">
                                                <div class="listgroup-example ">
                                                    <ul class="list-group">
                                                        <li>الاســم :
                                                            {{ $client_main_info -> C_Arabic_Name }}</li>
                                                        <li>الاســم :
                                                            {{ $client_main_info -> C_English_Name }}</li>
                                                        <li>أخــر اتصال :
                                                            {{ $client_main_info -> Latest_contact }}</li>
                                                        <li>طـبـيــعــة نشاط المنشأة
                                                            <ul class="list-style-disc">
                                                                @foreach($client_type as $type_line)
                                                                <li>{{ $type_line -> Arabic_name }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        <li>التـخـصصات
                                                            <ul class="list-style-disc">
                                                                @foreach($client_major as $major_line)
                                                                    <li>{{ $major_line -> Arabic_name }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p style="width: 100%;color:transparent;">----------------------------------------------------
                                                    -------------------------------------------------------------
                                                    --------------------------------------------------------------------------------------------------------</p>
                                            </div>

                                            <!--div-->
                                            <div class="tab-pane" id="tab22" >
                                                <!--div-->

                                                <div class="card-body" >
                                                    <div class="table-responsive">
                                                        <table id="example" style="width: 98%;" class="table key-buttons text-md-nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th class="border-bottom-0">#</th>
                                                                <th class="border-bottom-0">اسم الجهاز</th>
                                                                <th class="border-bottom-0">الموديل</th>
                                                                <th class="border-bottom-0">نهاية الضمان</th>
                                                                <th class="border-bottom-0">مكان الجهاز</th>
                                                                <th class="border-bottom-0">التخصص</th>
                                                                <th class="border-bottom-0">وصف الجهاز</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @php
                                                                $i = 0 ;
                                                            @endphp
                                                            @foreach($client_devices as $device_record)
                                                                @php
                                                                    $i++ ;
                                                                @endphp
                                                                <tr>
                                                                    <td>{{ $i }}</td>
                                                                    <td>{{ $device_record -> D_Name }}</td>
                                                                    <td>{{ $device_record -> D_Model_Number }}</td>
                                                                    <td>{{ $device_record -> insrurance_end_date}}</td>
                                                                    <td>{{ $device_record -> Address_text}}</td>
                                                                    <td>{{ $device_record -> Arabic_Name}}</td>
                                                                    <td>{{ $device_record -> D_Description}}</td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!--/div-->
                                                <p style="width: 100%;color:transparent;">----------------------------------------------------
                                                    -------------------------------------------------------------
                                                    --------------------------------------------------------------------------------------------------------</p>

                                            </div>
                                            <!--/div-->
                                            <div class="tab-pane" id="tab23">
                                                <div class="listgroup-example ">
                                                    @foreach($client_locations_phones_emails as $location_record)
                                                    <ul class="list-group">
                                                        @if ($location_record->Main_location)
                                                            <li style="font-weight: bolder;">العنوان الرئيسى</li>
                                                        @endif
                                                        <li>المدينة :
                                                        {{ $location_record -> city_name }}</li>
                                                        <li>العنوان :
                                                        {{ $location_record -> Address_text }}</li>
                                                        <li>معلومات اخرى :
                                                            {{ $location_record -> Hint }}</li>
                                                        <li>أرقام الهاتـف
                                                            <ul class="list-style-disc">
                                                                <li>{{ $location_record -> Phone_1 }}</li>
                                                                <li>{{ $location_record -> phone_2 }}</li>
                                                                <li>{{ $location_record -> phone_3 }}</li>
                                                            </ul>
                                                        </li>
                                                        <li> البريــد الالكترونـى
                                                            <ul class="list-style-disc">
                                                                <li>{{ $location_record -> email_1 }}</li>
                                                                <li>{{ $location_record -> email_2 }}</li>
                                                            </ul>
                                                        </li>
                                                        <li>ملاحظات  :
                                                             {{ $location_record -> hint }}</li>
                                                    </ul><hr>
                                                    @endforeach
                                                </div>
                                                <p style="width: 100%;color:transparent;">----------------------------------------------------
                                                    -------------------------------------------------------------
                                                    --------------------------------------------------------------------------------------------------------</p>
                                            </div>

                                            <div class="tab-pane" id="tab24">
                                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                                                <p class="mb-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus </p>
                                            </div>
                                            <div class="tab-pane" id="tab25">
                                                <!--div-->

                                                <div class="card-body" >
                                                    <div class="table-responsive">
                                                        <table id="example" style="width: 98%;" class="table key-buttons text-md-nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th class="border-bottom-0">#</th>
                                                                <th class="border-bottom-0">اسم الجهاز</th>
                                                                <th class="border-bottom-0">الموديل</th>
                                                                <th class="border-bottom-0">نهاية الضمان</th>
                                                                <th class="border-bottom-0">مكان الجهاز</th>
                                                                <th class="border-bottom-0">التخصص</th>
                                                                <th class="border-bottom-0">وصف الجهاز</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @php
                                                                $i = 0 ;
                                                            @endphp
                                                            @foreach($client_devices as $device_record)
                                                                @php
                                                                    $i++ ;
                                                                @endphp
                                                            <tr>
                                                                <td>{{ $i }}</td>
                                                                <td>{{ $device_record -> D_Name }}</td>
                                                                <td>{{ $device_record -> D_Model_Number }}</td>
                                                                <td>{{ $device_record -> insrurance_end_date}}</td>
                                                                <td>{{ $device_record -> Address_text}}</td>
                                                                <td>{{ $device_record -> Arabic_Name}}</td>
                                                                <td>{{ $device_record -> D_Description}}</td>
                                                            </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!--/div-->
                                                <p style="width: 100%;color:transparent;">----------------------------------------------------
                                                    -------------------------------------------------------------
                                                    --------------------------------------------------------------------------------------------------------</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /div -->
            </div>
        </div>
    </div>

    </div>
    <!-- /row -->
@endsection


@section('js')
    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!-- Internal Select2 js-->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!-- Internal Jquery.mCustomScrollbar js-->
    <script src="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- Internal Input tags js-->
    <script src="{{URL::asset('assets/plugins/inputtags/inputtags.js')}}"></script>
    <!--- Tabs JS-->
    <script src="{{URL::asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js')}}"></script>
    <script src="{{URL::asset('assets/js/tabs.js')}}"></script>
    <!--Internal  Clipboard js-->
    <script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
    <!-- Internal Prism js-->
    <script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!-- Internal Select2 js-->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!-- Internal Jquery.mCustomScrollbar js-->
    <script src="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!--Internal  Clipboard js-->
    <script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
    <!-- Internal Prism js-->
    <script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

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
