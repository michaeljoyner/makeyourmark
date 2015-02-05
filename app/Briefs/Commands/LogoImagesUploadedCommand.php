<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 6:34 PM
 */

namespace App\Briefs\Commands;


class LogoImagesUploadedCommand {

    public $logobrief_id;
    public $filepaths;

    function __construct($logobrief_id, $filepaths)
    {
        $this->logobrief_id = $logobrief_id;
        $this->filepaths = $filepaths;
    }


}