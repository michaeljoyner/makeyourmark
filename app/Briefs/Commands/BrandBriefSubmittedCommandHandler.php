<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 3:32 PM
 */

namespace App\Briefs\Commands;


use App\Briefs\Repositories\BrandBriefRepo;
use App\Commanding\CommandHandler;

class BrandBriefSubmittedCommandHandler implements CommandHandler {

    /**
     * @var BrandBriefRepo
     */
    private $repo;

    public function __construct(BrandBriefRepo $repo)
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