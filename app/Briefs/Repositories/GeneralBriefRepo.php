<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 4:06 PM
 */

namespace App\Briefs\Repositories;


use App\Briefs\Events\GeneralBriefWasSubmitted;
use App\Briefs\GeneralBrief;

class GeneralBriefRepo {

    /**
     * @var GeneralBrief
     */
    private $model;

    public function __construct(GeneralBrief $model)
    {

        $this->model = $model;
    }

    public function store($dataObject)
    {
        $generalBrief = $this->model->create([
            'contact_person' => $dataObject->contact_person,
            'email' => $dataObject->email,
            'company' => $dataObject->company,
            'industry' => $dataObject->industry,
            'since' => $dataObject->since,
            'website' => $dataObject->website,
            'background' => $dataObject->background,
            'reaction' => $dataObject->reaction,
            'nutshell' => $dataObject->nutshell
        ]);

        $generalBrief->raise(new GeneralBriefWasSubmitted($generalBrief));

        return $generalBrief;
    }

}