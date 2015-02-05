<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 2:49 PM
 */

namespace App\Briefs;


use Illuminate\Database\Eloquent\Model;

class BrandDoc extends Model {

    use BelongsToBrandBriefTrait;

    protected $table = "branddocs";

    protected $fillable = [
        'brandbrief_id',
        'filepath'
    ];

}