<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 3:27 PM
 */

namespace App\Briefs\Commands;


use App\Briefs\Repositories\LogoBriefRepo;
use App\Commanding\CommandHandler;

class LogoBriefSubmittedCommandHandler implements CommandHandler {

    /**
     * @var LogoBriefRepo
     */
    private $repo;

    public function __construct(LogoBriefRepo $repo)
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