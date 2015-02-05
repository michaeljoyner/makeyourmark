<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 11:04 AM
 */

namespace App\BriefFileUploading;


use App\Services\FileStorer;

class BrandImageStorer extends FileStorer {

    protected $path = 'useruploads/brandimages';

}