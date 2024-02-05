
@extends('mowaslaty.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!--Internal  Datetimepicker-slider css -->
<link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
<!-- Internal Spectrum-numberLipicker css -->
<link href="{{URL::asset('assets/plugins/spectrum-numberLipicker/spectrum.css')}}" rel="stylesheet">

@endsection
@section('page-header')
	<!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto"> اضافه سائق</h4>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->

@endsection
@section('content')
<form action="mowaslaty.driver-form.index" data-parsley-validate="">
									<div class="row row-sm">
                                    <div class="col-6">
                                    



											<div class="form-group mg-b-0">
												<label class="form-label"> ادارة مرور <span class="tx-danger">*</span></label>
												<input class="form-control" name="gov" placeholder="ادارة مرور " required="" type="text">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label class="form-label">وحدة مرور<span class="tx-danger">*</span></label>
												<input class="form-control" name="owner" placeholder="وحدة مرور" required="" type="text">
											</div>
										</div>
                                        <div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label"> الاسم<span class="tx-danger">*</span></label>
												<input class="form-control" name="name" placeholder="الاسم" required="" type="text">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label class="form-label">الجنسية <span class="tx-danger">*</span></label>
												<input class="form-control" name="nat" placeholder="الجنسية" required="" type="text">
											</div>
										</div>
                                        <div class="col-6">
											<div class="form-group">
												<label class="form-label">نهاية الترخيص <span class="tx-danger">*</span></label>
												<input class="form-control" name="enddate" placeholder="نهاية الترخيص" required="" type="text">
											</div>
										</div>
                                                                               <div class="col-6">
											<div class="form-group">
												<label class="form-label">رقم الرخصة<span class="tx-danger">*</span></label>
												<input class="form-control" name="numberLi" placeholder="رقم الرخصة" required="" type="text">
											</div>
										</div>
                                        <div class="col-6">
											<div class="form-group">
												<label class="form-label">رقم الهاتف<span class="tx-danger">*</span></label>
												<input class="form-control" name="phonenumner" placeholder="رقم الهاتف" required="" type="text">
											</div>
										</div>
                                    <div class="col-6">

                                    <div class="row row-sm">
									<div class="col-sm-7 col-md-6 col-lg-4">
										<div class="custom-file">
											<input class="custom-file-input" id="customFile" type="file" name="file"> <label class="custom-file-label" for="customFile">صورة من الرخصة</label>
										</div>
									</div>
								</div>
                                    </div>
										<div class="col-12  my-3"><button class="btn btn-main-primary pd-x-20 mg-t-10" type="submit">اضافه</button></div>
									</div>

</form>
@endsection
@section('js')
<!--Internal  Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal  Parsley.min js -->
<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<!-- Internal Form-validation js -->
<script src="{{URL::asset('assets/js/form-validation.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<!--Internal  spectrum-numberLipicker js -->
<script src="{{URL::asset('assets/plugins/spectrum-numberLipicker/spectrum.js')}}"></script>
<!-- Internal Select2.min js -->
<!--Internal Ion.rangeSlider.min js -->
<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<!--Internal  pickerjs js -->
<script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
@endsection