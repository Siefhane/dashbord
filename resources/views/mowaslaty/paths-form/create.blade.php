
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
<form action="mowaslaty.cars-form.index" data-parsley-validate="">
									<div class="row row-sm">
                                    <div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label"> رقم المركبه <span class="tx-danger">*</span></label>
												<input class="form-control" name="carNumber" placeholder="رقم المركبه " required="" type="text">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label class="form-label">ماركه السياره<span class="tx-danger">*</span></label>
												<input class="form-control" name="carBrand" placeholder="ماركه السياره" required="" type="text">
											</div>
										</div>
                                        <div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label"> الطراز<span class="tx-danger">*</span></label>
												<input class="form-control" name="version" placeholder="الطراز" required="" type="text">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label class="form-label">سنه الصنع <span class="tx-danger">*</span></label>
												<input class="form-control" name="year" placeholder="سنه الصنع" required="" type="text">
											</div>
										</div>
                                        <div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">رقم الشاسيه <span class="tx-danger">*</span></label>
												<input class="form-control" name="number" placeholder="رقم الشاسيه" required="" type="text">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label class="form-label">رقم الماتور  <span class="tx-danger">*</span></label>
												<input class="form-control" name="motorNumber" placeholder="رقم الماتور" required="" type="text">
											</div>
										</div>
                                        <div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">السعه اللتريه<span class="tx-danger">*</span></label>
												<input class="form-control" name="liter" placeholder="السعه اللتريه" required="" type="text">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label class="form-label">بدايه الترخيص <span class="tx-danger">*</span></label>
												<input class="form-control" name="startDate" placeholder="بدايه الترخيص" required="" type="text">
											</div>
										</div>
                                        <div class="col-6">
											<div class="form-group">
												<label class="form-label">اللون<span class="tx-danger">*</span></label>
												<input class="form-control" name="color" placeholder="اللون" required="" type="text">
											</div>
										</div>
                                        <div class="col-6">
											<div class="form-group">
												<label class="form-label">العنوان<span class="tx-danger">*</span></label>
												<input class="form-control" name="address" placeholder="العنوان" required="" type="text">
											</div>
										</div>
                                        <div class="col-6">
                                            <div class="mg-b-20 mg-lg-b-0">
                                            <p class="mg-b-10">سائق المركبه<span class="tx-danger">*</span></p><select class="form-control select2" multiple="multiple" required name="drivermulti">
                                                <option value="سائق 1">
                                                    سائق 1
                                                </option>
                                                <option value="سائق 2">
                                                    سائق 2
                                                </option>
                                                <option value="سائق 3">
                                                    سائق 3
                                                </option>
                                                <option value="سائق 4">
                                                    سائق 4
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                            <div class="mg-b-20 mg-lg-b-0">
                                            <p class="mg-b-10">مالك المركبه<span class="tx-danger">*</span></p><select class="form-control select2" multiple="multiple" required name="ownermulti">
                                                <option value="مالك 1">
                                                    مالك 1
                                                </option>
                                                <option value="مالك 2">
                                                    مالك 2
                                                </option>
                                                <option value="مالك 3">
                                                    مالك 3
                                                </option>
                                                <option value="مالك 4">
                                                    مالك 4
                                                </option>
                                            </select>
                                        </div>
                                    </div>
 
                                    <div class="col-6">
                                            <div class="mg-b-20 mg-lg-b-0">
                                            <p class="mg-b-10">الخط<span class="tx-danger">*</span></p><select class="form-control select2" required name="lineName">

                                                <option value="خط 1">
                                                    خط 1
                                                </option>
                                                <option value="خط 2">
                                                    خط 2
                                                </option>
                                                <option value="خط 3">
                                                    خط 3
                                                </option>
                                                <option value="خط 4">
                                                    خط 4
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=" col-3">
                                    <label class="form-label">رخصه السياره<span class="tx-danger">*</span></label>
                                       <div class="row ">
                                            <div class="col-lg-3">
                                                <label class="rdiobox"><input name="rdio" type="radio" value="existing"> <span>ساريه</span></label>
                                            </div>
                                            <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                                <label class="rdiobox"><input  name="rdio" type="radio"value="expired"> <span>منتهيه</span></label>
                                            </div>
                                            <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                                <label class="rdiobox"><input  name="rdio" type="radio"value="other"> <span>اخري</span></label>
                                            </div>
                                       </div> 
                                    </div>
                                    <div class="col-6">

                                    <div class="row row-sm">
									<div class="col-sm-7 col-md-6 col-lg-4">
										<div class="custom-file">
											<input class="custom-file-input" id="customFile" type="file" name="file"> <label class="custom-file-label" for="customFile">Choose file</label>
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