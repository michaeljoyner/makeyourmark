<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 6:58 PM
 */

namespace App\Briefs\Commands;


class BrandFilesUploadedCommand {

    public $brandbrief_id;
    public $filepaths;

    function __construct($brandbrief_id, $filepaths)
    {
        $this->brandbrief_id = $brandbrief_id;
        $this->filepaths = $filepaths;
    }


}