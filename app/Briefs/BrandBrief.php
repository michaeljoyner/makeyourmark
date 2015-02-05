<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 2:39 PM
 */

namespace App\Briefs;


use Illuminate\Database\Eloquent\Model;

class BrandBrief extends Model {

    use BelongsToGeneralBriefTrait;

    protected $table = "brandbriefs";

    protected $fillable = [
        'generalbrief_id',
        'brandmaterials',
        'branduse',
        'brandspecifics',
        'branddirection',
        'brandcolour',
        'brandrestrictions'
    ];

    public function images()
    {
        return $this->hasMany('App\Briefs\BrandImage', 'brandbrief_id');
    }

    public function docs()
    {
        return $this->hasMany('App\Briefs\BrandDoc', 'brandbrief_id');
    }

}