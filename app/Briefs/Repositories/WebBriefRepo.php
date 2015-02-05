<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 5:12 PM
 */

namespace App\Briefs\Repositories;


use App\Briefs\WebBrief;

class WebBriefRepo {

    /**
     * @var WebBrief
     */
    private $model;

    public function __construct(WebBrief $model)
    {

        $this->model = $model;
    }

    public function store($dataObject)
    {
        $webBrief = $this->model->create([
            'generalbrief_id' => $dataObject->generalbrief_id,
            'hasdomain' => $dataObject->hasdomain,
            'domain' => $dataObject->domain,
            'webhosting' => $dataObject->webhosting,
            'webhosting_details' => $dataObject->webhosting_details,
            'webtype' => $dataObject->webtype,
            'webtype_details' => $dataObject->webtype_details,
            'webcm' => $dataObject->webcm,
            'webcm_details' => $dataObject->webcm_details,
            'websocial' => $dataObject->websocial,
            'webtarget' => $dataObject->webtarget,
            'webrequirements' => $dataObject->webrequirements,
            'webdirection' => $dataObject->webdirection
        ]);

        return $webBrief;
    }

}