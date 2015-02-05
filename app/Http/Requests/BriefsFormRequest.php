<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class BriefsFormRequest extends Request {


    public $generalFields = [
        'contact_person',
        'email',
        'company',
        'industry',
        'since',
        'website',
        'background',
        'reaction',
        'nutshell'
    ];

    public $logoFields = [
        'haslogo',
        'colour',
        'logodirection',
        'logorestrictions',
        'logorequirements'
    ];

    public $brandFields = [
        'brandmaterials',
        'branduse',
        'brandspecifics',
        'branddirection',
        'brandcolour',
        'brandrestrictions'
    ];

    public $webfields = [
        'hasdomain',
        'domain',
        'webhosting',
        'webhosting_details',
        'webtype',
        'webtype_details',
        'webcm',
        'webcm_details',
        'websocial',
        'webtarget',
        'webrequirements',
        'webdirection'
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'contact_person'     => 'required|max:255',
            'email'              => 'required|email|max:255',
            'company'            => 'max:255',
            'industry'           => 'max:255',
            'since'              => 'max:255',
            'website'            => '',
            'background'         => '',
            'reaction'           => '',
            'nutshell'           => '',
            'haslogo'            => 'integer',
            'colour'             => '',
            'logodirection'      => 'required_with:logobriefchecked',
            'logorestrictions'   => '',
            'logorequirements'   => '',
            'brandmaterials'     => 'required_with:brandbriefchecked',
            'branduse'           => '',
            'brandspecifics'     => '',
            'branddirection'     => '',
            'brandcolour'        => '',
            'brandrestrictions'  => '',
            'hasdomain'          => 'integer',
            'domain'             => 'max:255',
            'webhosting'         => '',
            'webhosting_details' => '',
            'webtype'            => 'required_with:webbriefchecked',
            'webtype_details'    => '',
            'webcm'              => '',
            'webcm_details'      => '',
            'websocial'          => '',
            'webtarget'          => '',
            'webrequirements'    => '',
            'webdirection'       => ''
        ];
    }


}
