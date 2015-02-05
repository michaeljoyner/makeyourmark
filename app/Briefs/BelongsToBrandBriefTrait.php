<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 3:08 PM
 */

namespace App\Briefs;


trait BelongsToBrandBriefTrait {

    public function brandBrief()
    {
        return $this->belongsTo('App\Briefs\BrandBrief', 'brandbrief_id');
    }

}