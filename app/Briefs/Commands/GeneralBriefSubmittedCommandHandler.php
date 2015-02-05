<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 3:22 PM
 */

namespace App\Briefs\Commands;


use App\Briefs\Repositories\GeneralBriefRepo;
use App\Commanding\CommandHandler;

class GeneralBriefSubmittedCommandHandler implements CommandHandler {

    /**
     * @var GeneralBriefRepo
     */
    private $repo;

    public function __construct(GeneralBriefRepo $repo)
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