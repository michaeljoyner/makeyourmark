<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 8:49 PM
 */

namespace App\Briefs\Commands;


class LogoUploadsSubmittedCommand {

    public $logobrief_id;
    public $uploadedfiles;

    function __construct($logobrief_id, $uploadedfiles)
    {
        $this->logobrief_id = $logobrief_id;
        $this->uploadedfiles = $uploadedfiles;
    }


}