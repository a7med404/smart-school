<template>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="modules/master/images/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>a7med 404</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="active treeview">
        <router-link :to="{name: 'dashboard'}"><i class="fa fa-dashboard"></i> <span>الرئيسية</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green"><i class="fa fa-home"></i></small>
          </span>
        </router-link>
      </li>
      <li class="header">شوؤن الطلاب</li>

              
      <li class="treeview">
        <a href="#">
        <i class="fa fa-users text-green"></i> <span>شوؤن الطلاب</span>
          <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><router-link :to="{name: 'add-to-class'}"> <i class="fa fa-circle-o"></i>ربط المستخدمين بالفصول</router-link></li>
          <li><router-link :to="{name: 'student-pull'}"> <i class="fa fa-circle-o"></i>طلب سحب ملف الطالب</router-link></li>
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> الطالب
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>اضافة طالب</router-link></li>
              <li><router-link :to="{name: 'add-student-manual'}"> <i class="fa fa-circle-o"></i>اضافة طالب يدويا</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> الاجازات و الغياب
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'attendance'}"> <i class="fa fa-circle-o"></i>تسجيل الاجازات و الغياب</router-link></li>
              <li><router-link :to="{name: 'Attendancec-for-class'}"> <i class="fa fa-circle-o"></i> تسجيل لفصل</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> مستخرجات
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'record'}"> <i class="fa fa-circle-o"></i>شهادة قيد طالب</router-link></li>
              <li><router-link :to="{name: 'kindness'}"> <i class="fa fa-circle-o"></i>شهادة حسن سير و سلوك</router-link></li>
              <li><router-link :to="{name: 'permissiontodepart'}"> <i class="fa fa-circle-o"></i>اذونات الانصراف للطبة</router-link></li>
              <li><router-link :to="{name: 'completion'}"> <i class="fa fa-circle-o"></i>مخالصة بمصروفات طالب</router-link></li>
              <li><router-link :to="{name: 'student-transfer'}"> <i class="fa fa-circle-o"></i>طلب تحويل طالب</router-link></li>
              <li><router-link :to="{name: 'empty-palce'}"> <i class="fa fa-circle-o"></i>اماكن خاليه لطالب جديده</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> شوؤن تعليمية
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'education-levels'}"> <i class="fa fa-circle-o"></i>المراحل التعلمية</router-link></li>
              <li><router-link :to="{name: 'classrooms'}"> <i class="fa fa-circle-o"></i> الصفوف التعلمية</router-link></li>
              <li><router-link :to="{name: 'part-rooms'}"> <i class="fa fa-circle-o"></i> الفصول التعلمية</router-link></li>
              <li><router-link :to="{name: 'dist-students'}"> <i class="fa fa-circle-o"></i>توزيع الطلاب علي الفصول</router-link></li>
            </ul>
          </li>
          <!-- <li>
            <a href="#"><i class="fa fa-circle-o"></i> استلام الطالب
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'receipts'}"> <i class="fa fa-circle-o"></i>عرض مستلمي الطالب</router-link></li>
              <li><router-link :to="{name: 'add-receipt'}"> <i class="fa fa-circle-o"></i> مسؤلي تسليم الطالب</router-link></li>
            </ul>
          </li> -->
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> تقارير الطلاب
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير الجودة</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير المراحل</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير قائمة الفصول</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير احصاء المراحل</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>عرض ابناء العاملين</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>بيانات طالب</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير ربط المستخدمين بالفصول</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>عرض اولياء الامور</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>قرار فصل</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>انذار فصل</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> بيانات الطلاب
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير الجودة</router-link></li>
              <!-- <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير اماكن خالية</router-link></li> -->
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير غياب الطلاب</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> الفصول
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير الفصول</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير الطلاب بدون فصول </router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> الصفوف
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير الصف</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير الصفوف</router-link></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i>
          <span> تقارير الطلاب</span>
          <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><router-link :to="{name: 'report-quality'}"> <i class="fa fa-circle-o"></i> تقرير الجودة </router-link></li>
          <li><router-link :to="{name: 'report-levels'}"> <i class="fa fa-circle-o"></i> تقرير المراحل  </router-link></li>
          <li><router-link :to="{name: 'report-classrooms'}"> <i class="fa fa-circle-o"></i> تقرير قائمة الفصول </router-link></li>
          <li><router-link :to="{name: 'report-emp-student'}"> <i class="fa fa-circle-o"></i> عرض ابناء العاملين </router-link></li>
          <!-- <li><router-link :to="{name: 'report-evaluation'}"> <i class="fa fa-circle-o"></i> بيانات طالب </router-link></li> -->
          <li><router-link :to="{name: 'report-separate'}"> <i class="fa fa-circle-o"></i> قرار فصل  </router-link></li>
          <li><router-link :to="{name: 'report-warning'}"> <i class="fa fa-circle-o"></i> انذار فصل </router-link></li>
          <li><router-link :to="{name: 'report-auth'}"> <i class="fa fa-circle-o"></i> عرض بيانات دخول الموقع </router-link></li>
        
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i>  بيانات الطلاب
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'report-school-register'}"> <i class="fa fa-circle-o"></i>السجل المدرسى</router-link></li>
              <li><router-link :to="{name: 'report-fee-completion'}"> <i class="fa fa-circle-o"></i>مخالصه بمصروفات طالب</router-link></li>
              <li><router-link :to="{name: 'report-kindness'}"> <i class="fa fa-circle-o"></i>تقرير شهادة حسن سير وسلوك</router-link></li>
              <li><router-link :to="{name: 'report-student-permission'}"> <i class="fa fa-circle-o"></i>تقرير انصراف الطلاب باذن</router-link></li>
              <li><router-link :to="{name: 'report-sudent-statement'}"> <i class="fa fa-circle-o"></i>تقرير حركة طالب</router-link></li>
              <li><router-link :to="{name: 'report-not-complate-data'}"> <i class="fa fa-circle-o"></i>طلاب لم تكتمل بياناتهم</router-link></li>
              <li><router-link :to="{name: 'report-student-absece'}"> <i class="fa fa-circle-o"></i>تقرير غياب الطلاب</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i>   الصفوف
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'report-data-classrooms'}"> <i class="fa fa-circle-o"></i>تقرير كل بيانات الصف</router-link></li>
              <li><router-link :to="{name: 'report-pay'}"> <i class="fa fa-circle-o"></i>تقرير الصفوف بنوع الدراسة</router-link></li>
            </ul>
          </li> 
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i>   الفصول
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'report-parts'}"> <i class="fa fa-circle-o"></i>تقرير الفصول</router-link></li>
              <li><router-link :to="{name: 'report-without-part'}"> <i class="fa fa-circle-o"></i>تقرير الطلاب بدون فصول</router-link></li>
              <li><router-link :to="{name: 'report-count-parts'}"> <i class="fa fa-circle-o"></i> عدد الفصول بكل المراحل</router-link></li>
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
          <li><router-link :to="{name: 'pay-ruls'}"> <i class="fa fa-circle-o"></i>بنود رسوم الطلاب</router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i> دفع الرسوم لاكثر من طالب </router-link></li>
          <li><router-link :to="{name: 'crideit'}"> <i class="fa fa-circle-o"></i> المديونيات </router-link></li>
          <li><router-link :to="{name: 'student-indebtedness'}"> <i class="fa fa-circle-o"></i>مديونيات الطلاب</router-link></li>
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> الرسوم
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'pay-classes'}"> <i class="fa fa-circle-o"></i>رسوم الصفوف </router-link></li>
              <li><router-link :to="{name: 'pay'}"> <i class="fa fa-circle-o"></i>دفع رسوم</router-link></li>
              <li><router-link :to="{name: 'settings'}"> <i class="fa fa-circle-o"></i>اعدادت الرسوم </router-link></li>
              <li><router-link :to="{name: 'registration'}"> <i class="fa fa-circle-o"></i>رسوم تسجيل الطالب</router-link></li>
              <li><router-link :to="{name: 'recipt-settings'}"> <i class="fa fa-circle-o"></i>اعدادت الايصال</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> الخصومات
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'pay-classes'}"> <i class="fa fa-circle-o"></i>رسوم الصفوف </router-link></li>
              <li><router-link :to="{name: 'pay'}"> <i class="fa fa-circle-o"></i>دفع رسوم</router-link></li>
              <li><router-link :to="{name: 'settings'}"> <i class="fa fa-circle-o"></i>اعدادت الرسوم </router-link></li>
              <li><router-link :to="{name: 'registration'}"> <i class="fa fa-circle-o"></i>رسوم تسجيل الطالب</router-link></li>
              <li><router-link :to="{name: 'recipt-settings'}"> <i class="fa fa-circle-o"></i>اعدادت الايصال</router-link></li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o text-aqua"></i>
          <span>تقرير حسابات الطلاب </span>
          <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i> المدفوعات حسب المراحل</router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i> مدفوعات الحافلة </router-link></li>
        </ul>
      </li>


      <li class="header">شوؤن تعليمية</li>
      <li class="treeview">
        <router-link :to="{name: 'education'}"> <i class="fa fa-book text-green"></i><span>شوؤن تعليمية</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-yellow">12</small>
            <small class="label pull-right bg-green">16</small>
            <small class="label pull-right bg-red">5</small>
          </span>
        </router-link>
      </li>
     
      <li class="treeview">
        <a href="#">
          <i class="fa fa-exchange"></i>
          <span>الترحيل والتوزيع</span>
          <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>توزيع الطلاب على الفصول</router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>توزيع الطلاب على المستويات</router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>توزيع الطلاب على المقررات</router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>ترحيل الطلاب للصفوف الأعلى</router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>ترحيل الطلاب للمستويات الأعلى</router-link></li>
        </ul>
      </li>


      <li class="header">شوؤن الموظفين</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users text-green"></i> <span> شئون الموظفين </span>
          <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><router-link :to="{name: 'calends'}"> <i class="fa fa-circle-o"></i>لوائح المخالفات</router-link></li>
          <li><router-link :to="{name: 'add-calend'}"> <i class="fa fa-circle-o"></i>اضافة مخالفةالى موظف</router-link></li>
          <li><router-link :to="{name: 'bear-in-mind'}"> <i class="fa fa-circle-o"></i> لفت نظر</router-link></li>
          <li><router-link :to="{name: 'emp-absence'}"> <i class="fa fa-circle-o"></i> تسجيل غياب  الموظفين</router-link></li>
          <li><router-link :to="{name: 'cut-allowance'}"> <i class="fa fa-circle-o"></i> خصومات او بدلات</router-link></li>
          <li><router-link :to="{name: 'emp-pool'}"> <i class="fa fa-circle-o"></i> طلب اخلاء طرف</router-link></li>
          <!-- <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i> تعديل سلف الموظفين</router-link></li> -->
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> الاعدادت
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'managaments'}"> <i class="fa fa-circle-o"></i>الهيكل الاداري</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> الموظف
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'employees'}"> <i class="fa fa-circle-o"></i>الموظفين</router-link></li>
              <li><router-link :to="{name: 'add-employee'}"> <i class="fa fa-circle-o"></i>اضافة موظف جديد</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i> البيانات الوظيفية</router-link></li>
            </ul>
          </li>
          <li><router-link :to="{name: 'add-parent'}"> <i class="fa fa-circle-o"></i>اقرارات</router-link></li>
          
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> الاوذونات
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'emp-setting-perissions'}"> <i class="fa fa-circle-o"></i> اعدادات الآذونات</router-link></li>
              <li><router-link :to="{name: 'emp-perissions'}"> <i class="fa fa-circle-o"></i> اذونات الموظفين</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> الاجازات
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'emp-holiday'}"> <i class="fa fa-circle-o"></i> طلب اجازة</router-link></li>
              <!-- <li><router-link :to="{name: 'emp-holiday-list'}"> <i class="fa fa-circle-o"></i> طلبات الآجازات</router-link></li> -->
              <li><router-link :to="{name: 'formal-holiday'}"> <i class="fa fa-circle-o"></i> الإجازات الرسمية</router-link></li>
              <li><router-link :to="{name: 'add-holiday'}"> <i class="fa fa-circle-o"></i> اضافة اسم اجازاة </router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> الرواتب
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'salary-details'}"> <i class="fa fa-circle-o"></i>اعتماد رواتب مفصل</router-link></li>
              <li><router-link :to="{name: 'rewards-punition'}"> <i class="fa fa-circle-o"></i>المكافآت والجزاءات</router-link></li>
              <li><router-link :to="{name: 'realliance-salary'}"> <i class="fa fa-circle-o"></i> اعتماد الرواتب</router-link></li>
              <li><router-link :to="{name: 'progenitor'}"> <i class="fa fa-circle-o"></i> سٌلف الموظفين</router-link></li>
              <!-- <li><router-link :to="{name: 'salary-statement'}"> <i class="fa fa-circle-o"></i> كشف الرواتب </router-link></li> -->
              <li><router-link :to="{name: 'overpayment'}"> <i class="fa fa-circle-o"></i> زيادة الرواتب الدورية لموظف </router-link></li>
              <li><router-link :to="{name: 'overpayment-division'}"> <i class="fa fa-circle-o"></i> زيادة الرواتب على الشرائح </router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> تقييم الموظف
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'evaluation-item'}"> <i class="fa fa-circle-o"></i>عناصر تقييم الموظف</router-link></li>
              <li><router-link :to="{name: 'evaluation-emp'}"> <i class="fa fa-circle-o"></i> تقييم الموظف</router-link></li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i>
          <span> تقارير الموظفين</span>
          <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><router-link :to="{name: 'report-permission'}"> <i class="fa fa-circle-o"></i>تقرير اذونات موظف</router-link></li>
          <li><router-link :to="{name: 'report-rewards-punition'}"> <i class="fa fa-circle-o"></i>تقرير الخصومات والمكافأت</router-link></li>
          <li><router-link :to="{name: 'report-search'}"> <i class="fa fa-circle-o"></i>بحث الموظفين</router-link></li>
          <li><router-link :to="{name: 'report-salary'}"> <i class="fa fa-circle-o"></i>تقرير التعريف بالراتب </router-link></li>
          <li><router-link :to="{name: 'report-progenitor'}"> <i class="fa fa-circle-o"></i>تقرير سلف الموظفين</router-link></li>
          <li><router-link :to="{name: 'report-absence'}"> <i class="fa fa-circle-o"></i>تقرير غياب الموظفين</router-link></li>
          <li><router-link :to="{name: 'report-evaluation'}"> <i class="fa fa-circle-o"></i>تقرير تقييم الموظفين </router-link></li>
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
          <li><router-link :to="{name: 'add-parent'}"> <i class="fa fa-circle-o"></i>اضافة اولياء الامور</router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>اضافة اولياء الامور يدويا</router-link></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o text-aqua"></i>
          <span> التقارير والإحصائيات</span>
          <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>قوائم الطلاب (بمعايير متنوعة). </router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i> تقارير الغياب / التأخر / الاستئذان </router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i> تقارير المخالفات السلوكية </router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i> تقارير أعداد الطلاب (بمعايير متنوعة) </router-link></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-bus text-green"></i>
          <span>ادارة الحافلات</span>
          <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><router-link :to="{name: 'vehicles'}"> <i class="fa fa-circle-o"></i>إدارة بيانات الحافلات</router-link></li>
          <li><router-link :to="{name: 'vehicle-routes'}"> <i class="fa fa-circle-o"></i>إدارة بيانات خطوط السير</router-link></li>
          <li><router-link :to="{name: 'stations'}"> <i class="fa fa-circle-o"></i>إدارة المحطات</router-link></li>
          <li><router-link :to="{name: 'drivers'}"> <i class="fa fa-circle-o"></i>مشرفي الحافلات وتوزيعهم</router-link></li>
          <li><router-link :to="{name: 'subscriptions'}"> <i class="fa fa-circle-o"></i>تسجيل الطلاب في النقل</router-link></li>
          <li><router-link :to="{name: 'attendees'}"> <i class="fa fa-circle-o"></i>تسجيل حضور و انصراف</router-link></li>
          <li><router-link :to="{name: 'vehicle-reports'}"> <i class="fa fa-circle-o"></i>تقارير إدارة النقل</router-link></li>
        </ul>
      </li>


      <li class="header m-b-20"></li>
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
.slide-leave-active{
  transition: opacity .5s ease;
  opacity: 0;
  animation: slide-out .5s ease-in-out forwards;
}
.slide-leave {
  opacity: 1;
  transform: translateX(0);
}
.slide-enter-active {
  animation: slide-in .5s ease-out forwards;
}
@keyframes slide-out {
    0% {
      transform: translateY(0)
    }
    100% {
      transform: translateY(-30px)
    }
}

@keyframes slide-in {
    0% {
      transform: translateY(-30px)
    }
    100% {
      transform: translateY(0)
    }
}
</style>
