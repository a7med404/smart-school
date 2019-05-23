<?php
namespace App\Helper;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use \Validator;

class UploadFile extends Controller
{
    public $name; 
    public $exte;
    public $size; 
    public $mime; 
    public $temp; 

    public $path;
    public $newName;
    public $imageDelete;
    public $imageDeletePath;

    public $multiFiles = [];

    public function uploadOne($request, $inputFileName = 'file', $path = 'public/uploads/', $imageDelete = false, $imageDeletePath = 'storage/uploads/')
    {
        if(!$this->checkIsHasFile($request, $inputFileName)){
            return $imageDelete;
        }else{
            $file = $this->checkIsHasFile($request, $inputFileName);

            $this->name = $file->getClientOriginalName(); 
            $this->exte = $file->getClientOriginalExtension(); 
            $this->size = $file->getSize(); 
            $this->mime = $file->getMimeType(); 
            $this->temp = $file->getRealPath(); 

            $this->path = $path;
            $this->newName = $this->setNewName();
            $this->imageDelete = $imageDelete;
            $this->imageDeletePath = $imageDeletePath;
        }   

        if(!$this->isSizeAcceptable()){
            return redirect()->back()->withFlashMassage('Plz Select File Less than  '. $this->size);
        }else{
            $request->$inputFileName->storeAs($this->path, $this->newName);
            if ($this->imageDelete) {
                $this->deleteFile();
            }
            return $this->getNewName();
        }
    }

    private function setNewName()
    {
        return str_replace('/', '_',$this->mime.'_'.time().'_'.strtolower(substr(bcrypt($this->name.time()), 40))).'.'.$this->exte;
    }

    public function getNewName()
    {
        return $this->newName;
    }

    private function checkIsHasFile($request, $inputFileName)
    {
        return $request->hasFile($inputFileName) ? $request->$inputFileName : false;
    }

    private function isMaxFileUpload($request)
    {
        return count($request) < ini_get('max_file_uploads') ? true : false;
    }

    private function isSizeAcceptable()
    {
        preg_match_all('/(\d+)([MG])$/i', ini_get('upload_max_filesize'), $matches);
        $maxFileSizeToUpload = $matches[1][0];
        $sizeUnit = $matches[2][0];
        $currentFileSize = ($sizeUnit == 'M') ? ($this->size / 1024 / 1024) : ($this->size / 1024 / 1024 / 1024);
        $currentFileSize = ceil($currentFileSize);
        return(int) $currentFileSize < (int) $maxFileSizeToUpload;
    }

    public function deleteFile()
    {
        if(\File::exists(public_path($this->imageDeletePath.$this->imageDelete))){
            \File::delete(public_path($this->imageDeletePath.$this->imageDelete));
        }else {
            return redirect()->back()->withFlashMassage('File Does\'t Exists');
        }
    }

    public function deleteOneFile($imageDeletePath, $imageDelete)
    {
        if(\File::exists(public_path($imageDeletePath.$imageDelete))){
            \File::delete(public_path($imageDeletePath.$imageDelete));
            return null;
        }else {
            return redirect()->back()->withFlashMassage('File Does\'t Exists');
        }
    }



    public function uploadMulti($request, $inputFileName = 'file', $path = 'public/uploads/')
    {
        if(!$this->checkIsHasFile($request, $inputFileName)){
            return $this->getNewName();
        }elseif(!$this->isMaxFileUpload($this->checkIsHasFile($request, $inputFileName))){
            dd('Plz Select Number Of File Less than  '. ini_get('max_file_uploads'));
            return redirect()->back()->withFlashMassage('Plz Select Number Of File Less than  '. ini_get('max_file_uploads'));
        }else{
            $files = $this->checkIsHasFile($request, $inputFileName);
            foreach ($files as $file) {
                $this->name        = $file->getClientOriginalName(); 
                $this->exte        = $file->getClientOriginalExtension(); 
                $this->size        = $file->getSize(); 
                $this->mime        = $file->getMimeType(); 
                $this->temp        = $file->getRealPath(); 
                $this->path        = $path;
                $this->newName     = $this->setNewName();
               
                if(!$this->isSizeAcceptable()){
                    dd('Plz Select File Less than  '. $this->size);
                    return redirect()->back()->withFlashMassage('Plz Select File Less than  '. $this->size);
                }else{
                    $file->storeAs($this->path, $this->newName);
                    $this->multiFiles[] = $this->getNewName();
                    
                }
            }
            return $this->multiFiles;
        }
    }

    public function deleteMultiFile($imageDeletePath, $imagesDelete)
    {
        foreach ($imagesDelete as $image) {
            if(\File::exists(public_path($imageDeletePath.$image))){
                \File::delete(public_path($imageDeletePath.$image));
            }else {
                return redirect()->back()->withFlashMassage('File Does\'t Exists');
            }
        }
    }

//             # return  $file->store('Path'); # => Return File Name
//             # return  $file->path(); # => Return File Temp Path
//             # return  $file->extension(); # => Return File Extension

//             # For Save File In Dir All So 
//             # \Storage::put(filePath, $contents);
//             # \Storage::putFile('filePath', $file);

//             # For Get File From The Dir
//             # return \Storage::allFiles('filePath'); # Get All Files With In Sub Dir
//             # return \Storage::files('filePath');



}
