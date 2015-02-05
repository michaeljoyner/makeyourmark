<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 10:55 AM
 */

namespace App\BriefFileUploading;


use App\Commanding\CommandHandler;

class LogoImageUploadedCommandHandler implements CommandHandler {

    /**
     * @var LogoImageStorer
     */
    private $logoImageStorer;

    public function __construct(LogoImageStorer $logoImageStorer)
    {

        $this->logoImageStorer = $logoImageStorer;
    }
    /**
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        return $this->logoImageStorer->store($command->upload);
    }
}