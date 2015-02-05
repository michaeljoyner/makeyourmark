<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 11:05 AM
 */

namespace App\BriefFileUploading;


class BrandFileUploadedCommand {

    public $upload;

    function __construct($upload)
    {
        $this->upload = $upload;
    }

}