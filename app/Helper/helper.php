<?php

function gender()
{
    return [
        0 => 'انثي',
        1 => 'ذكر',
    ];
}
function getGender()
{
    return [
        '' => 'الكل',
        1 => 'ذكر',
        0 => 'انثي',
    ];
}
function valueOrPersentage()
{
    return [
        0 => 'القيمة',
        1 => 'نسبه',
    ];
}

function offPrint()
{
    return [
        'to-clinic' => 'تحويل للمركز الطبي',
        'record' => 'شهادة قيد طالب',
        'kindness' => 'شهادة حسن سير وسلوك',
        'completion' => 'مخالصة بمصروفات طالب',
    ];
}

function toggleOneZeroClass(){
    return [
        '0' => 'label label-default',
        '1' => 'label label-success',
    ];
}

function is_mandatary()
{
    return [
        0 => 'غير إجباري',
        1 => 'إجباري',
    ];
}
function status(){
    return [
        '0' => 'Disable',
        '1' => 'Enable',
    ];
}
function payment_status()
{
    return [
        1 => 'لم يدفع بعد',
        2 => 'جزئي',
        3 => 'كامل',
    ];
}

function bloodType()
{
    return [
        1 => 'O+',
        2 => 'O-',
        3 => 'A+',
        4 => 'A-',
        5 => 'B+',
        6 => 'B-',
        7 => 'AB+',
        8 => 'AB-',
    ];
}


function religion()
{
    return [
        1 => 'الاسلام',
        2 => 'المسيحية',
        3 => 'اخري',
    ];
}

function mr_d()
{
    return [
        1 => 'السيد',
        2 => 'السيدة',
        3 => '\د',
        4 => '\أ',
        5 => '\بروف',
    ];
}

function relation()
{
    return [
        1 => 'أب',
        2 => 'ام',
        3 => 'خال',
        4 => 'عم',
        5 => 'خالة',
        6 => 'عمة',
        7 => 'احرى',
    ];
}

function nationality()
{
    return [
        1 => 'السودان',
        2 => 'جنوب السودان',
        3 => 'مصر',
        4 => 'اثيوبيا',
        5 => 'اريتريا',
        6 => 'سوريا',
        7 => 'احرى',
    ];
}

function educationYear()
{
    return [
        '2013/2014' => '2013/2014',
        '2014/2015' => '2014/2015',
        '2015/2016' => '2015/2016',
        '2016/2017' => '2016/2017',
        '2017/2018' => '2017/2018',
        '2018/2019' => '2018/2019',
        '2019/2020' => '2019/2020',
        '2020/2021' => '2020/2021',
        '2021/2022' => '2021/2022',
        '2022/2023' => '2022/2023',
        '2023/2024' => '2023/2024',
        '2024/2025' => '2024/2025',
    ];
}

function studyStatus()
{
    return [
        1 => 'مرفع',
        2 => 'جديد',
        3 => 'عائد',

    ];
}
function martial()
{
    return [
        1 => 'متزوج',
        2 => ' عازب',
        3 => 'مطلق',
        4 => 'ارمل',

    ];
}

function is_die()
{
    return [
        0 => 'حي',
        1 => ' ميت',
    ];
}

function agreementType()
{
    return [
        1 => 'استقالة',
        2 => ' استلام مرتبات',
        3 => ' اصدار عقوبات',
        4 => 'التحاق بالعمل',
        5 => ' إذن خروج',
        6 => ' اقرار القيام بالعمل',
    ];
}

function job_title()
{
    return [
        1 => 'موظف',
        2 => ' معلم',
        3 => ' عامل',
    ];
}




function getCity(){
    return [
        '1' => 'Sedan',
        '2' => 'SUV / Crossover',
        '3' => 'Hatchback',
        '4' => 'Convertible',
        '5' => 'Minivan',
        '6' => 'Pickup Truck',
        '7' => 'Coupe',
        '8' => 'Wagon',
    ];
}


function getLocal(){
    return [
        '1' => 'Sedan',
        '2' => 'SUV / Crossover',
        '3' => 'Hatchback',
        '4' => 'Convertible',
        '5' => 'Minivan',
        '6' => 'Pickup Truck',
        '7' => 'Coupe',
        '8' => 'Wagon',
    ];
}

function safes()
{
    return [
        1 => 'بنك الخرطوم',
        2 => ' بنك فيصل الاسلامي ',
        3 => 'بنك الخليج',
        4 => ' بنك الثروة الحيوانية',
        5 => ' بنك العمال ',
    ];
}

function RewardsPunition()
{
    return [
        0 => 'مكافأة ',
        1 => 'خصم',
    ];
}

function calendType()
{
    return [
        1 => 'مخالفات متعلقة بنظام العمل ',
        2 => 'مخالفات متعلقة بسلوك العمل',
        3 => 'مخالفات متعلقة بمواعيد العمل',
    ];
}

function attendanceStatus()
{
    return [
        1 => 'حاضر',
        2 => 'غائب',
        3 => 'اخرى',
    ];
}

function is_partner_son()
{
    return [
        0 => 'لا',
        1 => 'نعم',

    ];
}

function identifcationTypes()
{
    return [
        1 => 'جواز سفر',
        2 => 'رقم وطني',
        3 => 'بطاقة قومية',
    ];
}

