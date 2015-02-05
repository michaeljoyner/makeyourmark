<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 3:33 PM
 */

namespace App\Briefs\Commands;


class WebBriefSubmittedCommand {

    public $generalbrief_id;
    public $hasdomain;
    public $domain;
    public $webhosting;
    public $webhosting_details;
    public $webtype;
    public $webtype_details;
    public $webcm;
    public $webcm_details;
    public $websocial;
    public $webtarget;
    public $webrequirements;
    public $webdirection;

    public function __construct($generalbrief_id, $data)
    {
        $this->generalbrief_id = $generalbrief_id;
        $this->hasdomain = $data['hasdomain'];
        $this->domain = $data['domain'];
        $this->webhosting = $data['webhosting'];
        $this->webhosting_details = $data['webhosting_details'];
        $this->webtype = $data['webtype'];
        $this->webtype_details = $data['webtype_details'];
        $this->webcm = $data['webcm'];
        $this->webcm_details = $data['webcm_details'];
        $this->websocial = $data['websocial'];
        $this->webtarget = $data['webtarget'];
        $this->webrequirements = $data['webrequirements'];
        $this->webdirection = $data['webdirection'];
    }

}