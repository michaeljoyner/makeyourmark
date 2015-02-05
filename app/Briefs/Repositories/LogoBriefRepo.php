<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 5:06 PM
 */

namespace App\Briefs\Repositories;


use App\Briefs\LogoBrief;

class LogoBriefRepo {

    /**
     * @var LogoBrief
     */
    private $model;

    public function __construct(LogoBrief $model)
    {

        $this->model = $model;
    }

    public function store($dataObject)
    {
        $logoBrief = $this->model->create([
            'generalbrief_id' => $dataObject->generalbrief_id,
            'haslogo' => $dataObject->haslogo,
            'colour' => $dataObject->colour,
            'logodirection' => $dataObject->logodirection,
            'logorestrictions' => $dataObject->logorestrictions,
            'logorequirements' => $dataObject->logorequirements
        ]);

        return $logoBrief;
    }

}