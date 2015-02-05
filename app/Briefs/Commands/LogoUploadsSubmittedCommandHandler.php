<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 8:52 PM
 */

namespace App\Briefs\Commands;


use App\BriefFileUploading\LogoImageStorer;
use App\Briefs\Repositories\LogoImageRepo;
use App\Commanding\CommandHandler;

class LogoUploadsSubmittedCommandHandler implements CommandHandler {

    /**
     * @var LogoImageStorer
     */
    private $imageStorer;
    /**
     * @var LogoImageRepo
     */
    private $repo;

    public function __construct(LogoImageStorer $imageStorer, LogoImageRepo $repo)
    {

        $this->imageStorer = $imageStorer;
        $this->repo = $repo;
    }
    /**
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $filepaths = [];

        foreach($command->uploadedfiles as $file)
        {
            $filepaths[] = $this->imageStorer->store($file);
        }

        $filepathsDTO = new LogoImagesUploadedCommand($command->logobrief_id, $filepaths);
        $this->repo->store($filepathsDTO);
    }
}