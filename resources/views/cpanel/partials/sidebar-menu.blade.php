    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('modules/master/images/user.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ (Auth::guard('employee')->user()->full_name) ? Auth::guard('employee')->user()->full_name : ''  }}</p>
              <a href="#">
                <i class="fa fa-circle text-success"></i> متصل الان
              </a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="بحث...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            {{-- <li class="header">MAIN NAVIGATION</li> --}}
            <li class="active treeview">
              <a href="{{route('cpanel')}}">
                <i class="fa fa-dashboard"></i>
                <span>الرئيسية</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-green">
                    <i class="fa fa-home"></i>
                  </small>
                </span>
              </a>
            </li>

            <li class="header">شوؤن الطلاب</li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-users text-green"></i>
                <span>شوؤن الطلاب</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('students.index') }}"><i class="fa fa-circle-o text-aqua"></i> الطلاب</a></li>
                <li><a href="{{ route('students.student-only-trashed') }}"><i class="fa fa-circle-o text-aqua"></i> طلب سحب ملف الطالب</a></li>
                
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> الطالب
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('students.create') }}"><i class="fa fa-circle-o text-aqua"></i> اضافة طالب</a></li>
                    <li><a href="{{ route('add-student-manual') }}"><i class="fa fa-circle-o text-aqua"></i> اضافة طالب يدويا</a></li>
                  
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> الاجازات و الغياب
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('attendances.index') }}"><i class="fa fa-circle-o text-aqua"></i> تسجيل الاجازات و الغياب</a></li>
                    <li><a href="{{ route('attendances.list') }}"><i class="fa fa-circle-o text-aqua"></i>قائمة الحضور</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> مستخرجات
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('offprints', ['type' => 'to-clinic']) }}"><i class="fa fa-circle-o text-aqua"></i> تحويل للمركز الطبي</a></li>
                    <li><a href="{{ route('offprints', ['type' => 'record']) }}"><i class="fa fa-circle-o text-aqua"></i> شهادة قيد طالب</a></li>
                    <li><a href="{{ route('offprints', ['type' => 'kindness']) }}"><i class="fa fa-circle-o text-aqua"></i> شهادة حسن سير و سلوك</a></li>
                    <li><a href="{{ route('offprints', ['type' => 'completion']) }}"><i class="fa fa-circle-o text-aqua"></i>مخالصة بمصروفات طالب</a></li>
                    <li><a href="{{ route('permissiontodepart.index') }}"><i class="fa fa-circle-o text-aqua"></i> اذونات الانصراف للطبة</a></li>
                    <li><a href="{{ route('student-transfers.index') }}"><i class="fa fa-circle-o text-aqua"></i> طلب تحويل طالب</a></li>
                    
                  </ul>
                </li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-home"></i>
                <span>تقارير الطلاب</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('student-reports', ['report' => 'report-emp-student']) }}"><i class="fa fa-circle-o text-aqua"></i> عرض ابناء العاملين</a></li>
                <li><a href="{{ route('report-separates.index') }}"><i class="fa fa-circle-o text-aqua"></i> قرار فصل</a></li>
                <li><a href="{{ route('report-warnings.index') }}"><i class="fa fa-circle-o text-aqua"></i> انذار فصل</a></li>
                {{-- <li><a href="{{ route('student-reports', ['report' => 'report-auth']) }}"><i class="fa fa-circle-o text-aqua"></i>عرض بيانات دخول الموقع</a></li> --}}
                
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> بيانات الطلاب
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('student-reports', ['report' => 'report-school-register']) }}"><i class="fa fa-circle-o text-aqua"></i> السجل المدرسى</a></li>
                    <li><a href="{{ route('student-reports', ['report' => 'report-fee-completion']) }}"><i class="fa fa-circle-o text-aqua"></i> مخالصه بمصروفات طالب</a></li>
                    <li><a href="{{ route('student-reports', ['report' => 'report-kindness']) }}"><i class="fa fa-circle-o text-aqua"></i> تقرير شهادة حسن سير وسلوك</a></li>
                    <li><a href="{{ route('student-reports', ['report' => 'report-sudent-statement']) }}"><i class="fa fa-circle-o text-aqua"></i> تقرير حركة طالب</a></li>
                    <li><a href="{{ route('report-not-complate-data') }}"><i class="fa fa-circle-o text-aqua"></i>طلاب لم تكتمل بياناتهم</a></li>
                    <li><a href="{{ route('student-reports', ['report' => 'report-student-attendances']) }}"><i class="fa fa-circle-o text-aqua"></i> تقرير غياب الطلاب</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-money text-red"></i>
                <span>الشؤون المالية</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('transactions.index') }}"><i class="fa fa-circle-o text-aqua"></i> العمليات المالية</a></li>
                <li><a href="{{ route('operations.index') }}"><i class="fa fa-circle-o text-aqua"></i> دفع رسوم</a></li>
                <li><a href="{{ route('rsc-types.index') }}"><i class="fa fa-circle-o text-aqua"></i> الخزن المالية</a></li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> الرسوم
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('pay-classes.index') }}"><i class="fa fa-circle-o text-aqua"></i> رسوم الصفوف</a></li>
                  </ul>
                </li>
              </ul>
            </li>
      
            <li class="treeview">
              <a href="#">
                <i class="fa fa-money text-red"></i>
                <span>حسابات الطلاب</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('pay-rules.index') }}"><i class="fa fa-circle-o text-aqua"></i> بنود رسوم الطلاب</a></li>
                {{-- <li><a href="{{ route('students.fees') }}"><i class="fa fa-circle-o text-aqua"></i> رسوم الطلاب</a></li> --}}
                {{-- <li><a href="{{ route('sms.index') }}"><i class="fa fa-circle-o text-aqua"></i> ارسال رسائل SMS للرسوم</a></li> --}}
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> الرسوم
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('pay-classes.index') }}"><i class="fa fa-circle-o text-aqua"></i> رسوم الصفوف</a></li>
                    <li><a href="{{ route('transactions.index') }}"><i class="fa fa-circle-o text-aqua"></i> العمليات المالية</a></li>
                    <li><a href="{{ route('operations.index') }}"><i class="fa fa-circle-o text-aqua"></i> دفع رسوم</a></li>
                    <li><a href="{{ route('rsc-types.index') }}"><i class="fa fa-circle-o text-aqua"></i> الخزن المالية</a></li>
                    <li><a href="{{ route('pay-registration') }}"><i class="fa fa-circle-o text-aqua"></i> رسوم تسجيل الطالب</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> الخصومات
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('discounts') }}"><i class="fa fa-circle-o text-aqua"></i> تنزيل خصومات</a></li>
                    <li><a href="{{ route('discount-setting') }}"><i class="fa fa-circle-o text-aqua"></i>اعدادات الخصومات</a></li>
                  </ul>
                </li>
              </ul>
            </li>
    
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o text-aqua"></i>
                <span>تقرير حسابات الطلاب</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('student-reports', ['report' => 'report-separate']) }}"><i class="fa fa-circle-o text-aqua"></i> المدفوعات حسب المراحل</a></li>
                <li><a href="{{ route('student-reports', ['report' => 'report-warning']) }}"><i class="fa fa-circle-o text-aqua"></i> مدفوعات الحافلة</a></li>
                
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-home"></i>
                <span>شوؤن تعليمية</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="{{ route('levels.index') }}"><i class="fa fa-circle-o text-aqua"></i> المراحل التعلمية</a></li>
                  <li><a href="{{ route('classrooms.index') }}"><i class="fa fa-circle-o text-aqua"></i> الصفوف التعلمية</a></li>
                  <li><a href="{{ route('parts.index') }}"><i class="fa fa-circle-o text-aqua"></i> الفصول التعلمية</a></li>
                  <li><a href="{{ route('subjects.index') }}"><i class="fa fa-circle-o text-aqua"></i>المواد التعلمية</a></li>
                  <li><a href="{{ route('timetables.index') }}"><i class="fa fa-circle-o text-aqua"></i>جدول الحصص</a></li>
                  <li><a href="{{ route('evaluations.index') }}"><i class="fa fa-circle-o text-aqua"></i>تقييم الطلاب</a></li>
                  <li><a href="{{ route('examinations.index') }}"><i class="fa fa-circle-o text-aqua"></i>الامتحانات</a></li>
                  {{-- <li><a href="{{ route('dist-students.index') }}"><i class="fa fa-circle-o text-aqua"></i> توزيع الطلاب علي الفصول</a></li> --}}
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-users text-green"></i>
                <span>تقرير شوؤن تعليمية</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('student-reports', ['report' => 'levels']) }}"><i class="fa fa-circle-o text-aqua"></i> تقرير المراحل</a></li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> الصفوف
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('student-reports', ['report' => 'report-data-classrooms']) }}"><i class="fa fa-circle-o text-aqua"></i> تقرير كل بيانات الصف</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> الفصول
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('student-reports', ['report' => 'report-parts']) }}"><i class="fa fa-circle-o text-aqua"></i> تقرير الفصول</a></li>
                    <li><a href="{{ route('student-reports', ['report' => 'report-count-parts']) }}"><i class="fa fa-circle-o text-aqua"></i> عدد الفصول بكل المراحل </a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-sitemap text-yellow"></i>
                <span>شوؤن الكنترول</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <router-link :to="{name: 'soon'}">
                    <i class="fa fa-circle-o"></i>المعدل الدراسي
                  </router-link>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> اعمال الكنترول
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>اضافة كنترول
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>اضافة لجان
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>اضافة ارقام جلوس
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>تعديل ارقام الجلوس
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>اضافة الارقام السرية
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>كشف مناداة اللجان
                      </router-link>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> الكنترول الأمريكى
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>اضافة درجات المواد
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>عرض درجات المواد
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>نتيجة العام الدراسى
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>ترصيد درجات من شيت اكسل
                      </router-link>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> اعمال اعضاء الكنترول
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>تسجيل غياب امتحان
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>اعضاء الكونترول
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>تسجيل مراقبين اللجان
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i> حضور وانصراف يدوي
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>اقرار الانتهاء من المنهج الدراسي
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>كشوف مراقبة اللجان
                      </router-link>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> ترصيد النتائج
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>ترصيد نتائج النصف الاول والثاني
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>اضافة نتائج الدور الثاني
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>ترصيد النتائج الشهرية
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>ترصيد درجات عناصر المواد
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>ترصيد درجات المواد
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>تعديل الدرجات للمراجع
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>كشفاللجان
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>كشفاللجان
                      </router-link>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> المواد
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>كشفاللجان
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>اضافة مواد
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>عناصر المادة
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>اعدادات تقدير الدرجات
                      </router-link>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> عرض درجات
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>عرض درجات الترم الاول
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>عرض نتائج اخر العام
                      </router-link>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> تقارير الكنترول
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>تقرير النتائج الشهرية
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>تقرير الرقم السري
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i> حضور وانصراف اعضاء الكنترول
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>تقرير حركة الاسئلة والاجابات
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>تقرير احصاء اعمال الكنترول
                      </router-link>
                    </li>
                    <li>
                      <router-link :to="{name: 'soon'}">
                        <i class="fa fa-circle-o"></i>تقرير نجاح ورسوب الطلاب
                      </router-link>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>


            <li class="header">شوؤن الموظفين</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users text-green"></i>
                <span>شئون الموظفين</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('calends.index') }}"><i class="fa fa-circle-o text-aqua"></i> لوائح المخالفات</a></li>
                <li><a href="{{ route('add-calend.index') }}"><i class="fa fa-circle-o text-aqua"></i> اضافة مخالفة الى موظف</a></li>
                <li><a href="{{ route('bear-in-minds.index') }}"><i class="fa fa-circle-o text-aqua"></i> لفت نظر</a></li>
                <li><a href="{{ route('emp-absences.index') }}"><i class="fa fa-circle-o text-aqua"></i> تسجيل غياب الموظفين</a></li>
                <li><a href="{{ route('cut-allowances.index') }}"><i class="fa fa-circle-o text-aqua"></i> خصومات او بدلات</a></li>
                <li><a href="{{ route('emp-pulls.index') }}"><i class="fa fa-circle-o text-aqua"></i> طلب اخلاء طرف</a></li>
                
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> الاعدادت
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('managaments.index') }}"><i class="fa fa-circle-o text-aqua"></i> الهيكل الاداري</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> الموظف
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('employees.index') }}"><i class="fa fa-circle-o text-aqua"></i> الموظفين</a></li>
                    <li><a href="{{ route('employees.create') }}"><i class="fa fa-circle-o text-aqua"></i> اضافة موظف جديد</a></li>
                    {{-- <li><a href="{{ route('soon') }}"><i class="fa fa-circle-o text-aqua"></i> البيانات الوظيفية</a></li> --}}
                  </ul>
                </li>
                <li><a href="{{ route('agreements.index') }}"><i class="fa fa-circle-o text-aqua"></i> اقرارات</a></li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> الاوذونات
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('emp-setting-perissions') }}"><i class="fa fa-circle-o text-aqua"></i> اعدادات الآذونات</a></li>
                    <li><a href="{{ route('emp-perissions.index') }}"><i class="fa fa-circle-o text-aqua"></i> اذونات الموظفين</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> الاجازات
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('emp-holidays.index') }}"><i class="fa fa-circle-o text-aqua"></i> طلب اجازة</a></li>
                    {{-- <li><a href="{{ route('formal-holiday') }}"><i class="fa fa-circle-o text-aqua"></i> الإجازات الرسمية</a></li> --}}
                    <li><a href="{{ route('add-holidays.index') }}"><i class="fa fa-circle-o text-aqua"></i> اضافة اسم اجازاة</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> الرواتب
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('salary-details') }}"><i class="fa fa-circle-o text-aqua"></i> اعتماد رواتب مفصل</a></li>
                    <li><a href="{{ route('rewards-punition.index') }}"><i class="fa fa-circle-o text-aqua"></i> المكافآت والجزاءات</a></li>
                    <li><a href="{{ route('realliance-salary') }}"><i class="fa fa-circle-o text-aqua"></i> اعتماد الرواتب</a></li>
                    <li><a href="{{ route('progenitors.index') }}"><i class="fa fa-circle-o text-aqua"></i> سٌلف الموظفين</a></li>
                    <li><a href="{{ route('overpayment') }}"><i class="fa fa-circle-o text-aqua"></i> زيادة الرواتب الدورية لموظف</a></li>
                    <li><a href="{{ route('overpayment-division') }}"><i class="fa fa-circle-o text-aqua"></i> زيادة الرواتب على الشرائح</a></li>

                    <!-- <li><router-link :to="{name: 'salary-statement'}"> <i class="fa fa-circle-o"></i> كشف الرواتب </router-link></li> -->
                  </ul>
                <li>
                  <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> تقييم الموظف
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('evaluation-items.index') }}"><i class="fa fa-circle-o text-aqua"></i> عناصر تقييم الموظف</a></li>
                    <li><a href="{{ route('emp-evaluation.index') }}"><i class="fa fa-circle-o text-aqua"></i> تقييم الموظف</a></li>
                  </ul>
                </li>
              </ul>
            </li>
    
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o text-aqua"></i>
                <span>تقارير الموظفين</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('employee-reports', ['report' => 'report-permission']) }}"><i class="fa fa-circle-o text-aqua"></i> تقرير اذونات موظف</a></li>
                <li><a href="{{ route('employee-reports', ['report' => 'report-rewards-punition']) }}"><i class="fa fa-circle-o text-aqua"></i> تقرير الخصومات والمكافأت</a></li>
                <li><a href="{{ route('employee-reports', ['report' => 'report-search']) }}"><i class="fa fa-circle-o text-aqua"></i> بحث الموظفين</a></li>
                <li><a href="{{ route('employee-reports', ['report' => 'report-salary']) }}"><i class="fa fa-circle-o text-aqua"></i> تقرير التعريف بالراتب</a></li>
                <li><a href="{{ route('employee-reports', ['report' => 'report-progenitor']) }}"><i class="fa fa-circle-o text-aqua"></i> تقرير سلف الموظفين</a></li>
                <li><a href="{{ route('employee-reports', ['report' => 'report-absence']) }}"><i class="fa fa-circle-o text-aqua"></i> تقرير غياب الموظفين</a></li>
                <li><a href="{{ route('employee-reports', ['report' => 'report-evaluation']) }}"><i class="fa fa-circle-o text-aqua"></i> تقرير تقييم الموظفين</a></li>
                <li><a href="{{ route('employee-reports', ['report' => 'reportvels']) }}"><i class="fa fa-circle-o text-aqua"></i> تقرير</a></li>
              </ul>
            </li>
    
            <li class="treeview">
              <a href="#">
                <i class="fa fa-home"></i>
                <span>اولياء الامور</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('student-parents.create') }}"><i class="fa fa-circle-o text-aqua"></i> اضافة اولياء الامور</a></li>
                <li><a href="{{ route('student-parents.index') }}"><i class="fa fa-circle-o text-aqua"></i> اولياء الامور</a></li>
                <li><a href="{{ route('student-parents.index') }}"><i class="fa fa-circle-o text-aqua"></i> اضافة اولياء الامور يدويا</a></li>
              </ul>
            </li>
            
            <li class="header">قسم الادارة</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users text-aqua"></i> <span>المستخدمين</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                {{-- <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o text-aqua"></i> كل المستخدمين</a></li> --}}
                <li>
                  <a href="#"><i class="fa fa-circle-o text-red"></i> {{ __('home/sidebar.roles') }} 
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('roles.index') }}"><i class="fa fa-circle-o"></i> {{ __('home/sidebar.all_roles') }}</a></li>
                    <li><a href="{{ route('roles.create') }}"><i class="fa fa-circle-o"></i>{{ __('home/sidebar.add_role') }}</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-circle-o text-yellow"></i> {{ __('home/sidebar.permissions') }} 
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('permissions.index') }}"><i class="fa fa-circle-o"></i> {{ __('home/sidebar.all_permissions') }}</a></li>
                    <li><a href="{{ route('permissions.create') }}"><i class="fa fa-circle-o"></i>{{ __('home/sidebar.add_permission') }}</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          
            <li class="treeview">
              <a href="#">
                <i class="fa fa-gears text-aqua"></i> <span>{{ __('home/sidebar.settings') }} </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="{{ route('settings.index') }}"><i class="fa fa-circle-o text-aqua"></i> {{ __('home/sidebar.settings') }}</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o text-red"></i> {{ __('home/sidebar.testimonials') }} 
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('testimonials.index') }}"><i class="fa fa-circle-o"></i> {{ __('home/sidebar.all_testimonials') }}</a></li>
                    <li><a href="{{ route('testimonials.create') }}"><i class="fa fa-circle-o"></i>{{ __('home/sidebar.add_testimonial') }}</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="header m-b-20"></li>
          </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
