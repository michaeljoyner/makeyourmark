<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 9:08 PM
 */

namespace App\Briefs\Commands;


class BrandUploadsSubmittedCommand {

    public $brandbrief_id;
    public $uploadedfiles;

    function __construct($brandbrief_id, $uploadedfiles)
    {
        $this->brandbrief_id = $brandbrief_id;
        $this->uploadedfiles = $uploadedfiles;
    }


}