function is_staff_son()
{
    return [
        0 => 'لا',
        1 => 'نعم',
    ];
}

function certificateDegree()
{
    return [
        1 => 'إمتياز',
        2 => 'جيد جدا',
        3 => 'جيد',
        4 => 'مقبول',
        5 => 'ضعيف',
    ];
}

function certificateType()
{
    return [
        1 => 'دبلوم',
        2 => 'بكلاريوس ',
        3 => 'دبلوم عالي',
        4 => 'ماجستير',
        5 => 'دكتوراة',
        5 => 'الاستاذية',
        5 => 'اخرى',
    ];
}

function experience_years()
{
    return [
        1 => '1',
        2 => '2 ',
        3 => '3',
        4 => '4',
        5 => '5',
        5 => '6',
        5 => 'اخرى',
    ];
}


function getSelect($tableName, $all = null)
{
    // $list = [];
    // $list[0] = ($all) ? '' : $list ;
    switch ($tableName) {
        case 'levels':
            $list = \DB::table('levels')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'classrooms':
            $list = \DB::table('classrooms')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'parts':
            $list = \DB::table('parts')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'identifcations':
            $list = \DB::table('identifcations')->pluck('identifcationable_id', 'id');
            return $list->toArray();
            break;
        case 'students':
            $list = \DB::table('students')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'parts':
            $list = \DB::table('students')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'employees':
            $list = \DB::table('employees')->pluck('full_name', 'id');
            return $list->toArray();
            break;
        case 'pay_ruls':
            $list = \DB::table('pay_ruls')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'identifcations':
            $list = \DB::table('identifcations')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'addresses':
            $list = \DB::table('addresses')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'managaments':
            $list = \DB::table('managaments')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'departments':
            $list = \DB::table('departments')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'employees':
            $list = \DB::table('employees')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'add_holidays':
            $list = \DB::table('add_holidays')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'emp_perissions':
            $list = \DB::table('emp_perissions')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'evaluation_items':
            $list = \DB::table('evaluation_items')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'contacts':
            $list = \DB::table('contacts')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'calends':
            $list = \DB::table('calends')->pluck('name', 'id');
            return $list->toArray();
            break;
        default:
            $list = \DB::table('parts')->pluck('name', 'id');
            return $list->toArray();
            break;
    }
}

function getName($tableName, $id)
{
    if ($id === null) {
        return "...";
    } 
    switch ($tableName) {
        case 'levels':
            $list = \DB::table('levels')->pluck('name', 'id');
            return $list[$id];
            break;
        case 'classrooms':
            $list = \DB::table('classrooms')->pluck('name', 'id');
            return $list[$id];
            break;
        case 'parts':
            $list = \DB::table('parts')->pluck('name', 'id');
            return $list[$id];
            break;
        case 'identifcations':
            $list = \DB::table('identifcations')->pluck('identifcationable_id', 'id');
            return $list[$id];
            break;
        case 'students':
            $list = \DB::table('students')->pluck('name', 'id');
            return $list[$id];
            break;
        case 'parts':
            $list = \DB::table('students')->pluck('name', 'id');
            return $list[$id];
            break;
        case 'employees':
            $list = \DB::table('employees')->pluck('full_name', 'id');
            return $list[$id];
            break;
        case 'pay_ruls':
            $list = \DB::table('pay_ruls')->pluck('name', 'id');
            return $list[$id];
            break;
        case 'identifcations':
            $list = \DB::table('identifcations')->pluck('name', 'id');
            return $list[$id];
            break;
        case 'addresses':
            $list = \DB::table('addresses')->pluck('name', 'id');
            return $list[$id];
            break;
        case 'managaments':
            $list = \DB::table('managaments')->pluck('name', 'id');
            return $list[$id];
            break;
        case 'departments':
            $list = \DB::table('departments')->pluck('name', 'id');
            return $list[$id];
            break;
        case 'employees':
            $list = \DB::table('employees')->pluck('name', 'id');
            return $list[$id];
            break;
        case 'add_holidays':
            $list = \DB::table('add_holidays')->pluck('name', 'id');
            return $list[$id];
            break;
        case 'emp_perissions':
            $list = \DB::table('emp_perissions')->pluck('name', 'id');
            return $list[$id];
            break;
        case 'evaluation_items':
            $list = \DB::table('evaluation_items')->pluck('name', 'id');
            return $list[$id];
            break;
        case 'contacts':
            $list = \DB::table('contacts')->pluck('name', 'id');
            return $list[$id];
            break;
        case 'calends':
            $list = \DB::table('calends')->pluck('name', 'id');
            return $list[$id];
            break;
        default:
            $list = \DB::table('parts')->pluck('name', 'id');
            return $list->toArray();
            break;
    }
}

function getDefaultImage($imageName)
{

    return $imageName == null ? "default_customer_image.png" : "$imageName";
}
function getCustomerImageOrDefaultImage($imageName = null)
{
    if ($imageName != null) {
        if (\File::exists(public_path('storage/uploads/images/customers/' . $imageName))) {
            return asset('storage/uploads/images/customers/' . $imageName);
        }
        return asset('storage/uploads/images/customers/default_customer_image.png');
    }
}







