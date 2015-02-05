<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 10:49 AM
 */

namespace App\BriefFileUploading;


class LogoImageUploadedCommand {
    public $upload;

    function __construct($upload)
    {
        $this->upload = $upload;
    }

}