<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 6:50 PM
 */

namespace App\Briefs\Repositories;


use App\Briefs\BrandDoc;

class BrandDocRepo {

    /**
     * @var BrandDoc
     */
    private $model;

    public function __construct(BrandDoc $model)
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