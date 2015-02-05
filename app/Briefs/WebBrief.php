<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 2:44 PM
 */

namespace App\Briefs;


use Illuminate\Database\Eloquent\Model;

class WebBrief extends Model {

    use BelongsToGeneralBriefTrait;

    protected $table = 'webbriefs';

    protected $fillable = [
        'generalbrief_id',
        'hasdomain',
        'domain',
        'webhosting',
        'webhosting_details',
        'webtype',
        'webtype_details',
        'webcm',
        'webcm_details',
        'websocial',
        'webtarget',
        'webrequirements',
        'webdirection'
    ];

}