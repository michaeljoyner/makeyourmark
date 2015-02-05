<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 11:18 AM
 */

namespace App\BriefFileUploading;


use App\Services\FileStorer;

class BrandDocStorer extends FileStorer {

    protected $path = 'useruploads/branddocs';

}