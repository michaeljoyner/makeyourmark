<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 3:01 PM
 */

namespace App\Briefs;


trait BelongsToGeneralBriefTrait {

    public function generalBrief()
    {
        return $this->belongsTo('App\Briefs\GeneralBrief', 'generalbrief_id');
    }

}