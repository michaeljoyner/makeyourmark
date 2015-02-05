<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 3:16 PM
 */

namespace App\Briefs\Commands;


class GeneralBriefSubmittedCommand {

    public $contact_person;
    public $email;
    public $company;
    public $industry;
    public $since;
    public $website;
    public $background;
    public $reaction;
    public $nutshell;

    public function __construct($data)
    {
        $this->contact_person = $data['contact_person'];
        $this->email = $data['email'];
        $this->company = $data['company'];
        $this->industry = $data['industry'];
        $this->since = $data['since'];
        $this->website = $data['website'];
        $this->background = $data['background'];
        $this->reaction = $data['reaction'];
        $this->nutshell = $data['nutshell'];
    }

}