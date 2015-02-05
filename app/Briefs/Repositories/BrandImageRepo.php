<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 6:47 PM
 */

namespace App\Briefs\Repositories;


use App\Briefs\BrandImage;

class BrandImageRepo {

    /**
     * @var BrandImage
     */
    private $model;

    public function __construct(BrandImage $model)
    {

        $this->model = $model;
    }

    public function store($dataObject)
    {
        foreach($dataObject->filepaths as $filepath)
        {
            $this->model->create([
                'brandbrief_id' => $dataObject->brandbrief_id,
                'filepath' => $filepath
            ]);
        }
    }

}