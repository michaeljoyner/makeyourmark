<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 2:47 PM
 */

namespace App\Briefs;


use Illuminate\Database\Eloquent\Model;

class LogoImage extends Model {

    protected $table = "logoimages";

    protected $fillable = [
        'logobrief_id',
        'filepath'
    ];

    public function logoBrief()
    {
        return $this->belongsTo('App\Briefs\LogoBrief', 'logobrief_id');
    }

}