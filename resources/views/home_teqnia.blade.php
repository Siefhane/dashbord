@extends('layouts.master_teqnia')
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
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">تـقــنـيــة ... أهلاً بـــك</h2>
                <p class="mg-b-0">لوحة التحكم فى تطبيق تقنية ووظائف الفريق</p>
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
                        <h6 class="mb-3 tx-12 text-white">التذاكر المفتوحة</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">15</h4>
                                <p class="mb-0 tx-12 text-white op-7">عدد التذاكر المفتوحة فى الوقت الحالى</p>
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
                        <h6 class="mb-3 tx-12 text-white">الزيارات</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">4</h4>
                                <p class="mb-0 tx-12 text-white op-7">عددالزيارت المطلوب تنفيذها</p>
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
                        <h6 class="mb-3 tx-12 text-white">المهام</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">15</h4>
                                <p class="mb-0 tx-12 text-white op-7">عدد المهام المطلوب تنفيذها</p>
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
                        <h6 class="mb-3 tx-12 text-white">التركيب</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">3</h4>
                                <p class="mb-0 tx-12 text-white op-7">عدد زيارات التركيب المطلوب تنفيذها</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->

    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-4 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header pb-1">
                    <h3 class="card-title mb-2">أحدث عملائنا</h3>
                    <p class="tx-12 mb-0 text-muted">قائمة قصيرة بأحدث عملائنا سواء طبيب او مؤسسة طبية او غيرهم</p>
                </div>
                <div class="card-body p-0 customers mt-1">
                    <div class="list-group list-lg-group list-group-flush">
                        <div class="list-group-item list-group-item-action" href="#">
                            <div class="media mt-0">
                                <img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/3.jpg')}}" alt="Image description">
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <div class="mt-0">
                                            <h5 class="mb-1 tx-15">مستشفى الامل</h5>
                                            <p class="mb-0 tx-13 text-muted">تاريخ الانضمام : 28/10/2023</p>
                                            <p class="mb-0 tx-13 text-muted">المدينة : القاهرة</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action" href="#">
                            <div class="media mt-0">
                                <img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/11.jpg')}}" alt="Image description">
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <div class="mt-1">
                                            <h5 class="mb-1 tx-15">مستشفى عبد القادر فهمى</h5>
                                            <p class="mb-0 tx-13 text-muted">تاريخ الانضمام : 10/2021</p>
                                            <p class="mb-0 tx-13 text-muted">المدينة : القاهرة</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action" href="#">
                            <div class="media mt-0">
                                <img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/17.jpg')}}" alt="Image description">
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <div class="mt-1">
                                            <h5 class="mb-1 tx-15">عيادات د. اسماعيل سالم</h5>
                                            <p class="mb-0 tx-13 text-muted">تاريخ الانضمام : 10/2021</p>
                                            <p class="mb-0 tx-13 text-muted">المدينة : القاهرة</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action" href="#">
                            <div class="media mt-0">
                                <img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/15.jpg')}}" alt="Image description">
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <div class="mt-1">
                                            <h5 class="mb-1 tx-15">مستشفى اسيوط الجامعى</h5>
                                            <p class="mb-0 tx-13 text-muted">تاريخ الانضمام : 10/2021</p>
                                            <p class="mb-0 tx-13 text-muted">المدينة : أسيوط</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action br-br-7 br-bl-7" href="#">
                            <div class="media mt-0">
                                <img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/6.jpg')}}" alt="Image description">
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <div class="mt-1">
                                            <h5 class="mb-1 tx-15">د. أشرف السعيد</h5>
                                            <p class="mb-0 tx-13 text-muted">تاريخ الانضمام : 8/2021</p>
                                            <p class="mb-0 tx-13 text-muted">المدينة : القاهرة</p>
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
                <div class="card-header pb-1">
                    <h3 class="card-title mb-2">الزيارات الحالية</h3>
                    <p class="tx-12 mb-0 text-muted">قائمة قصيرة بالزيارت الواجب تنفيذها فى خلال الايام القادمة</p>
                </div>
                <div class="product-timeline card-body pt-2 mt-1">
                    <ul class="timeline-1 mb-0">
                        <li class="mt-0">
                            <i class="ti-pie-chart bg-primary-gradient text-white product-icon"></i>
                            <span class="font-weight-semibold mb-4 tx-14 ">مستشفى أسيوط الجامعى</span>
                            <a href="#" class="float-left tx-11 text-muted">19/11/2023</a>
                            <p class="mb-0 text-muted tx-12">م. محمود فضل</p>
                        </li>
                        <li class="mt-0">
                            <i class="mdi mdi-cart-outline bg-danger-gradient text-white product-icon"></i>
                            <span class="font-weight-semibold mb-4 tx-14 ">مستشفى أسيوط الجامعى</span>
                            <a href="#" class="float-left tx-11 text-muted">20/11/2023</a>
                            <p class="mb-0 text-muted tx-12">م. محمود فضل</p>
                        </li>
                        <li class="mt-0">
                            <i class="ti-bar-chart-alt bg-success-gradient text-white product-icon"></i>
                            <span class="font-weight-semibold mb-4 tx-14 ">د. اسماعيل سالم</span>
                            <a href="#" class="float-left tx-11 text-muted">20/11/2023</a>
                            <p class="mb-0 text-muted tx-12">م. أحمد</p>
                        </li>
                        <li class="mt-0"> <i class="ti-wallet bg-warning-gradient text-white product-icon"></i>
                            <span class="font-weight-semibold mb-4 tx-14 ">مستشفى الامل</span>
                            <a href="#" class="float-left tx-11 text-muted">20/11/2023</a>
                            <p class="mb-0 text-muted tx-12">م. ايمان</p>
                        </li>
                        <li class="mt-0"> <i class="si si-eye bg-purple-gradient text-white product-icon"></i>
                            <span class="font-weight-semibold mb-4 tx-14 ">مستشفى عبد القادر فهمى</span>
                            <a href="#" class="float-left tx-11 text-muted">21/11/2023</a>
                            <p class="mb-0 text-muted tx-12">م. مراد</p>
                        </li>
                        <li class="mt-0 mb-0"> <i class="icon-note icons bg-primary-gradient text-white product-icon"></i>
                                <span class="font-weight-semibold mb-4 tx-14 ">عيادات الشفاء</span>
                                <a href="#" class="float-left tx-11 text-muted">21/11/2023</a>
                            <p class="mb-0 text-muted tx-12">م. علا</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header pb-1">
                    <h3 class="card-title mb-2"> زيارات التركيب</h3>
                    <p class="tx-12 mb-0 text-muted">قائمة قصيرة بزيارات التركيب الواجب تنفيذها فى خلال الايام القادمة</p>
                </div>
                <div class="product-timeline card-body pt-2 mt-1">
                    <ul class="timeline-1 mb-0">
                        <li class="mt-0">
                            <i class="ti-pie-chart bg-primary-gradient text-white product-icon"></i>
                            <span class="font-weight-semibold mb-4 tx-14 ">مستشفى أسيوط الجامعى</span>
                            <a href="#" class="float-left tx-11 text-muted">19/11/2023</a>
                            <p class="mb-0 text-muted tx-12">م. محمود فضل</p>
                        </li>
                        <li class="mt-0">
                            <i class="mdi mdi-cart-outline bg-danger-gradient text-white product-icon"></i>
                            <span class="font-weight-semibold mb-4 tx-14 ">مستشفى أسيوط الجامعى</span>
                            <a href="#" class="float-left tx-11 text-muted">20/11/2023</a>
                            <p class="mb-0 text-muted tx-12">م. محمود فضل</p>
                        </li>
                        <li class="mt-0">
                            <i class="ti-bar-chart-alt bg-success-gradient text-white product-icon"></i>
                            <span class="font-weight-semibold mb-4 tx-14 ">د. اسماعيل سالم</span>
                            <a href="#" class="float-left tx-11 text-muted">20/11/2023</a>
                            <p class="mb-0 text-muted tx-12">م. أحمد</p>
                        </li>
                        <li class="mt-0"> <i class="ti-wallet bg-warning-gradient text-white product-icon"></i>
                            <span class="font-weight-semibold mb-4 tx-14 ">مستشفى الامل</span>
                            <a href="#" class="float-left tx-11 text-muted">20/11/2023</a>
                            <p class="mb-0 text-muted tx-12">م. ايمان</p>
                        </li>
                        <li class="mt-0"> <i class="si si-eye bg-purple-gradient text-white product-icon"></i>
                            <span class="font-weight-semibold mb-4 tx-14 ">مستشفى عبد القادر فهمى</span>
                            <a href="#" class="float-left tx-11 text-muted">21/11/2023</a>
                            <p class="mb-0 text-muted tx-12">م. مراد</p>
                        </li>
                        <li class="mt-0 mb-0"> <i class="icon-note icons bg-primary-gradient text-white product-icon"></i>
                            <span class="font-weight-semibold mb-4 tx-14 ">عيادات الشفاء</span>
                            <a href="#" class="float-left tx-11 text-muted">21/11/2023</a>
                            <p class="mb-0 text-muted tx-12">م. علا</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- row close -->

    <!-- row opened -->
    <div class="row row-sm row-deck">
        <div class="col-md-12 col-lg-4 col-xl-4">
            <div class="card card-dashboard-eight pb-2">
                <h6 class="card-title">أحدث المهام المطلوبة</h6>
                <span class="d-block mg-b-10 text-muted tx-12">عرض احدث المهام المطلوبة من كل اعضاء فريق شركة تقنية</span>
                <div class="list-group">
                    <div class="list-group-item border-top-0">
                        <p>زيارة مستشفى اسيوط الجامعى</p><span>م. محمود فضل</span>
                    </div>
                    <div class="list-group-item">
                        <p>الاتصال ب مستشفى الامل</p><span>م. علا شهاب</span>
                    </div>
                    <div class="list-group-item">
                        <p>زيارة عيادات الامل</p><span>م. محمود</span>
                    </div>
                    <div class="list-group-item">
                        <p>تحميل برنامج بالهاتف عيادات التوفيق</p><span>م. أحمد</span>
                    </div>
                    <div class="list-group-item">
                        <p>تحميل برنامج بالهاتف عيادات التوفيق</p><span>م. أحمد</span>
                    </div>
                    <div class="list-group-item border-bottom-0 mb-0">
                        <p>تحميل برنامج بالهاتف عيادات التوفيق</p><span>م. أحمد</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-8 col-xl-8">
            <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-1">التذاكر المفتوحة حديثاً</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">أحدث التذاكر المفتوحة على نظام شركة تقنية</span>
                <div class="table-responsive country-table">
                    <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                        <thead>
                        <tr>
                            <th class="wd-lg-25p">التاريخ</th>
                            <th class="wd-lg-25p tx-right">العنوان والنوع</th>
                            <th class="wd-lg-25p tx-right">العميل</th>
                            <th class="wd-lg-25p tx-right">فاتح التذكرة</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>05 نوفمبر 2023</td>
                            <td class="tx-right tx-medium tx-inverse">زيارة صيانة</td>
                            <td class="tx-right tx-medium tx-inverse">مستشفى الامل</td>
                            <td class="tx-right tx-medium tx-danger">ا. امجد</td>
                        </tr>
                        <tr>
                            <td>06 نوفمبر 2023</td>
                            <td class="tx-right tx-medium tx-inverse">اتصال</td>
                            <td class="tx-right tx-medium tx-inverse">مستشفى الامل</td>
                            <td class="tx-right tx-medium tx-danger">ا. أمجد</td>
                        </tr>
                        <tr>
                            <td>18 نوفمبر 2023</td>
                            <td class="tx-right tx-medium tx-inverse">اتصال</td>
                            <td class="tx-right tx-medium tx-inverse">مركز مصر للاشعة</td>
                            <td class="tx-right tx-medium tx-danger">ا. فاروق</td>
                        </tr>
                        <tr>
                            <td>17 نوفمبر 2023</td>
                            <td class="tx-right tx-medium tx-inverse">اتصال</td>
                            <td class="tx-right tx-medium tx-inverse">مركز مصر للاشعة</td>
                            <td class="tx-right tx-medium tx-danger">ا. فاروق</td>
                        </tr>
                        <tr>
                            <td>01 نوفمبر 2023</td>
                            <td class="tx-right tx-medium tx-inverse">اتصال</td>
                            <td class="tx-right tx-medium tx-inverse">مركز مصر للاشعة</td>
                            <td class="tx-right tx-medium tx-danger">ا. فاروق</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
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
