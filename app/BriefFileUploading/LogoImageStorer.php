<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 10:53 AM
 */

namespace App\BriefFileUploading;


use App\Services\FileStorer;

class LogoImageStorer extends FileStorer {

    protected $path = 'useruploads/logoimages';

}