<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/1/2015
 * Time: 10:34 AM
 */

namespace App\Briefs\Events;

class GeneralBriefWasSubmitted {

    public $generalbrief;

    function __construct($generalbrief)
    {
        $this->generalbrief = $generalbrief;
    }

}