<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 2:37 PM
 */

namespace App\Briefs;


use Illuminate\Database\Eloquent\Model;

class LogoBrief extends Model {

    use BelongsToGeneralBriefTrait;
    
    protected $table = 'logobriefs';

    protected $fillable = [
        'generalbrief_id',
        'haslogo',
        'colour',
        'logodirection',
        'logorestrictions',
        'logorequirements'
    ];

    public function images()
    {
        return $this->hasMany('App\Briefs\LogoImage', 'logobrief_id');
    }



}