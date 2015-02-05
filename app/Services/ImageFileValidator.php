<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 10:36 PM
 */

namespace App\Services;


class ImageFileValidator extends FileValidator {

    protected $validMimes = [
        'image/png',
        'image/jpeg',
        'image/gif',
        'image/jpg',
        'image/svg'
    ];

}