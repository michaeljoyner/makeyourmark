<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 6:44 PM
 */

namespace App\Briefs\Repositories;


use App\Briefs\LogoImage;

class LogoImageRepo {

    /**
     * @var LogoImage
     */
    private $model;

    public function __construct(LogoImage $model)
    {

        $this->model = $model;
    }

    public function store($dataObject)
    {
        foreach($dataObject->filepaths as $filepath)
        {
            $this->model->create([
                'logobrief_id' => $dataObject->logobrief_id,
                'filepath' => $filepath
            ]);
        }
    }

}