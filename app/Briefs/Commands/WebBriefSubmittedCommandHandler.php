<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 3:41 PM
 */

namespace App\Briefs\Commands;


use App\Briefs\Repositories\WebBriefRepo;
use App\Commanding\CommandHandler;

class WebBriefSubmittedCommandHandler implements CommandHandler {

    /**
     * @var WebBriefRepo
     */
    private $repo;

    public function __construct(WebBriefRepo $repo)
    {

        $this->repo = $repo;
    }

    /**
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        return $this->repo->store($command);
    }
}