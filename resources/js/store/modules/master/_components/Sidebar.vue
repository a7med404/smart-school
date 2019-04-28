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
        <p>Alexander Pierce</p>
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
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <router-link :to="{name: 'dashboard'}"><i class="fa fa-home"></i> <span>الرئيسية</span></router-link>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>شوؤن الطلاب</span>
          <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><router-link :to="{name: 'student-indebtedness'}"> <i class="fa fa-circle-o"></i>مديونيات الطلاب</router-link></li>
          <li><router-link :to="{name: 'add-to-class'}"> <i class="fa fa-circle-o"></i>ربط المستخدمين بالفصول</router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير ربط المستخدمين بالفصول</router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>طلب سحب ملف الطالب</router-link></li>
          <li>
            <a href="#"><i class="fa fa-circle-o"></i> الطالب
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>اضافة طالب</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>مرفقات الطالب</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>اضافة طالب يدويا</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>اضافة مسكن</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>بحث متقدم</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o"></i> اولياء الامور
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'add-parent'}"> <i class="fa fa-circle-o"></i>اضافة اولياء الامور</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>اضافة اولياء الامور يدويا</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o"></i> الاجازات و الغياب
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'attendance'}"> <i class="fa fa-circle-o"></i>تسجيل الاجازات و الغياب</router-link></li>
              <li><router-link :to="{name: 'Attendancec-for-class'}"> <i class="fa fa-circle-o"></i> تسجيل الاجازات و الغياب لفصل</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o"></i> مستخرجات
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>شهادة قيد طالب</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>شهادة حسن سير و سلوك</router-link></li>
              <li><router-link :to="{name: 'permissiontodepart'}"> <i class="fa fa-circle-o"></i>اذونات الانصراف للطبة</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>مخالصة بمصروفات طالب</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>طلب تحويل طالب</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o"></i> شوؤن تعليمية
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
          <li>
            <a href="#"><i class="fa fa-circle-o"></i> استلام الطالب
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'receipts'}"> <i class="fa fa-circle-o"></i>عرض مستلمي الطالب</router-link></li>
              <li><router-link :to="{name: 'add-receipt'}"> <i class="fa fa-circle-o"></i> مسؤلي تسليم الطالب</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o"></i> تقارير الطلاب
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
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>عرض اولياء الامور</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>Personal</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>قرار فصل</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>انذار فصل</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o"></i> بيانات الطلاب
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير الجودة</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير اماكن خالية</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير غياب الطلاب</router-link></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-circle-o"></i> الفصول
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
            <a href="#"><i class="fa fa-circle-o"></i> الصفوف
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير كل بيانات الصف</router-link></li>
              <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقرير الصفوف</router-link></li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>حسابات الطلاب</span>
          <span class="pull-right-container">
          <span class="label label-primary pull-right">4</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>بنود رسوم الطلاب</router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i> دفع الرسوم لاكثر من طالب </router-link></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>ادارة الحافلات</span>
          <span class="pull-right-container">
          <span class="label label-primary pull-right">4</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>اضافة حافلة</router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>اضافة محطات حافلة</router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>اشتراك الحافلة</router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>تقارير الحافلات</router-link></li>
          <li><router-link :to="{name: 'add-student'}"> <i class="fa fa-circle-o"></i>اضافة سائقين للحافلات</router-link></li>
        </ul>
      </li>
      <li>
      <a href="pages/widgets.html">
          <i class="fa fa-th"></i> <span>Widgets</span>
          <span class="pull-right-container">
          <small class="label pull-right bg-green">new</small>
          </span>
      </a>
      </li>
      <li>
      <a href="pages/mailbox/mailbox.html">
          <i class="fa fa-envelope"></i> <span>Mailbox</span>
          <span class="pull-right-container">
          <small class="label pull-right bg-yellow">12</small>
          <small class="label pull-right bg-green">16</small>
          <small class="label pull-right bg-red">5</small>
          </span>
      </a>
      </li>
      <li class="treeview">
      <a href="#">
          <i class="fa fa-share"></i> <span>Multilevel</span>
          <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        <li>
        <a href="#"><i class="fa fa-circle-o"></i> Level One
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
          <li>
          <a href="#"><i class="fa fa-circle-o"></i> Level Two
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
          </ul>
          </li>
        </ul>
        </li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
      </ul>
      </li>
      <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
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
