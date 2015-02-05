<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 5:18 PM
 */

namespace App\Briefs\Repositories;


use App\Briefs\BrandBrief;

class BrandBriefRepo {

    /**
     * @var BrandBrief
     */
    private $model;

    public function __construct(BrandBrief $model)
    {

        $this->model = $model;
    }

    public function store($dataObject)
    {
        $brandBrief = $this->model->create([
            'generalbrief_id' => $dataObject->generalbrief_id,
            'brandmaterials' => $dataObject->brandmaterials,
            'branduse' => $dataObject->branduse,
            'brandspecifics' => $dataObject->brandspecifics,
            'branddirection' => $dataObject->branddirection,
            'brandcolour' => $dataObject->brandcolour,
            'brandrestrictions' => $dataObject->brandrestrictions
        ]);

        return $brandBrief;
    }

}