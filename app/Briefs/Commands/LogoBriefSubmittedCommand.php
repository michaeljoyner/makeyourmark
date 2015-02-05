<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 3:23 PM
 */

namespace App\Briefs\Commands;


class LogoBriefSubmittedCommand {

    public $generalbrief_id;
    public $haslogo;
    public $colour;
    public $logodirection;
    public $logorestrictions;
    public $logorequirements;

    public function __construct($generalbrief_id, $data)
    {
        $this->generalbrief_id = $generalbrief_id;
        $this->haslogo = $data['haslogo'];
        $this->colour = $data['colour'];
        $this->logodirection = $data['logodirection'];
        $this->logorestrictions = $data['logorestrictions'];
        $this->logorequirements = $data['logorequirements'];
    }

}