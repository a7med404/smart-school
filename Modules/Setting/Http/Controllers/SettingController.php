<?php

namespace Modules\Setting\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Setting\Entities\Setting;
use \Session;
use App\Helper\UploadFile;

class SettingController extends Controller
{
    public function index(Setting $siteSetting){
      $siteSetting = $siteSetting->all();
      return view('setting::settings.index', ['stieSetting' => $siteSetting]);
    }
    
    public function store(Request $request, Setting $siteSetting){
      $newNameForImage = null; # For If Not Have Image Set Null
      if ($request->hasFile('logo')) {
          $newObjectForImage = new UploadFile();
          $newNameForImage = $newObjectForImage->uploadOne($request, 'logo', 'public/uploads/setting');
          $siteSetting->where('name_setting', 'logo')->update(['value' => $newNameForImage]);
      }
      foreach (array_except($request->toArray(), ['submit', '_token', 'logo']) as $key => $req) {
          $updateSetting = $siteSetting->where('name_setting', $key)->first();
          $u = $updateSetting->fill(['value' => $req])->save();
      }
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Setting Saved Successfully');
    }

}
