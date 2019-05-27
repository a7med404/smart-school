<?php

function gender(){
    return [
        0 => 'انثي',
        1 => 'ذكر',
    ];
}
function valueOrPersentage(){
    return [
        0 => 'القيمة',
        1 => 'نسبه',
    ];
}

function offPrint(){
    return [
        1 => 'شهادة قيد طالب',
        2 => 'شهادة حسن سير وسلوك',
        3 => 'مخالصة بمصروفات طالب',
    ];
}

function is_mandatary(){
    return [
        0 => 'غير إجباري',
        1 => 'إجباري',
    ];
}

function payment_status(){
    return [
        1 => 'لم يدفع بعد',
        2 => 'جزئي',
        3 => 'كامل',
    ];
}

function blood_type(){
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


function religion(){
    return [
        1 => 'الاسلام',
        2 => 'المسيحية',
        3 => 'اخري',
    ];
}

function mr_d(){
    return [
        1 => 'السيد',
        2 => 'السيدة',
        3 => '\د',
        4 => '\أ',
        5 => '\بروف',
    ];
}

function relation(){
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

function nationality(){
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

function martial(){
    return [
        1 => 'متزوج',
        2 => ' عازب',
        3 => 'مطلق',
        4 => 'ارمل',

    ];
}

function is_die(){
    return [
        0 => 'حي',
        1 => ' ميت',
    ];
}

function agreementType(){
    return [
        1 => 'مؤقت',
        2 => ' دائم',
        2 => ' تعاقد',
    ];
}

function job_title(){
    return [
        1 => 'موظف',
        2 => ' معلم',
        2 => ' عامل',
    ];
}

function education_level(){
    return [
        1 => 'دبلوم',
        2 => ' بكلاريوس',
        3 => ' دبلوم عالي',
        4 => ' ماجستير',
        5 => ' دكتوراة ',
    ];
}

function safes(){
    return [
        1 => 'بنك الخرطوم',
        2 => ' بنك فيصل الاسلامي ',
        3 => 'بنك الخليج',
        4 => ' بنك الثروة الحيوانية',
        5 => ' بنك العمال ',
    ];
}

function RewardsPunition(){
    return [
        0 => 'مكافأة ',
        1 => 'خصم',
    ];
}

function getSelect($tableName){

    switch ($tableName) {
        case 'levels':
            $list = \DB::table('levels')->pluck('name', 'id');
            return $list->toArray();
            break;
        
        case 'job':
            $list = \DB::table('jobs')->where('status', 1)->pluck('name', 'id');
            return $list->toArray();
            break;
        default:
            $list = \App\Models\department::where('status', 1)->get();
            break;
    }
}

function getName($tableName, $id){
    if($id === null){ return "لا توجد بيانات"; }
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
            $list = \DB::table('identifcations')->pluck('identable_id', 'id');
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
            $list = \DB::table('employees')->pluck('name', 'id');
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
        default:
            $list = \DB::table('parts')->pluck('name', 'id');
            return $list->toArray();
            break;
    }
}

function getDefaultImage($imageName){
    
    return $imageName == null ? "default_customer_image.png" : "$imageName";
}
function getCustomerImageOrDefaultImage($imageName = null){
    if($imageName != null){
        if(\File::exists(public_path('storage/uploads/images/customers/'.$imageName))){
            return asset('storage/uploads/images/customers/'.$imageName);
        }
    return asset('storage/uploads/images/customers/default_customer_image.png');
    }
}