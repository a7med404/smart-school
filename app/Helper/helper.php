<?php

function gender(){
    return [
        0 => 'انثي',
        1 => 'ذكر',
    ];
}

function religion(){
    return [
        1 => 'الاسلام',
        2 => 'المسيحية',
        3 => 'اخري',
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
            return $list;
            break;
        default:
            $list = \DB::table('levels')->pluck('name', 'id');
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