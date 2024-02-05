
@extends('mowaslaty.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!--Internal  Datetimepicker-slider css -->
<link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
<!-- Internal Spectrum-colorpicker css -->
<link href="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">

@endsection
@section('page-header')
	<!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto"> اضافه السيارات</h4>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->

@endsection
@section('content')
<form action="mowaslaty.station-contact-form.index" data-parsley-validate="">
									<div class="row row-sm">

                                     


                                    <div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label"> الاسم <span class="tx-danger">*</span></label>
												<input class="form-control" name="name" placeholder="الاسم " required="" type="text">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label class="form-label">الهاتف<span class="tx-danger">*</span></label>
												<input class="form-control" name="phone" placeholder="الهاتف" required="" type="text">
											</div>
										</div>
                                        <div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label"> البريد الالكترونى<span class="tx-danger">*</span></label>
												<input class="form-control" name="email" placeholder="البريد الالكترونى" required="" type="email">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label class="form-label">ملاحظات <span class="tx-danger">*</span></label>
												<input class="form-control" name="notes" placeholder="ملاحظات" required="" type="text">
											</div>
										</div>
                                        
 
                                    <div class="col-6">

                                           <div class="mg-b-20 mg-lg-b-0">
                                            <p class="mg-b-10">اختر يوم الأسبوع<span class="tx-danger">*</span></p><select class="form-control select2" required name="weekday" multiple="multiple">
                                            <option value="الأحد">الأحد</option>
                                            <option value="الاثنين">الاثنين</option>
                                            <option value="الثلاثاء">الثلاثاء</option>
                                            <option value="الأربعاء">الأربعاء</option>
                                            <option value="الخميس">الخميس</option>
                                            <option value="الجمعة">الجمعة</option>
                                            <option value="السبت">السبت</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                           <div class="mg-b-20 mg-lg-b-0">
                                            <p class="mg-b-10">مواعيد العمل<span class="tx-danger">*</span></p><select class="form-control select2" required name="TIME">
                                            <option value="1:00 - 5:00">1:00 - 5:00</option>
                                            <option value="3:00 - 8:00">3:00 - 8:00</option>
                                            <option value="12:00 - 9:00">12:00 - 9:00</option>
                                        </select>
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
<!--Internal  spectrum-colorpicker js -->
<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
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