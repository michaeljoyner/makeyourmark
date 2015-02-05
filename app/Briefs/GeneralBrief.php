<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 2:33 PM
 */

namespace App\Briefs;


use App\Eventing\EventGenerator;
use Illuminate\Database\Eloquent\Model;

class GeneralBrief extends Model {

    use EventGenerator;

    protected $table = 'generalbriefs';

    protected $fillable = [
        'contact_person',
        'email',
        'company',
        'industry',
        'since',
        'website',
        'background',
        'reaction',
        'nutshell'
    ];

    public function logoBriefs()
    {
        return $this->hasMany('App\Briefs\LogoBrief', 'generalbrief_id');
    }

    public function brandBriefs()
    {
        return $this->hasMany('App\Briefs\BrandBrief', 'generalbrief_id');
    }

    public function webBriefs()
    {
        return $this->hasMany('App\Briefs\WebBrief', 'generalbrief_id');
    }

}