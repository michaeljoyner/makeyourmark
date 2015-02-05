<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 6:36 PM
 */

namespace App\Briefs\Commands;


use App\Briefs\Repositories\LogoImageRepo;
use App\Commanding\CommandHandler;

class LogoImagesUploadedCommandHandler implements CommandHandler {

    /**
     * @var LogoImageRepo
     */
    private $repo;

    public function __construct(LogoImageRepo $repo)
    {

        $this->repo = $repo;
    }
    /**
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $this->repo->store($command);
    }
}