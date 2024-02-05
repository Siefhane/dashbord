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
												<th class="border-bottom-0">#</th>
												<th class="border-bottom-0">الـخـط</th>
												<th class="border-bottom-0">رقم السيارة</th>
												<th class="border-bottom-0">عدد الرحلات الشهر الحالى</th>
												<th class="border-bottom-0">متوسط عدد الرحلات</th>
												<th class="border-bottom-0">وقت أخر رحلة</th>
                                                <th class="border-bottom-0">مالك السيارة</th>
                                                <th class="border-bottom-0">رقم الهاتف</th>
                                                <th class="border-bottom-0">نهاية الرخصة</th>
                                                <th class="border-bottom-0">ملاحظات : </th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>أسيوط</td>
												<td>ي د أ 654</td>
												<td>3</td>
												<td>80</td>
												<td>2023/10/25</td>
                                                <td>أمجد ابراهيم</td>
                                                <td>010141414156</td>
                                                <td>2024/04/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
											</tr>
                                            <tr>
                                                <td>2</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>القاهرة</td>
                                                <td>ب ق د أ 124</td>
                                                <td>5</td>
                                                <td>17</td>
                                                <td>2023/10/30</td>
                                                <td>أحمد رمضان</td>
                                                <td>010710486856</td>
                                                <td>2024/08/25</td>
                                                <td>الملاحظة على السائق انه غير ملتزم بالمواعيد</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>أسيوط</td>
                                                <td>ج د أ 122</td>
                                                <td>12</td>
                                                <td>15</td>
                                                <td>2023/10/10</td>
                                                <td>فؤاد يحيى</td>
                                                <td>010047458856</td>
                                                <td>2024/05/12</td>
                                                <td>لا توجد ملاحظة</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>القاهرة</td>
                                                <td>ي ب أ 111</td>
                                                <td>2</td>
                                                <td>8</td>
                                                <td>2023/10/10</td>
                                                <td>خالد محمد</td>
                                                <td>010142021506</td>
                                                <td>2025/01/25</td>
                                                <td>لا توجد ملاحظات</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>بنى محمديات</td>
                                                <td>ي ج أ 410</td>
                                                <td>12</td>
                                                <td>79</td>
                                                <td>2023/10/23</td>
                                                <td>حداد ابراهيم</td>
                                                <td>012091488856</td>
                                                <td>2024/06/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>22</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>23</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>24</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>25</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>26</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>27</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>28</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>29</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>30</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>32</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>33</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>34</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>35</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>36</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>37</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
                                            </tr>
                                            <tr>
                                                <td>38</td>
                                                <td>أسيوط</td>
                                                <td>ي د أ 777</td>
                                                <td>40</td>
                                                <td>80</td>
                                                <td>2023/10/22</td>
                                                <td>فؤاد ابراهيم</td>
                                                <td>010141488856</td>
                                                <td>2024/05/25</td>
                                                <td>صفحة ملاحظات السيارة مثلا ان السائق يخرج فى المواعيد الصباحية وملتزم بخطوط السير</td>
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
