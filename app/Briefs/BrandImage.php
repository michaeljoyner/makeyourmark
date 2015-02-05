<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 2:48 PM
 */

namespace App\Briefs;


use Illuminate\Database\Eloquent\Model;

class BrandImage extends Model {

    use BelongsToBrandBriefTrait;

    protected $table = "brandimages";

    protected $fillable = [
        'brandbrief_id',
        'filepath'
    ];

}