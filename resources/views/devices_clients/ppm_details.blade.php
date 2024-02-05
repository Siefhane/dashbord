@extends('layouts.master_teqnia')
@section('css')
    <!---Internal  Owl Carousel css-->
    <link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <!--- Internal Timeline css-->
    <link href="{{URL::asset('assets/plugins/timeline/css/timeline.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">PPM</h4>
                            <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Details</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-header custom-card-header">
                                <h6 class="card-title mb-0">جدول الزيارات الدورية للجهاز</h6>
                            </div>

                            <div class="card-body">
                                <div class="vtimeline">
                                    <?php  $reverse_flag = false; ?>
                                    @foreach( $device_ppm as $device_ppm_row)
                                    <div class="timeline-wrapper
                                        <?php
                                            if($reverse_flag) {
                                                $reverse_flag = false;
                                                echo 'timeline-inverted';
                                            }
                                            else $reverse_flag = true;
                                        ?>
                                                timeline-wrapper-secondary">
                                            <div class="timeline-badge"><i class="las la-business-time"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h6 class="timeline-title">{{ $device_ppm_row -> Note }}</h6>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>{{ $device_ppm_row -> info }}</p>
                                                </div>
                                                <div class="timeline-footer d-flex align-items-center flex-wrap">
                                                    <i class="fe fe-heart  text-muted ml-1"></i>
                                                    <span class="mr-auto">
                                                        <i class="fe fe-calendar text-muted mr-1"></i>
                                                        {{ $device_ppm_row -> M_Calender }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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
    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!-- Internal Select2 js-->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endsection
