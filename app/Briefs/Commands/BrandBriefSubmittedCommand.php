<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 3:27 PM
 */

namespace App\Briefs\Commands;


class BrandBriefSubmittedCommand {

    public $generalbrief_id;
    public $brandmaterials;
    public $branduse;
    public $brandspecifics;
    public $branddirection;
    public $brandcolour;
    public $brandrestrictions;

    public function __construct($generalbrief_id, $data)
    {
        $this->generalbrief_id = $generalbrief_id;
        $this->brandmaterials = $data['brandmaterials'];
        $this->branduse = $data['branduse'];
        $this->brandspecifics = $data['brandspecifics'];
        $this->branddirection = $data['branddirection'];
        $this->brandcolour = $data['brandcolour'];
        $this->brandrestrictions = $data['brandrestrictions'];
    }

}