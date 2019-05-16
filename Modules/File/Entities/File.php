<?php

namespace Modules\File\Entities;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{   
    private $imageExtensions = ['jpg', 'png', 'jpeg', 'gif'];

    protected $fillable = [
        'filename',
        'path',
        'extension',
        'mimetype',
        'filesize',
        'type'
    ];
}
